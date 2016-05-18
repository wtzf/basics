<?php require '../init.php';

    if (empty($_SESSION['home'])) {
      redirect('请登录后点击购买',URL.'login.php',3);
      exit;
    }
    $_SESSION['get']=$_GET;
 

    // 生成的订单存到数据库
    $ordernum = date('Ymd').mt_rand(0,9999999999999999);
    $_SESSION['ordernum'][]=$ordernum;

    redirect('订单生成成功,正在为您跳转到确定地址页面','./address.php',1);