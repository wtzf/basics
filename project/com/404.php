<?php 
    require '../init.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>404</title>

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron">
      <div class="container">
        <div class="row h1 .center-block">
        <div class="col-md-6 col-md-offset-3">
            <img src="../imgs/0013+404+error+page.jpg" class=".text-center"></div>
        </div>
        <div class="row h2">
            <h3 >
            <?php redirect('页面错误即将自动返回到主页面',URL.'index.php',3); ?>
            </h3>
        </div>
        <div class="row h1">
            <h1 ></h1>
        </div>
        <div class="row h1">
            <h1 ></h1>
        </div>
      </div>
    </div>

    <!-- 此处引入jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>