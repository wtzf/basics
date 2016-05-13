<?php require './init.php';
    // p($_SESSION);
    // exit;
    if (empty($_SESSION['admin'])) {
      redirect('请登录后点击购买',URL.'login.php',3);
      exit;
    }
    //商品ID
    @$goods_id = $_GET['goods_id'];
    //查询商品详情
    $sql = "
        SELECT i.iname, g.id, g.gname, g.price, g.stock, g.sale, g.msg, g.zan
        FROM ".PRE."goods g, ".PRE."image i
        WHERE g.id = i.goods_id AND i.cover=1 AND g.id='$goods_id';";

    $list = query($link, $sql);
    $list = $list[0];//去除0下标
    // p($list);
   
    //将该商品的所有非封面全部查出来
    $sql = "SELECT iname FROM ".PRE."image WHERE goods_id='$goods_id' AND cover=0";
    $img_list = query($link, $sql);
    // p($img_list);

?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街订单页</title>

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
          <h1>订单中心</h1>
      </div>

      <div class="row">
          <?php if (empty($_SESSION['cart'])): ?>
              <h3>购物车空空如也....</h3>
              <p><a href="./index.php">[继续购物]</a></p>
          <?php else: ?>
              <table class="table h5">
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
                          <a  class="btn btn-default btn-lg"><h4>总计: <?php echo $total ?></h4></a>
                          <a href="getorderinfo.php?a=add&goods_id=<?php echo $key ?>" class="btn btn-success btn-lg"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;付&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;款&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a>
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