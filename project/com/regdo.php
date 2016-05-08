<?php 
    require '../init.php';


    //表单不为空,如果有空值,回之
    foreach ($_POST as $key => $val) {
        if ($val == '') {
            redirect('请完善表单信息!');
            exit;
        }
    }

    //检测验证码
    $vcode = strtolower($_SESSION['vcode']);
    $uservcode = strtolower($_POST['vcode']);
    if ($vcode != $uservcode) {
        redirect('验证码错误!');
        exit;
    }

    //用户名验证
    $name = $_POST['name'];
    $reg1='/^[a-zA-Z]\w{3,15}$/i';
    if (!preg_match($reg1,$name)) {
        redirect('用户名格式错误');
        exit;
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
    //接收用户信息
    $name = $_POST['name'];
    $pwd = md5($_POST['pwd']);
    $tel = $_POST['tel'];
    $tel = $_POST['email'];

    $sql = "INSERT INTO ".PRE."user (`name`,`pwd`,`tel`,`email`) VALUES('$name','$pwd','$tel','$email')";


    if (execute($link,$sql)) {
        redirect('注册成功!',URL.'login.php');
        exit;
    }else{
        redirect('注册失败,请重试!');
        exit;
    }

    mysqli_close($link);







