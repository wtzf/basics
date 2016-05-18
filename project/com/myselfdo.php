<?php 
    require '../init.php';

    $id=$_POST['id'];
    $user_name=$_POST['name'];
    $sex=$_POST['sex'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];

    $sql = "UPDATE ".PRE."user SET `name`='$user_name',`sex`='$sex',`tel`='$tel',`email`='$email' WHERE `id`='$id'";
    $r = mysqli_query($link, $sql);
    if (empty($r)) {
        redirect('修改失败,请重试!');
    }else{
        redirect('修改成功!');
    }