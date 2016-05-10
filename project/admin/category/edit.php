<?php
    require '../init.php';

    $id = $_GET['id'];
    $sql = "SELECT `id`,`cname`,`pid`,`path`,`display` FROM ".PRE."category WHERE `id`='$id' ";
    $result = query($link,$sql);
    $row = $result['0'];
    
    // p($row);
    // exit;

    mysqli_close($link);

    

 ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>编辑分类</h2>
    <form action="./action.php?a=edit" method="post">
        <!-- 隐藏域用于传递用户的ID 以便action页面知道是编辑谁 -->
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        
        分类名:
        <input type="text" name="cname" value="<?php echo $row['cname'] ?>" ><br><br>
        pid:
        <input type="text" name="pid" value="<?php echo $row['pid'] ?>" readonly><br><br>
        path:
        <input type="text" name="path" value="<?php echo $row['path'] ?>" readonly><br><br>
        是否显示:
        <input type="text" name="display" value="<?php echo $row['display']==0?'不显示':'显示'; ?>" readonly><br><br>




        <input type="submit" value="保存编辑">
    </form>
</body>
</html>