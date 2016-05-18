<?php 
    require '../init.php';

    if (empty($_SESSION['home'])) {
      redirect('请登录后点击购买',URL.'login.php',3);
      exit;
    }
    $_SESSION['post']=$_POST;
    $_SESSION['get1']=$_GET;
    // p($_SESSION);
    // p($_GET);
    // p($_POST);
    // exit;

    // 把订单信息传到数据库中的订单商品表


    // p($ordernum);

    redirect('地址选择成功,即将为您跳转到订单页','../dingdan.php',1);

