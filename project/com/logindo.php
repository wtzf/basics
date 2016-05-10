<?php 
    require '../init.php';

    //表单不为空,如果有空值,回之

    foreach ($_POST as $key => $val) {
        if ($val == '') {
            redirect('请完善表单信息!');
            exit;
        }
    }

    //验证码的检测
    $vcode = strtolower($_SESSION['vcode']);
    $uservcode = strtolower($_POST['vcode']);
    if ($vcode != $uservcode) {
        redirect('验证码错误!');
        exit;
    }
    //检测用户名和密码的合法性
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
    //接收用户数据
    $name = $_POST['name'];
    $pwd = md5($_POST['pwd']);

    //sql
    $sql = "SELECT `id`,`name`,`pwd`,`logincount`,`forbid` FROM ".PRE."user WHERE `name`='$name'";
    $row = query($link, $sql);

    if ($row) {
        //如果有数据,说明用户存在
        $row = $row[0];
        // p($row);
        if ($row['forbid']==1) {
            redirect('此号已被禁止登陆,请与管理员联系!',URL.'index.php',3);
            exit;
        }
        //如果有数据,就进行密码比对
        if ($row['pwd'] == $pwd) {
            //密码一致,登录成功了!清除密码和就验证码
            unset($row['pwd']);
            unset($_SESSION['vcode']);

            //将用户的ID,name放在session
            $_SESSION['home'] = $row;
            $id = $_SESSION['home']['id'];
            $arr = $_SESSION['home']['logincount']+1;

            $sql = "UPDATE ".PRE."user SET `logincount`=$arr WHERE `id`='$id'";
            // p($sql);
            $r = mysqli_query($link, $sql);
            // p($r);
            redirect('登录成功!',URL.'index.php',1);
            exit;
        }else{
            //密码不一致
            // redirect('密码错误!!');
        }
    }else{
        //用户名不存在
        redirect('用户名不存在!');
        exit;
    }

