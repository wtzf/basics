<?php require './init.php';
    $gname = $_GET['gname'];
    $goods_id = $_GET['id'];
    $sql = "SELECT `id` FROM ".PRE."ordergoods WHERE goods_id = $goods_id ORDER BY id DESC";
    $str = query($link,$sql);
  



 ?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title><?php echo $gname; ?>蘑菇街</title>

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


    <!-- 引入商品详情 -->
    <?php require PATH.'com/shop.php'; ?>
    
    <div style="height:3px;" class="col-md-12 bg-danger mt50"></div>
    <!-- 评论显示 -->
    <div class="container">
    <div class="row mt50">
    <h1 class="mt50">评论：</h1>
    <div style="height:3px;" class="col-md-12 bg-danger mt2"></div>
    <?php
    foreach ($str as $key => $v) {
        $og_id=$v['id'];

        $sql = "SELECT `p_id`,`comment`,`return` FROM ".PRE."comment WHERE og_id = $og_id AND status=0 ORDER BY id DESC";
        if (false !== $arr = query($link,$sql)) {
            foreach ($arr as $key => $val) {
                $p_id = $val['p_id'];
              // p($val);
                $sql = "SELECT `name` FROM ".PRE."user WHERE id = $p_id";
                $res = query($link,$sql);
                $name = $res['0']['name']; ?>
                <div class=" bg-success mt20">
                    <h3 class="text-primary">用户：<?php echo $name ?></h3>
                    <h3 class="text-success">评价：<?php echo $val['comment'] ?></h3>
                    <h3 class="text-danger">回复：<?php 
                        if (empty($val['return'])) {
                          echo '店家暂未回复';
                        }else{
                         echo $val['return'] ;
                        }?>
                    </h3>
                </div>
   <?php } 
        }else{ ?>
          <h1 class="text-center">暂无评论</h1>
   <?php }
     }?>
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