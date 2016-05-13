<?php require './init.php';
    $sql = "SELECT `id`,`cname`,`path` FROM ".PRE."category WHERE `display`='1' order by path";
    $c_list = query($link, $sql);

?>


<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>蘑菇街主页</title>
    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="./public/js/html5shiv.min.js"></script>
      <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/home.css">
  </head>
  <body>
  <!-- ================ 引入导航 =============== -->
  <?php require PATH.'com/nav.php'; ?>
 
  <?php require PATH.'com/search.php'; ?>

  <!-- 引入巨幕 -->
  <?php require PATH.'com/jum.php'; ?>

  <!-- 轮播图 -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
<!--       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
<!--     <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./imgs/1idzx_ie3taztfmmztinjsgyzdambqgayde_640x960.png_468x468.jpg">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./imgs/128369648_ifrwinjuguyggmrxhazdambqhayde_640x960.jpg_468x468.jpg" > -->
<!-- 
        </div>
      </div>
    </div>
 -->
    <!-- Controls -->
<!--     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
  <!-- </div> -->


  <!-- 引入新品 -->
  <?php require PATH.'com/is_new.php'; ?>
  <!-- 引入新品 -->
  <?php require PATH.'com/is_hot.php'; ?>














<!-- =================引入尾部============= -->
  <?php require PATH.'com/footer.php'; ?>


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>