<?php 
    //此页面会进行 增 删 改
    require '../init.php';

    // p($_GET);
    // p($_POST);
    // p($_FILES);
    // exit;

    $a = $_GET['a'];
    switch ($a) {
            // 发货
        case 'fa':
            $id = $_GET['order_id'];
            $sql = "UPDATE ".PRE."order SET `status`='1' WHERE id='$id'";
            $result= admin_execute($link, $sql);
            header("location:".$_SERVER['HTTP_REFERER']);
            exit;
            break;

            // 撤单
        case 'che':
            $id = $_GET['order_id'];
            $sql = "UPDATE ".PRE."order SET `status`='3' WHERE id='$id'";
            $result= admin_execute($link, $sql);
            header("location:".$_SERVER['HTTP_REFERER']);
            exit;
            break;

            // 收货
        case 'shou':
            $id = $_GET['order_id'];
            $sql = "UPDATE ".PRE."order SET `status`='2' WHERE id='$id'";
            $result= admin_execute($link, $sql);
            // 减少库存增加销量
            $sql = "SELECT `goods_id`,`qty` FROM ".PRE."ordergoods WHERE order_id = $id";
            $arr = query($link,$sql);
            foreach ($arr as $key => $val) {
                $goods_id = $val['goods_id'];
                $qty = $val['qty'];
                $sql = "SELECT `sale`,`stock` FROM ".PRE."goods WHERE id = $goods_id";
                $str = query($link,$sql);
                foreach ($str as $key => $v) {
                    $sale = $v['sale'] + $qty;
                    $stock = $v['stock'] - $qty;
                    $sql = "UPDATE ".PRE."goods SET `sale`='$sale',`stock`='$stock' WHERE id='$goods_id'";
                    $res= admin_execute($link, $sql);
                }
            
            }
            header("location:".$_SERVER['HTTP_REFERER']);
            break;
            // 
        case 'ping':
            $comment = $_POST['ping'];
            $p_id = $_POST['p_id'];
            $o_id = $_POST['o_id'];
            $og_id = $_POST['og_id'];
            // p($p_id);
            // p($og_id);
            // 插入到评论数据表
            $sql = "INSERT INTO ".PRE."comment (`og_id`,`p_id`,`comment`) VALUES ('$og_id','$p_id','$comment')";
            $result= admin_execute($link, $sql);
            header("location:".ADMIN_URL."../myself.php");
            exit;
            break;
        }

    //8.关闭连接
    mysqli_close($link);



