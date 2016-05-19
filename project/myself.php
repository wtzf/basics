<?php require './init.php';

    if (empty($_SESSION['home'])) {
      redirect('请先登录',URL.'login.php',3);
      exit;
    }

    $user_id = $_SESSION['home']['id'];
    // 查找数据库个人信息表
    $sql = "SELECT `id`,`name`,`sex`,`tel`,`email` FROM ".PRE."user WHERE `id`='$user_id'";
    $row = query($link, $sql);
    $row = $row['0'];
    // p($row);
    $user_name = $row['name'];
    $user_sex = $row['sex'];
    $user_id = $row['id'];
    $user_tel = $row['tel'];
    $user_email = $row['email'];
    if (isset($_GET['status'])) {
      $status = $_GET['status'];
   

    // 根据用户的ID 在订单表中查找出其所有的订单号。订单ID和订单的总价

    }
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
          $sql = "SELECT `id`,`ordernum`,`allprice`,`status` FROM ".PRE."order WHERE user_id = $user_id AND status=$status ORDER BY id DESC";
        }else{
        $rows = mysqli_affected_rows($link);
        //显示当前页查询到的记录数量
        //分页开始
        //总记录数
        $sql = "SELECT count(*) total FROM s47_order";
        $row = query($link, $sql);
        $total = $row[0]['total'];
        //每页显示数
        $num =6;
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

        $pageurl = 'myself.php';
        //产生数字链接
        $num_link = '';
        for ($i = $start; $i <= $end; $i++) {
            if ($page == $i) {
                $num_link .= '<li class="active"><a href="./'.$pageurl.'?page='.$i.$urlname.'">'.$i.'</a></li>';
                continue;
            }
            $num_link .= '<li><a href="./'.$pageurl.'?page='.$i.$urlname.'">'.$i.'</a></li>';
        }
        $sql = "SELECT `id`,`ordernum`,`allprice`,`status` FROM ".PRE."order WHERE user_id = $user_id ORDER BY id DESC LIMIT $offset,$num";
      }
        }
    $str = query($link,$sql);

    // p($_SESSION);
