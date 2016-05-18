<?php 
    require '../init.php';

    //表单不为空,如果有空值,回之
    foreach ($_POST as $key => $val) {
        if ($val == '') {
            redirect('请完善输入新密码!');
            exit;
        }
    }
    //密码验证
    $pwd = $_POST['pwd'];
    $reg2='/\S{4,32}/';
    if (!preg_match($reg2,$pwd)) {
        redirect('请输入正确格式的密码');
        exit;
    }
    //两次密码一致性的验证
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];
    if ($pwd != $repwd) {
        redirect('两次输入的密码不相同');
        exit;
    }
    //接收用户信息
    $pwd = md5($_POST['pwd']);
    $id = $_SESSION['home']['id'];
    $sql = "UPDATE ".PRE."user SET `pwd`='$pwd' WHERE `id`='$id' ";
    unset($_SESSION['home']);
    if (execute($link,$sql)) {
        if (empty($_SESSION['home']['pwd'])) {
            redirect('修改成功!',URL.'myself.php',1);
            exit;
        }else{
        redirect('修改成功!',URL.'index.php',1);
        exit;
        }
    }else{
        redirect('修改失败,请重试!');
        exit;
    }

    mysqli_close($link);


