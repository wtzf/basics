<?php require './init.php';
    // p($_SESSION);
    // p($_GET);
    // p($_POST);
    // exit;

    if (empty($_SESSION['home'])) {
      redirect('请登录后点击购买',URL.'login.php',3);
      exit;
    }
    //商品ID
    // if (!empty($_SESSION['cart'])) {

    // foreach ($_SESSION['cart'] as $key => $v) {
    //   $goods_id = $v['id'];
    // }
    if (@$_GET['add'] == 'del') {
      $address_id = $_GET['address_id'];

      $sql = "DELETE FROM ".PRE."address WHERE id = $address_id";
      $arr = execute($link,$sql);
      if (empty($arr)) {
          redirect('删除失败');
          exit;
      }
    }
    // //查询商品详情
    // $sql = "
    //     SELECT i.iname, g.id, g.gname, g.price, g.stock, g.sale, g.msg, g.zan
    //     FROM ".PRE."goods g, ".PRE."image i
    //     WHERE g.id = i.goods_id AND i.cover=1 AND g.id='$goods_id';";

    // $list = query($link, $sql);
    // $list = $list[0];//去除0下标
    // // p($list);
   
    // //将该商品的所有非封面全部查出来
    // $sql = "SELECT iname FROM ".PRE."image WHERE goods_id='$goods_id' AND cover=0";
    // $img_list = query($link, $sql);
    // // p($img_list);
    // }
    
?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街地址页</title>

    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="./public/js/html5shiv.min.js"></script>
      <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/home.css">
  </head>
  <body>
  <!-- ================ BODY ================= -->

    <!-- ================ NAV ============== -->
    <?php  require PATH.'com/nav.php'; ?>




    <div class="container">
        <div class="row">
            <h1>确定地址</h1>
        </div>
        <div class="row h4">
            <h3>选择收货地址</h3>
            <a href="./address.php?a=choice">选择地址</a>
            <a href="./address.php?a=add">新增地址</a>
        </div>
        <?php if(@$_GET['a'] == 'choice') {
                $user_id = $_SESSION['home']['id'];
                $sql = "
                        SELECT address, id, sname, phone
                        FROM ".PRE."address
                        WHERE `user_id`='$user_id' ;";
                $arr = query($link,$sql); ?>
                <?php if (empty($arr)): 
                    echo '<h1>还没有填写任何资料呢！！</h1>';
                    exit;
                     endif ?>
                     <table class="table table-hover">
                          <tr>
                            <th>ID</th>
                            <th>地址</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>确认</th>
                            <th>操作</th>
                          </tr>
            <?php    foreach ($arr as  $val) {  ?>
                          <tr>
                            <th><?php echo $val['id'] ?></th>
                            <th><?php echo $val['address'] ?></th>
                            <th><?php echo $val['sname'] ?></th>
                            <th><?php echo $val['phone'] ?></th>
                            <th><a href="./com/ordergoodsdo.php?add=old&address_id=<?php echo $val['id'] ?>">选择</a></th>
                            <th><a href="./com/address.php?add=del&address_id=<?php echo $val['id'] ?>">删除</a></th>
                          </tr><?php }?> 
                     </table>
                    </form>
              <?php }else{ ?>
                      <form class="form-horizontal" action="./com/ordergoodsdo.php?add=new&address_id=<?php echo $val['id'] ?>" method="post">
                        <div class="form-group h4">
                          <label for="inputEmail3" class="col-md-2 control-label">收货地址</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="address" id="inputEmail3" placeholder="为了您能更快地收到货物,请填写完整地址">
                          </div>
                        </div>
                        <div class="form-group h4">
                          <label for="inputPassword3" class="col-md-2 control-label">收货人姓名</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control"  name="sname" id="inputPassword3" placeholder="请填写收货人">
                          </div>
                        </div>
                        <div class="form-group h4">
                          <label for="inputPassword3" class="col-md-2 control-label">联系人电话</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control"  name="phone" id="inputPassword3" placeholder="请填写正确的手机号">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                              <button type="submit" class="btn btn-success btn-lg">确认地址</button>
                              <button type="reset" class="btn btn-success btn-lg">重置地址</button>
                            </div>
                          </div>
                        </form>
                       <?php } ?>






    <!-- ====================END=========================== -->
    <?php require PATH.'com/footer.php'; ?>



     <!-- 此处引入jQuery -->
     <script src="./public/js/jquery.min.js"></script>
     <!-- bootstrap.min.js必须放在JQ后面 -->
     <script src="./public/js/bootstrap.min.js"></script>
   </body>
 </html>