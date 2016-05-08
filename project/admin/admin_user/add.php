<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>添加后台用户</title>
    <link rel="stylesheet" href="./user.css">
</head>
<body>
        <h1> 添加后台用户 </h1>
        <form action="./action.php?a=add" method="post" >
            用户名:
            <input type="text" name="name" placeholder="请输入用户名"><br><br>
            密码:
            <input type="password" name="pwd" placeholder="请输入密码"><br><br>
            手机号:
            <input type="text" name="tel" placeholder="请输入tel"><br><br>
            type:
            <input type="text" name="type" placeholder="请输入权限"><br><br>

            <input type="submit" value="确认添加">
        </form>
</body>
</html>