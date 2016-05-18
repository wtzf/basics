<?php require './init.php' ?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街个人中心</title>

    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="./public/js/html5shiv.min.js"></script>
      <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/home.css">
  </head>
  <body>
  <!-- ================ BODY ================= -->
  <?php require PATH.'com/nav.php'; ?>
    <!-- ================ NAV ============== -->
  <?php require PATH.'com/search.php'; ?>

  <!-- ====================主体========================== -->

<div id="body_wrap">
    <div class="fm960" id="body">
        <div class="mu_wrap clearfix">
            <div class="mu_nav_wrap">
                <!-- 导航 -->
                <link href="http://www.mogujie.com/__/static/pc/member/level.css" rel="stylesheet">
<!--info-->
<div class="mu_nav_info">
    <div class="mu_nav_info_avatar">
        <div class="mu_nav_info_avatar_mk"></div>
        <img width="100" height="100" title="H丶W丶T" alt="H丶W丶T" src="http://s22.mogucdn.com/p1/160503/upload_ie4dkyzymjrtazbuhazdambqgiyde_40x40.jpg">
    </div>
    <p class="mu_nav_info_uname">H丶W丶T</p>
    <!-- <a href="http://www.mogujie.com/member" class="mu_nav_info_ulot" style="width:16px;" target="_blank"><span style="float:left;width: 16px; display: inline-block; height: 16px; margin-top: 3px;" class="vip_level0" id="vip_level"></span></a> -->

</div>
<!-- info end -->

<!-- nav -->
  <dl class="mu_nav h4">
    <dt class="h3">我的订单</dt>
    <dd class="mt5">
        <a href="/trade/order/list4buyer/?stage=0">全部订单</a>
    </dd>
    <dd class="mt5">
        <a href="/trade/order/list4buyer/?stage=1">待付款 </a>
    </dd>
    <dd class="mt5">
        <a href="/trade/order/list4buyer/?stage=4">待收货 </a>
    </dd>
    <dd class="mt5">
        <a href="/trade/order/list4buyer/?stage=5">待评价 </a>
    </dd>
    <dd class="mt5">
        <a href="/trade/order/list4buyer/?stage=6">退货退款</a>
    </dd>
  </dl>

  <dl class="mu_nav mt20">
    <dt class="mt5 h3"><a href="/trade/address">地址管理</a></dt>
  </dl>

  <dl class="mu_nav mt10">
    <dt class=" h3"><a href="/trade/safety">安全设置</a></dt>
  </dl>

<!--   <dl class="mu_nav">
    <dt>维权管理</dt>
    <dd><a href="/trade/complaint/list">投诉管理</a></dd>
    <dd><a href="/trade/report/list4buyer">举报管理</a></dd>
     <dd><a href="/support/rights/proof/list">被盗举证</a></dd> 
  </dl> -->

  <dl class="mu_nav mt20 h4">
    <dt class="h3">帐号设置</dt>
    <dd class="c"> <a href="/settings/personal">基本信息</a> </dd>
    <dd class="mt5 "> <a href="/settings/avatar">修改头像</a> </dd>
  </dl>
<!-- nav end -->
  </div>
  <div class="mu_content_wrap ">
    <script src="/js/city_utf8.js?v=1440080016" type="text/javascript"></script>

  <div class="fl" id="setting_box">
    <form>
    <div class="settings_title">
      <h1><span>基本资料</span></h1>
    </div>
    <div class="setting_basic" id="setting_form">
      <form method="post" action="">
      <dl>
        <dd>昵称：</dd>
        <dt class="unick">
          <input type="text" value="H丶W丶T" name="unick" class="r3">
          <div class="iner"></div>
        </dt>
        <dd>性别：</dd>
        <dt style="line-height: 30px;" class="sex">
          <input type="radio" style="margin:0" id="" value="2" name="sex">女
          <input type="radio" id="" value="1" name="sex" checked="">男
        </dt>
        <dd>所在地：</dd>
        <dt class="location">
          <input type="text" value="" name="province" class="r3">
        </dt>
        <dd>生日：</dd>
        <dt class="birthday">
          <select name="born[]">
            <option></option>
            <?php for ($i=2016; $i > 1848; $i--) { 
                  echo '<option value="$i">'.$i .'</option><br> ';
            }?>
          </select>&nbsp;年&nbsp;
          <select id="month" name="born[]">
            <option></option>
            <?php for ($i=1; $i<13; $i++) { 
                  echo '<option value="$i">'.$i .'</option><br> ';
            }?>
          </select>&nbsp;月&nbsp;
          <select id="day" name="born[]">
            <option></option>
            <?php for ($i=1; $i<31; $i++) { 
                  echo '<option value="$i">'.$i .'</option><br> ';
            }?>
          </select>&nbsp;日
        </dt>
      </dl>
    <div class="settings_title mt30">
      <span>其他信息</span>
        <dd>自我介绍：</dd>
          <dt><textarea class="r3" rows="10" id="" name="introduce" style="color: rgb(204, 204, 204); border-color: rgb(207, 207, 207);">随便写点什么，让大家了解你吧。</textarea></dt>
          <dd>&nbsp;&nbsp;</dd>
          <dt><input type="button" value="确认修改" class="green_button r3"></dt>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>






















  <!-- ======================================footer===================================== -->
  <?php require PATH.'com/footer.php'; ?>


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
   <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>