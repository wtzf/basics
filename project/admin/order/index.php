<?php 
    require '../init.php';
    $urlname = '';
    $name = '';
    $where='';
    // 搜素
        if (isset($_GET['ordernum']) && !empty($_GET['ordernum'])) {
            echo 'ordernum';
            $ordernum = $_GET['ordernum'];
            $sql = "SELECT `id`,`ordernum`,`allprice`,`status` FROM ".PRE."order WHERE ordernum=$ordernum ORDER BY id DESC";
            $str = query($link,$sql);
            $urlname = "&name=$name";//url的参数
    }else{
        if (isset($_GET['status'])) {
          $status = $_GET['status'];
        // 根据用户的ID 在订单表中查找出其所有的订单号。订单ID和订单的总价
            $sql = "SELECT `id`,`ordernum`,`allprice`,`status` FROM ".PRE."order WHERE status=$status ORDER BY id DESC";
        }else{
        $rows = mysqli_affected_rows($link);
        //显示当前页查询到的记录数量
        //分页开始
        //总记录数
        $sql = "SELECT count(*) total FROM s47_order";
        $row = query($link, $sql);
        $total = $row[0]['total'];
        //每页显示数
        $num =1;
        //总页数
        $allpage = ceil($total / $num);
        //获取页码
        $page = isset($_GET['page'])?(int)$_GET['page']:1;

        //限制页码范围
        //页码:不能小于1 不能大于$allpage
        $page = max(1,$page);//[0,1]
        $page = min($page,$allpage);//[接收的页数,总页数]

        //获取偏移量
        $offset = ($page-1) * $num;
        //获取上一夜/下一夜
        $prev = $page - 1;
        $next = $page + 1;

        //控制数组页码的显示
        $start = max($page - 2, 1);
        $end = min($page + 2, $allpage);

        $pageurl = 'index.php';
        //产生数字链接
        $num_link = '';
        for ($i = $start; $i <= $end; $i++) {
            if ($page == $i) {
                $num_link .= '<li class="active"><a href="./'.$pageurl.'?page='.$i.$urlname.'">'.$i.'</a></li>';
                continue;
            }
            $num_link .= '<li><a href="./'.$pageurl.'?page='.$i.$urlname.'">'.$i.'</a></li>';
        }
        $sql = "SELECT `id`,`ordernum`,`allprice`,`status` FROM ".PRE."order ORDER BY `id` DESC LIMIT $offset,$num ";
        }
        }
    $str = query($link,$sql);



?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cate-list</title>

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../public/js/html5shiv.min.js"></script>
    <script src="../public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../public/admin.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1><b>订单列表</b></h1>
        <nav class="navbar">
          <div class="container-fluid">
            <div class="collapse navbar-collapse">
              <form class="navbar-form navbar-left" >
                <div class="form-group">
                  <input type="text" name="ordernum" class="form-control" placeholder="请输入订单号">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="col-md-12 mt20">
            <a href="./index.php" class="btn btn-success btn-lg">全部订单</a>
            <a href="./index.php?status=0" class="btn btn-primary btn-lg">未发货</a>
            <a href="./index.php?status=1" class="btn btn-primary btn-lg">已发货</a>
            <a href="./index.php?status=2" class="btn btn-primary btn-lg">已收货</a>
            <a href="./index.php?status=3" class="btn btn-primary btn-lg">已失效</a>
            <a href="./index.php?status=4" class="btn btn-primary btn-lg">交易结束</a>
        </div>
            <table class="table h5 mt20">
                <tr class="h3 info">
                    <th>宝贝</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>总价</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            <?php if (empty($str)){?>
                    <tr class="h1 text-center"><td colspan="6" ><b>暂无订单</b></td></tr>
        <?php      }else{ ?>
                    
               <?php foreach ($str as $k => $value) {
                      $order_id =$value['id'];
                      $status =$value['status'];
                      $ordernum = $value['ordernum']; ?>

                    <tr class="warning"><td colspan="6"  class="h4">订单号:<?php echo $ordernum ?></td></tr>

          <?php  $sql = "SELECT `goods_id`,`price`,`qty` FROM ".PRE."ordergoods WHERE order_id = $order_id";
                    $arr = query($link,$sql); 
                    foreach ($arr as $key => $val) {
                    $goods_id =$val['goods_id'];
                    $sql = "
                      SELECT i.iname, g.gname, g.price
                      FROM ".PRE."goods g,".PRE."image i
                      WHERE g.id = i.goods_id AND g.id=$goods_id";
                    $result = query($link,$sql); 
                    foreach ($result as $key => $v){ ?>

                    <tr  class="active">
                        <td>
                            <img src="<?php echo getpath(ADMIN_URL.'../uploads/',$v['iname'],'b') ?>">
                            <?php echo $v['gname'] ?>
                        </td>
                        <td class="h4"><?php echo $v['price'] ?></td>
                        <td class="h4">
                            <?php echo $val['qty'] ?>
                        </td>
                        <td class="h4"><?php echo $v['price'] * $val['qty'] ?></td>
                        <td class="h4">
                            <?php switch ($status) {
                            case '0':
                                echo '未发货';
                                break;
                            case '1':
                                echo '已发货';
                                break;
                            case '2':
                                echo '已完成';
                                break;
                            case '3':
                                echo '已失效';
                                break;
                            case '4':
                                echo '交易结束';
                                break;
                            }
                            ?>
                        </td>
                        <td class="h4">
                        <?php switch ($status) {
                        case '0':
                            echo '<a href="./action.php?a=fa&order_id='.$order_id.'" >发货</a> &nbsp;&nbsp;<a href="./action.php?a=che&order_id='.$order_id.'">撤单</a>';
                            break;
                        case '1':
                            echo '<a href="./action.php?a=shou&order_id='.$order_id.'">强制收货</a>';
                            break;
                        case '2':
                            echo '<a href="../comment/index.php">查看是否评论</a>';
                            break;
                        case '3':
                            echo '失效';
                            break;
                        case '4':
                            echo '交易结束';
                            break;
                        }
                        ?>
                        </td>
                        </tr>

              <?php  }} } }?>
        </div>
        </table>
     <?php   if ((empty($_GET['status']))&&(@$_GET['status']!= '0') && (empty($_GET['ordernum']))) {
                require ADMIN_PATH.'../com/page.php';
            }?>
    </div>

    <?php mysqli_close($link); ?>
    <!-- 此处引入jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>

        

