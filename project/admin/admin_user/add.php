<?php     require '../init.php'; ?>
<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>添加后台用户</title>
    <link rel="stylesheet" href="./user.css">
</head>
<body>
    <?php   $user_type =$_SESSION['admin']['type']; 
            if ($user_type != 0 ) {
                admin_redirect('权限不足,无法添加','./index.php',3);
                exit;
            }
            ?>
        <h1> 添加后台用户 </h1>
        <form action="./action.php?a=add" method="post" >
            用户名:
            <input type="text" name="name" placeholder="请输入用户名"><br><br>
            密码:
            <input type="password" name="pwd" placeholder="请输入密码"><br><br>
            手机号:
            <input type="text" name="tel" placeholder="请输入tel"><br><br>
            type:
            <input type="text" name="type" value="1" readonly><br><br>

            <input type="submit" value="确认添加">
        </form>
</body>
</html>