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
    @$goods_id=$_SESSION['get']['goods_id'];
    @$ordernum = $_SESSION['ordernum']['0'];

    if ($add = $_SESSION['get1']['add'] == 'new') {
      $address = $_SESSION['post']['address'];
      $sname = $_SESSION['post']['sname'];
      $phone = $_SESSION['post']['phone'];
    }
    //查询商品详情
    $sql = "
        SELECT i.iname, g.id, g.gname, g.price, g.stock, g.sale, g.msg, g.zan
        FROM ".PRE."goods g, ".PRE."image i
        WHERE g.id = i.goods_id AND i.cover=1 AND g.id='$goods_id';";

    $list = query($link, $sql);
    $list = $list[0];//去除0下标
   
    //将该商品的所有非封面全部查出来
    $sql = "SELECT iname FROM ".PRE."image WHERE goods_id='$goods_id' AND cover=1";
    $img_list = query($link, $sql);
    // p($sql);
    // p($img_list);
    // p($list);
    // exit;
      if (@$_SESSION['get1']['add']=='new'){
          if (empty($_SESSION['post'])) {
                  redirect('请认真完成地址信息');
                  exit;
                }
          $address= $_SESSION['post']['address'];
          $sname= $_SESSION['post']['sname'];
          $phone= $_SESSION['post']['phone'];
          $user_id = $_SESSION['home']['id'];
          $sql = "INSERT INTO `s47_address` (`user_id`,`address`,`sname`,`phone`) VALUES ('$user_id','$address','$sname','$phone')";
          $str = execute($link,$sql);
          $sql = "SELECT `id` FROM ".PRE."address WHERE `user_id`='$user_id' AND `address`='$address' AND `sname`='$sname' AND `phone`='$phone'";
          $arr = query($link,$sql);
          $address_id = $arr['0']['id'];
          // p($arr);

      }else{
        @$address_id = $_SESSION['get1']['address_id'];
        $sql = "SELECT `address`,`sname`,`phone` FROM ".PRE."address WHERE id =$address_id";
        $str = query($link,$sql);
     }


    $sql="UPDATE ".PRE."order SET `address_id`='$address_id' WHERE `ordernum`='$ordernum'";
    $arr = execute($link,$sql);

?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>确认订单页</title>

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
            <h1>确定订单</h1>
        </div>
        <div class="row h4">
            <h3>收货地址</h3>
        </div>
      <?php if (@$_SESSION['get1']['add']=='new'): ?>
                   <table class="table table-bordered">
                        <tr>
                          <th>姓名</th>
                          <th>电话</th>
                          <th>地址</th>
                        </tr>
                        <tr>
                          <th><?php echo $sname ?></th>
                          <th><?php echo $phone ?></th>
                          <th><?php echo $address ?></th>
                        </tr>
                   </table>
      <?php else: ?>
          <table class="table table-bordered">
               <tr>
                 <th>姓名</th>
                 <th>电话</th>
                 <th>地址</th>
               </tr>
          <?php foreach ($str as $key => $val): ?>
               <tr>
                 <th><?php echo $val['sname'] ?></th>
                 <th><?php echo $val['phone'] ?></th>
                 <th><?php echo $val['address'] ?></th>
               </tr>
          <?php endforeach ?>
          </table>
      <?php endif ?>
      
      



        <div class="row mt50">
          <?php if (empty($_SESSION['cart'])): ?>
              <h3>购物车空空如也....</h3>
              <p><a href="./index.php">[继续购物]</a></p>
          <?php else: ?>
              <table class="table h5">
                  <div class="col-md-2">
                      <h1>商品</h1>
                  </div>
                  <div class="col-md-5 mt10">
                    <h3>订单号: <?php echo $ordernum ?> </h3>

                  </div>
                  <tr class="h3">
                      <th>图片</th>
                      <th>商品名</th>
                      <th>价格</th>
                      <th>数量</th>
                      <th>小计</th>
                  </tr>
                  <?php $total = 0; //总价的初始值?>
                  <?php foreach ($_SESSION['cart'] as $key => $val): ?>
                  <tr>
                      <td>
                          <a href="./xiangqing.php?id=<?php echo $key ?>&gname=<?php echo $val['gname'] ?>">
                              <img src="<?php echo getpath(URL.'uploads/',$val['iname'],'b') ?>">
                          </a>
                      </td>
                      <td class="h4">
                          <a href="./xiangqing.php?id=<?php echo $key ?>&gname=<?php echo $val['gname'] ?>">
                              <?php echo $val['gname'] ?>
                          </a>
                      </td>
                      <td class="h3"><?php echo $val['price'] ?></td>
                      <td class="h3"><?php echo $val['qty'] ?></td>
                      <td class="h3"><?php echo $val['price'] * $val['qty'] ?></td>
                  </tr>
                  <?php $total += $val['price'] * $val['qty'];//总价 ?>
                  <?php endforeach ?>
                  <tr  class="h2">
                      <td colspan="6" class="text-right">
                          <a  class="btn btn-default btn-lg" disabled><h4>总计: <?php echo $total ?></h4></a>
                          <a href="./com/orderinfo.php?goods_id=<?php echo $key ?>" class="btn btn-success btn-lg"><h4>&nbsp;&nbsp;&nbsp;确&nbsp;&nbsp;&nbsp;定&nbsp;&nbsp;&nbsp;订&nbsp;&nbsp;&nbsp;单&nbsp;&nbsp;&nbsp;</h4></a>
                      </td>
                  </tr>
              </table>
          <?php endif ?>
      </div>
  </div>











    <!-- ====================END=========================== -->
    <?php require PATH.'com/footer.php'; ?>



     <!-- 此处引入jQuery -->
     <script src="./public/js/jquery.min.js"></script>
     <!-- bootstrap.min.js必须放在JQ后面 -->
     <script src="./public/js/bootstrap.min.js"></script>
   </body>
 </html>