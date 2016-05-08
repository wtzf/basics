<?php 
    require '../init.php';

    //表单不为空,如果有空值,回之
    if ($_POST['name'] == '') {
        redirect('请填写用户名!');
        exit;
    }elseif ($_POST['tel'] == '' && $_POST['email'] == '') {
       redirect('请选填手机号或邮箱!');
       exit;
    }

    //检测验证码
    $vcode = strtolower($_SESSION['vcode']);
    $uservcode = strtolower($_POST['vcode']);
    if ($vcode != $uservcode) {
        redirect('验证码错误!');
        exit;
    }

    //接收用户数据
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    //sql
    $sql = "SELECT `id`,`name`,`tel`,`email` FROM ".PRE."user WHERE `name`='$name'";

    $row = query($link,$sql);

    if ($row) {
        //如果有数据,说明用户存在
        $row = $row[0];
        // p($row);
        //如果有数据,就进行密码比对
        if ($row['tel'] == $tel || $row['email'] == $email) {
            unset($_SESSION['vcode']);
            //将用户的ID,name放在session
            $_SESSION['home'] = $row;
            redirect('找回成功!',URL.'changpwd.php',1);
            exit;
        }else{
            redirect('信息填写错误');
        }
    }else{
        //用户名不存在
        redirect('然而该用户并不存在!',URL.'reg.php',1);
        exit;
    }

