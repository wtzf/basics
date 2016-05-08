<?php 
    require '../init.php';
    @$name=$_POST['name'];
    if(isset($name)){
        if (empty($name)) {
            $sql = "SELECT `id`,`name`,`tel`,`sex`,`email`,`logincount` FROM ".PRE."user";
        }else{
        $sql = "SELECT `id`,`name`,`tel`,`sex`,`email`,`logincount` FROM ".PRE."user WHERE `name`='$name' " ;
        }
    }else{
        $sql = "SELECT `id`,`name`,`tel`,`sex`,`email`,`logincount` FROM ".PRE."user";
    }
    
    
    //处理结果集
    $user_list = query($link,$sql);

    //8.关闭MYSQL连接
    mysqli_close($link);

    // p($user_list);exit;
?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user-list</title>

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
            <h1><b>前台用户信息表</b></h1>
            <nav class="navbar">
              <div class="container-fluid">
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="./index.php">前台用户列表</a></li>
                    <li><a href="./add.php">添加前台用户</a></li>
                  </ul>
                  <form action="" method="post"  class="navbar-form navbar-left" >
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="请输入要查找的用户名">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                  </form>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>手机号</th>
                    <th>邮箱</th>
                    <th>登录次数</th>
                    <th>操作</th>
                </tr>

                <?php if (empty($user_list)): ?>

                    <tr>
                        <td colspan="7"><h3 class="text-center">暂无数据</h3></td>
                    </tr>

                <?php else: ?>
                <?php foreach ($user_list as $key => $val): ?>
                    <tr>
                        <td><?php echo $val['id'] ?></td>
                        <td><?php echo $val['name'] ?></td>
                        <td>
                        <?php
                        switch ($val['sex']) {
                            case 2:
                                echo '保密';
                                break;
                            case 1:
                                echo '男';
                                break;
                            case 0:
                                echo '女';
                                break;
                            
                        }
                        ?>
                        </td>
                        <td><?php echo $val['tel'] ?></td>
                        <td><?php echo $val['email'] ?></td>
                        <td><?php echo $val['logincount'] ?></td>
                        <td>
                            <a href="./edit.php?id=<?php echo $val['id'] ?>">编辑</a>
                            <a href="./action.php?a=del&id=<?php echo $val['id'] ?>">删除</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php endif ?>
                
                
            </table>
        </div>
    </div>


    <!-- 此处引入jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>

        

