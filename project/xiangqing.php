<?php require './init.php';
    $gname = $_GET['gname'];



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











    <!-- ====================END=========================== -->
    <?php require PATH.'com/footer.php'; ?>



     <script src="./public/home.js"></script>
     <!-- 此处引入jQuery -->
     <script src="./public/js/jquery.min.js"></script>
     <!-- bootstrap.min.js必须放在JQ后面 -->
     <script src="./public/js/bootstrap.min.js"></script>
   </body>
 </html>