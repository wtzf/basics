<?php 
    require '../init.php';
    $urlname = '';
    $name = '';
    $where='';
    // 查询所用
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $name = $_GET['name'];
        // p($name);
        $sql = "SELECT `id`,`cname`
        FROM ".PRE."ordergoods WHERE `cname`= '$name' ";
        $result = query($link,$sql);
        $arr = $result['0'];
        $id=$arr['id'];
        $where = "WHERE `cate_id` = '$id'";//SQL查询条件
        // p($id);
        $urlname = "&name=$name";//url的参数
    }

    //分页开始
    //总记录数
    $sql = "SELECT count(*) total FROM s47_ordergoods";
    $row = query($link, $sql);
    $total = $row[0]['total'];
    //每页显示数
    $num =4;
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
    //5.SQL语句
    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $sql = "
        SELECT g.id, g.gname, g.price, g.stock, g.sale, g.is_new, g.is_hot, g.state, g.zan, g.msg, c.cname, i.iname
        FROM ".PRE."goods g,".PRE."category c,".PRE."image i
        WHERE g.cate_id ='$id' AND g.id = i.goods_id AND c.id = '$id' AND cover=1 LIMIT $offset,$num";
    }else{
        $sql = "
        SELECT g.id, g.gname, g.price, g.stock, g.sale, g.is_new, g.is_hot, g.state, g.zan, g.msg, c.cname, i.iname
        FROM ".PRE."goods g,".PRE."category c,".PRE."image i
        WHERE g.cate_id = c.id AND g.id = i.goods_id AND cover=1 LIMIT $offset,$num
        ";
    }
     // p($id);
     // exit;
    //处理结果集
    $list = query($link,$sql);
    // p($list);
    // exit;
    //显示当前页查询到的记录数量
    $rows = mysqli_affected_rows($link);
    $sql = "SELECT `id`,`goods_id`,`order_id`,`price`,`qty` FROM ".PRE."ordergoods ORDER BY id DESC LIMIT $offset,$num";
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
                  <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
            <table class="table h5">
                <tr class="h3">
                    <th>宝贝</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>总价</th>
                </tr>
            <?php if (empty($str)){?>
                    <tr class="h1 text-center"><td colspan="6" ><b>暂无订单</b></td></tr>
        <?php      }else{ 

                foreach ($str as $k => $value) {

                    $order_id =$value['order_id'];
                    $og_id =$value['id'];
                    $goods_id =$value['goods_id']; 
                    $sql = "
                        SELECT i.iname, g.gname, g.price
                        FROM ".PRE."goods g,".PRE."image i
                        WHERE g.id = i.goods_id AND g.id=$goods_id";
                    $result = query($link,$sql);
                        $sql = "SELECT `p_id`,`comment`,`return` FROM ".PRE."comment WHERE `og_id`='$og_id' ";
                        $a = query($link,$sql);
                        $p_id = $a['0']['p_id'];
                        $comment = $a['0']['comment'];
                        $return = $a['0']['return'];
                        $sql = "SELECT `name` FROM ".PRE."user WHERE id=$p_id";
                        $r = query($link,$sql);
                        $name = $r['0']['name'];
                            foreach ($result as $key => $val){ $v = $val; }?>
                                <tr>
                                    <td>
                                        <img src="<?php echo getpath(ADMIN_URL.'../uploads/',$v['iname'],'b') ?>">
                                    </td>
                                    <td>
                                        <?php echo $v['gname'] ?>
                                    </td>
                                    <td class="h4"><?php echo $value['price'] ?></td>
                                    <td class="h4">
                                        <?php echo $value['qty'] ?>
                                    </td>
                                    <td class="h4"><?php echo $value['price'] * $value['qty'] ?></td>
                                </tr>
                                <tr>
                                    <td class="h4 col-md-2" >用户:<?php echo $name ?></td>
                                    <td class="h4">评价:<?php echo $comment; ?></td>
                                    <td class="h4">回复:<?php 
                                        if (@empty($return)) { ?>
                                            <form action="./action.php" method="post">
                                                <input type="hidden" name="og_id" value="<?php echo $og_id ?>">
                                                <input type="hidden" name="p_id" value="<?php echo $p_id ?>">
                                                <input type="text" name="huifu">
                                                <input type="submit" value="回复">
                                            </form>
                                 <?php  }else{
                                        echo $return;
                                        }

                                     ?></td>
                                </tr>
                    <?php } }?>
        </div>
        </table>
        <?php require ADMIN_PATH.'../com/page.php'; ?>
    </div>

    <?php mysqli_close($link); ?>
    <!-- 此处引入jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>

        

