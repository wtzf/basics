<?php 
    require '../init.php';

        // p($_SESSION);
    $user_id = $_SESSION['home']['id'];
    if (empty($_SESSION['cart'])) {
      redirect('请先购买物品',URL.'index.php',3);
      exit;
    }
    // p($_SESSION);
    // p($_POST);
    // p($_GET);

    // 把订单信息存入order数据表中
    $allprice = '';
    foreach ($_SESSION['cart'] as $key => $v) {
    
    $allprice += $v['price']*$v['qty'];
    }

    $address_id = $_SESSION['get1']['address_id'];
    $ordernum = $_SESSION['ordernum']['0'];

    $sql = "INSERT INTO `s47_order` (`ordernum`,`address_id`,`user_id`,`allprice`) VALUES ('$ordernum','$address_id','$user_id','$allprice')";
    $str = execute($link,$sql);
    // 把订单信息存入ordergoods数据表中

    // for ($i=0; $i <count($_SESSION['cart']) ; $i++) { 
    // }

    $sql = "SELECT `id` FROM ".PRE."order WHERE ordernum = $ordernum";
    $result=query($link,$sql);
    $result = $result['0'];
    $order_id=$result['id'];
    $val = '';
    foreach ($_SESSION['cart'] as $key => $v) {
        $val .= '('.'NULL'.','.$v['id'].','.$v['price'].','.$v['qty'].','.$order_id.')'.',';
    }
    $val = rtrim($val,',');
    $sql = "INSERT INTO ".PRE."ordergoods VALUES $val";
    $arr = execute($link,$sql);
    unset($_SESSION['cart']);
    unset($_SESSION['ordernum']);
    unset($_SESSION['get']);
    unset($_SESSION['get1']);
    unset($_SESSION['post']);
    redirect('操作成功,即将为您跳转到个人中心','../myself.php',1);

 ?>