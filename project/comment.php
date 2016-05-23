<?php require './init.php';
  
    $p_id = $_SESSION['home']['id'];
    $goods_id = $_GET['goods_id'];
    $order_id = $_GET['order_id'];
    $sql = "SELECT `id` FROM ".PRE."ordergoods WHERE goods_id=$goods_id AND order_id = $order_id";
    $arr = query($link,$sql);
    $og_id = $arr['0']['id'];

 ?><div></div>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>评价</title>

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
    <div class="col-md-10 col-md-offset-1">
<!--         <div style="height:3px;" class="col-md-12 bg-danger mt50"></div> -->


    <table class="table h5">
        <tr class="h3">
            <th>宝贝</th>
            <th>单价</th>
            <th>数量</th>
            <th>总价</th>
        </tr>
   <?php  $goods_id = $_GET['goods_id'];
            $sql = "
            SELECT i.iname, g.gname, g.price, og.qty
            FROM ".PRE."goods g,".PRE."image i,".PRE."ordergoods og
            WHERE g.id = i.goods_id AND g.id=$goods_id AND og.order_id = $order_id AND og.goods_id = $goods_id";
            $result = query($link,$sql);

      foreach ($result as $key => $v){ ?>
                <tr>
                    <td>
                        <a href="./xiangqing.php?id=<?php echo $goods_id ?>&gname=<?php echo $v['gname'] ?>">
                        </a>
                        <a href="./xiangqing.php?id=<?php echo $goods_id ?>&gname=<?php echo $v['gname'] ?>">
                            <img src="<?php echo getpath(URL.'uploads/',$v['iname'],'b') ?>">
                            <?php echo $v['gname'] ?>
                        </a>
                    </td>
                    <td class="h4"><?php echo $v['price'] ?></td>
                    <td class="h4">
                        <?php echo $v['qty'] ?>
                    </td>
                    <td class="h4"><?php $all =''; echo $allprice = $v['price'] * $v['qty']; $all +=$allprice;  ?></td>
                </tr>
        <?php  } ?>
                <tr><td class="h1"> 总额 :<?php echo $all ?></td></tr>
            </table>
        </div>
        </div>

    <!-- 评论 -->
    <div class="row ">
        <div class="col-md-10 col-md-offset-1 ">
            <h1>评价：</h1>
            <form action="./com/ping.php?a=ping" method="post">
                <input type="hidden" name="p_id" value=" <?php echo $p_id ?> ">
                <input type="hidden" name="o_id" value=" <?php echo $order_id ?> ">
                <input type="hidden" name="g_id" value=" <?php echo $goods_id ?> ">
                <input type="hidden" name="og_id" value=" <?php echo $og_id ?> ">
                <textarea type="textarea" name="ping" rows="5" cols="130"></textarea>
                <button type="submit" class="btn btn-lg btn-success mt20 btn-block">确定</button>
            </form>
        </div>
    </div>
    </div>



    <!-- ====================END=========================== -->
    <?php require PATH.'com/footer.php'; ?>



     <script src="./public/home.js"></script>
     <!-- 此处引入jQuery -->
     <script src="./public/js/jquery.min.js"></script>
     <!-- bootstrap.min.js必须放在JQ后面 -->
     <script src="./public/js/bootstrap.min.js"></script>
   </body>
 </html>