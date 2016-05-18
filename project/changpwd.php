<!-- 登录页面 -->
<?php require './init.php' ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imgs/bitcoin-blank.png" type="image/png" sizes="16x16">
    <title>设置新密码</title>
    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./public/js/html5shiv.min.js"></script>
    <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/home.css">
    <link rel="stylesheet" href="./public/login.css">
</head>
<body>
<!-- 引入导航条 -->
<?php require PATH.'com/nav.php'; ?>

    <div class="conatiner mt50">

        <div class="clearfix mt50"></div>
        <h1 class="text-center mt50 h1"> <b>设置新密码</b></h1>
        <hr>
        
        <form action="./com/changpwddo.php" method="post" class="form-horizontal col-md-6 col-md-offset-2">
        <div class="form-group h3">
        <!-- $_SESSION['home'] = $row; -->
        <!-- <input type="hidden" name="id" value=" -->
         <!-- echo $row['id'] "> -->
            <label for="pwd" class="col-md-4 control-label"> 密 码 </label>
            <div class="col-md-8">
                <input type="password" name="pwd" class="form-control input-lg" id="pwd" placeholder="请输入新密码..">
                <span >*请输入新密码</span>
            </div>
        </div>

        <div class="form-group h3 mt50">
            <label for="repwd" class="col-md-4 control-label">确认密码</label>
            <div class="col-md-8">
                <input type="password" name="repwd" class="form-control  input-lg" id="repwd" placeholder="把上面那家伙再来一次">
                <span>*请再次输入新密码</span>
            </div>
        </div>
          <div class="form-group mt50">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary btn-lg btn-block">确定修改</button>
            </div>
            <div class="col-md-6 col-md-offset-6 mt30">
                <a href="./login.php" class="h2 ">想起密码??</a>
            </div>
          </div>
        </form>




<!-- END container -->
<div class="col-md-12">
<!-- 引入尾部 -->
<?php require PATH.'com/footer.php'; ?></div></div>
<script src="./public/js/holder.min.js"></script>
<!-- 此处引入jQuery -->
<script src="./public/js/jquery.min.js"></script>
<!-- bootstrap.min.js必须放在JQ后面 -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>