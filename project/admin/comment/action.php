<?php 
    //此页面会进行 增 删 改
    require '../init.php';

    // p($_POST);
    // exit;

    // 回复内容的传入数据库
    $return = $_POST['huifu'];
    $p_id = $_POST['p_id'];
    $og_id = $_POST['og_id'];
    $sql = "SELECT `id` FROM ".PRE."comment WHERE p_id=$p_id AND og_id = $og_id";
    $str = query($link,$sql);
    $id = $str['0']['id'];
    // 插入回复的内容到数据库
    $sql = "UPDATE ".PRE."comment SET `return` = '$return' WHERE id = $id";
    $arr = admin_execute($link,$sql); 
    header("location:".ADMIN_URL."./comment/index.php");
    //8.关闭连接
    mysqli_close($link);



