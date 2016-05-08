<?php
    require '../init.php';
    header("content-type:text/html;charset=utf-8");
    $id = $_GET['id'];
    $sql = "SELECT `id`,`name`,`sex`,`tel`,`email`,`logincount` FROM ".PRE."user WHERE `id`='$id'";
    $result = mysqli_query($link,$sql);
    if ($result && mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
    }

 ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>编辑前台用户</title>
</head>
<body>
    <h2>编辑前台用户</h2>
    <form action="./action.php?a=edit" method="post">
        <!-- 隐藏域用于传递用户的ID 以便action页面知道是编辑谁 -->
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        id:
        <input type="text" name="id" value="<?php echo $row['id'] ?>" readonly><br><br>

        name:
        <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="请输入用户名"><br><br>

        sex:
        <input type="radio" name="sex" value="0" <?php echo $row['sex']==0?'checked':''; ?>>女
        <input type="radio" name="sex" value="1" <?php echo $row['sex']==1?'checked':''; ?>>男
        <input type="radio" name="sex" value="2" <?php echo $row['sex']==2?'checked':''; ?>>保密<br><br>

        tel:
        <input type="text" name="tel" value="<?php echo $row['tel'] ?>" placeholder="请输入新tel"><br><br>

        email:
        <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="请输入新email"><br><br>

        logincount:
        <input type="text" anme="logincount" value="<?php echo $row['logincount'] ?>" readonly><br><br>

        <input type="submit" value="保存编辑">
    </form>
</body>
</html>