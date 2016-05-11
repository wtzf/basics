<?php
    require '../init.php';

    header("content-type:text/html;charset=utf-8");
    $id = $_GET['id'];
    $sql = "
    SELECT g.id, g.gname, g.price, g.stock, g.sale, g.is_new, g.is_hot, g.state, g.zan, g.msg, c.cname
    FROM ".PRE."goods g,".PRE."category c
    WHERE g.cate_id = c.id AND g.id=$id;
     ";
    $result = mysqli_query($link,$sql);
    if ($result && mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
    }
    // p($row);
    $sql = "SELECT `id`,`cname`,`pid`,`path`,CONCAT(`path`,`id`,',') AS bpath FROM ".PRE."category  order by bpath";
    $cate = query($link, $sql);
    
    mysqli_close($link);
 ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>编辑用户</h2>
    <form action="./action.php?a=edit" method="post">
        <!-- 隐藏域用于传递用户的ID 以便action页面知道是编辑谁 -->
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

        商品名:
        <input type="text" name="gname" value="<?php echo $row['gname'] ?>"><br><br>
        所属分类:
        <select name="cname">
            <?php if (!empty($cate)): ?>
            <?php foreach ($cate as $val): ?>
            <option  <?php echo $row['cname']==$val['cname']?'selected':''; ?> ><?php echo str_repeat('&nbsp;&nbsp;',substr_count($val['path'],',')).'|--'.$val['cname'] ?> </option>
            <?php endforeach ?>
            <?php else: ?>
                <?php admin_redirect('网页出错,请重试'); ?>
            <?php endif ?>
        </select><br><br>
        价格: 
        <input type="text" name="price" value="<?php echo $row['price'] ?>"><br><br>
        库存:
        <input type="text" name="stock" value="<?php echo $row['stock'] ?>"><br><br>
        销量:
        <input type="text" name="sale" value="<?php echo $row['sale'] ?>" readonly><br><br>
        赞量:
        <input type="text" name="zan" value="<?php echo $row['zan'] ?>" readonly><br><br>
        状态:
        <input type="text" name="state" value="<?php echo $row['state'] ?>"> *1为上架,0为下架<br><br>
        热销:
        <input type="text" name="is_hot" value="<?php echo $row['is_hot'] ?>"> *1为热销,0为普通<br><br>
        新品:
        <input type="text" name="is_new" value="<?php echo $row['is_new'] ?>"> *1为新品,0为普通<br><br>
        描述:
        <textarea type="textarea" name="msg" value="<?php echo $row['msg'] ?>" rows="5" cols="30"><?php echo $row['msg'] ?></textarea><br><br>

        
        <input type="submit" value="保存编辑">
    </form>
</body>
</html>