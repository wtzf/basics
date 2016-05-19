<?php 
    require '../init.php';

    //表单不为空,如果有空值,回之
    foreach ($_POST as $key => $val) {
        if ($val == '') {
            redirect('请完善表单信息!');
            exit;
        }
    }

    //用户名验证
    $name = $_POST['name'];
    $reg1='/^[a-zA-Z]\w{3,15}$/i';
    if (!preg_match($reg1,$name)) {
        redirect('用户名格式错误');
        exit;
    }

    //手机号
    $tel=$_POST['tel'];
    $reg3='/^1[^0129]\d{9}$/';
    if (!preg_match($reg3,$tel)) {
        redirect('请输入正确的手机号');
        exit;
    }
    
    // //邮箱
    $email=$_POST['email'];
    $reg4 ='/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/';
    if (!preg_match($reg4,$email)) {
        redirect('请输入正确格式的邮箱');
        exit;
    }

    $id=$_POST['id'];
    $user_name=$_POST['name'];
    $sex=$_POST['sex']=='女'?0:($_POST['sex']=='男'?1:2);
    $tel=$_POST['tel'];
    $email=$_POST['email'];

    $sql = "UPDATE ".PRE."user SET `name`='$user_name',`sex`='$sex',`tel`='$tel',`email`='$email' WHERE `id`='$id'";
    $r = mysqli_query($link, $sql);
    if (empty($r)) {
        redirect('修改失败,请重试!');
    }else{
        redirect('修改成功!');
    }