<?php require './init.php';


?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街购物车</title>

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
  <?php require PATH.'com/nav.php'; ?>
    <!-- ================ NAV ============== -->
 
<!-- ==================步骤==================== -->
<div class="container">
    <div class="row">
        <h1>购物车</h1>
    </div>

    <div class="row">
        <?php if (empty($_SESSION['cart'])): ?>
            <h3>购物车空空如也....</h3>
            <p><a href="./index.php">[继续购物]</a></p>
        <?php else: ?>

            <table class="table h5">
                <tr class="h3">
                    <th>图片</th>
                    <th>商品名</th>
                    <th>价格</th>
                    <th>数量</th>
                    <th>小计</th>
                    <th>操作</th>
                </tr>
                <?php $total = 0; //总价的初始值?>
                <?php foreach ($_SESSION['cart'] as $key => $val): 
                        $goods_id = $key;
                        $sql = "SELECT state FROM ".PRE."goods WHERE id = $goods_id";
                        $a = query($link,$sql);
                        foreach ($a as $key => $value) {
                            $state = $value;
                            if ($state['state'] == 0) {
                                unset($_SESSION['cart']);
                                redirect($val['gname'].'已下架请购买其他商品','./index.php',1);
                                exit;
                            }
                        }
                        ?>

                <tr>
                    <td>
                        <a href="./xiangqing.php?id=<?php echo $key ?>&gname=<?php echo $val['gname'] ?>">
                            <img src="<?php echo getpath(URL.'uploads/',$val['iname'],'b') ?>">
                        </a>
                    </td>
                    <td>
                        <a href="./xiangqing.php?id=<?php echo $key ?>&gname=<?php echo $val['gname'] ?>">
                            <?php echo $val['gname'] ?>
                        </a>
                    </td>
                    <td class="h4"><?php echo $val['price'] ?></td>
                    <td>
                        <a href="./com/cartdo.php?a=jian&goods_id=<?php echo $goods_id ?>&qty=<?php echo $val['qty'] ?>">
                            <span class="glyphicon glyphicon-minus"></span>
                        </a>
                        [ <?php echo $val['qty'] ?> ]
                        <a href="./com/cartdo.php?a=jia&goods_id=<?php echo $goods_id ?>&qty=<?php echo $val['qty'] ?>">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                        
                    </td>
                    <td class="h4"><?php echo $val['price'] * $val['qty'] ?></td>
                    <td class="h4">
                        <a href="./com/cartdo.php?a=del&goods_id=<?php echo $goods_id ?>">删除</a>
                    </td>
                </tr>
                <?php $total += $val['price'] * $val['qty'];//总价 ?>
                <?php endforeach ?>
                <tr class="h3">
                    <td colspan="6" class="text-right">
                        <a href="./index.php" class="btn btn-success btn-lg">继续购物</a>
                        <a href="./com/cartdo.php?a=alldel" class="btn btn-danger btn-lg">清空购物车</a>
                        <a  class="btn btn-default btn-lg">总计: <?php echo $total ?></a>
                        <a href="./com/orderdo.php?a=add&goods_id=<?php echo $goods_id ?>" class="btn btn-primary btn-lg">去结算</a>
                    </td>
                </tr>
            </table>
        <?php endif ?>
    </div>
</div>




<!-- ======================FIXED============================= -->
  <?php require PATH.'com/footer.php'; ?> 


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>