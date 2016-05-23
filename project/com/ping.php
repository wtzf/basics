<?php 
    //此页面会进行 增 删 改
    require '../init.php';

    // p($_GET);
    // p($_POST);
    // p($_FILES);
    // exit;

    if ($_GET['a'] == 'ping') {

            $comment = $_POST['ping'];
            $p_id = $_POST['p_id'];
            $o_id = $_POST['o_id'];
            $og_id = $_POST['og_id'];
            // p($p_id);
            // p($og_id);
            // 插入到评论数据表
            $sql = "INSERT INTO ".PRE."comment (`og_id`,`p_id`,`comment`) VALUES ('$og_id','$p_id','$comment')";
            $result= execute($link, $sql);
            header("location:../myself.php");
            exit;
        }

    //8.关闭连接
    mysqli_close($link);