?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街个人中心</title>

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
  <?php require PATH.'com/search.php'; ?>

  <!-- ====================主体========================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <h2>用户名:<?php echo $user_name ?></h2>
            <h1><a href="./myself.php?a=gai">修改资料</a></h1>
            <h1><a href="./myself.php?a=pwd">修改密码</a><h1>
            <h1><a href="./myself.php?a=order">订单中心</a><h1>

            </div>
            <div class="col-md-10">
                <?php if (@$_GET['a'] =='gai'){ ?>
                    <form class="form-horizontal" action="./com/myselfdo.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $user_id ?>">
                        <div class="form-group h4">
                          <label for="inputEmail3" class="col-md-2 control-label">用户名:</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" value="<?php echo $user_name ?>"  name="name" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-group h4">
                          <label for="inputPassword3" class="col-md-2 control-label">性别:</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" value="<?php echo $user_sex==0?'女':($user_sex==1?'男':'保密'); ?>" name="sex" id="inputPassword3">
                          </div>
                        </div>
                        <div class="form-group h4">
                          <label for="inputPassword3" class="col-md-2 control-label">电话:</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" value="<?php echo $user_tel ?>" name="tel" id="inputPassword3">
                          </div>
                        </div>
                        <div class="form-group h4">
                          <label for="inputPassword4" class="col-md-2 control-label">邮箱:</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" value="<?php echo $user_email ?>" name="email" id="inputPassword4">
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                              <button type="submit" class="btn btn-success btn-lg">确认</button>
                              <button type="reset" class="btn btn-success btn-lg">重置</button>
                            </div>
                          </div>
                        </form>
                <?php }elseif(@$_GET['a'] == 'pwd'){ ?>
                <div class="conatiner">
                    <div class="clearfix "></div>
                    <h1 class="text-center mt50 h1"> <b>设置新密码</b></h1>
                    <hr>
                    
                    <form action="./com/changpwddo.php" method="post" class="form-horizontal col-md-6 col-md-offset-2">
                    <div class="form-group h3">
                        <label for="pwd" class="col-md-4 control-label">新 密 码 </label>
                        <div class="col-md-8">
                            <input type="password" name="pwd" class="form-control input-lg" id="pwd" placeholder="请输入新密码..">
                            <span >*请输入新密码</span>
                        </div>
                    </div>

                    <div class="form-group h3">
                        <label for="repwd" class="col-md-4 control-label">确认密码</label>
                        <div class="col-md-8">
                            <input type="password" name="repwd" class="form-control  input-lg" id="repwd" placeholder="把上面那家伙再来一次">
                            <span>*请再次输入新密码</span>
                        </div>
                    </div>
                      <div class="form-group mt20">
                        <div class="col-md-8 col-md-offset-4">
                          <button type="submit" class="btn btn-primary btn-lg btn-block">确定修改</button>
                        </div>
                      </div>
                    </form>
                    <?php }else{ ?>
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
                    <div class="row mt20">
                        <a href="./myself.php" class="btn btn-success btn-lg">全部订单</a>
                        <a href="./myself.php?status=0" class="btn btn-success btn-lg">未发货</a>
                        <a href="./myself.php?status=1" class="btn btn-success btn-lg">已发货</a>
                        <a href="./myself.php?status=2" class="btn btn-success btn-lg">已收货</a>
                        <a href="./myself.php?status=3" class="btn btn-success btn-lg">已失效</a>
                        <a href="./myself.php?status=4" class="btn btn-success btn-lg">交易结束</a>
                    </div>
                    <div class="row mt20">
                    <table class="table h5 ">
                        <tr class="h3 info ">
                            <th>宝贝</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>总价</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if (empty($str)){?>
                                <tr class="h1 text-center"><td colspan="6" ><b>暂无数据</b></td></tr>
                                <tr class="h1 text-center"><td colspan="6" ><b><a href="./index.php">前去购物</a></b></td></tr>
                    <?php      }else{ ?>

                   <?php foreach ($str as $key => $value) {
                          $order_id =$value['id'];
                          $status =$value['status'];

                          $ordernum = $value['ordernum']; ?>
                        <tr  class="success"><td colspan="6"  class="h4 ">订单号:<?php echo $ordernum ?></td></tr>
              <?php   $sql = "SELECT `goods_id`,`price`,`qty` FROM ".PRE."ordergoods WHERE order_id = $order_id";
                        $arr = query($link,$sql); 
                        foreach ($arr as $key => $val) {
                        $goods_id =$val['goods_id'];
                        $sql = "
                          SELECT i.iname, g.gname, g.price
                          FROM ".PRE."goods g,".PRE."image i
                          WHERE g.id = i.goods_id AND g.id=$goods_id";
                        $result = query($link,$sql); 
                        foreach ($result as $k => $v){ ?>

                        <tr class="active">
                            <td>
                                <a href="./xiangqing.php?id=<?php echo $goods_id ?>&gname=<?php echo $v['gname'] ?>">
                                </a>
                                <a href="./xiangqing.php?id=<?php echo $goods_id ?>&gname=<?php echo $v['gname'] ?>">
                                    <img src="<?php echo getpath(URL.'uploads/',$v['iname'],'b') ?>">
                                    <?php echo $v['gname'] ?>
                                </a>
                            </td>
                            <td class="h4"><?php echo $v['price'] ?></td>
                            <td class="h4">
                                <?php echo $val['qty'] ?>
                            </td>
                            <td class="h4"><?php echo $v['price'] * $val['qty'] ?></td>
                            <td class="h4">
                                <?php switch ($status) {
                                case '0':
                                    echo '未发货<br><a href="./admin/order/action.php?a=che&order_id='.$order_id.'">取消订单</a>';
                                    break;
                                case '1':
                                    echo '已发货<br><a href="./admin/order/action.php?a=shou&order_id='.$order_id.'">确定收货</a>';
                                    break;
                                case '2':
                                    echo '已收货';
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
                            <?php if ($status=='2') {
                                $sql = "SELECT `id` FROM ".PRE."ordergoods WHERE order_id = $order_id AND goods_id = $goods_id";
                                $arr = query($link,$sql); 
                                $og_id = $arr['0']['id'];
                                $p_id = $_SESSION['home']['id'];

                                $sql = "SELECT `status` FROM ".PRE."comment WHERE og_id = $og_id AND p_id = $p_id";
                                $a = query($link,$sql); 
                                $statusp = $a['0']['status'];
                                if ($statusp=='0') {
                                    echo '评价';
                                }else{
                                    echo '<a href="./comment.php?goods_id='.$goods_id.'&order_id='.$order_id.'">评价</a>';
                                }
                                
                            }else{
                                echo '评价';
                            }
                            ?>
                            </td>
                        </tr>



                  <?php  }} } ?>
                        <?php } ?>
                    </table>
                    <?php   if ((empty($_GET['status']))&&(@$_GET['status']!= '0') && (empty($_GET['ordernum']))) {
                               require PATH.'./com/page.php';
                           }?>

                <?php } ?>
                </div>
            </div>
        </div>
    </div>





  <!-- ======================================footer===================================== -->
  <?php require PATH.'com/footer.php'; ?>


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
   <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>