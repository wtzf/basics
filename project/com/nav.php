<?php 
    $sql = "SELECT `id`,`cname`,`path` FROM ".PRE."category WHERE `display`='1' order by path";
    $c_list = query($link, $sql);
    // p($c_list);exit;
 ?>
<!-- 导航条 -->
<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav navbar-left">
    <li><span class="fl glyphicon glyphicon-home sy">  <a href="./index.php">蘑菇街首页</a></span></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >分类<span class="caret"> </span></a>
          <ul class="dropdown-menu">
            <?php if (!empty($c_list)): ?>
            <?php foreach ($c_list as $val): ?>
                <li><a href="./main2.php?cate_id=<?php echo $val['id'] ?>" target="_blank"><?php echo $val['cname'] ?></a></li>
            <?php endforeach ?>
            <?php endif ?>
          </ul>
        </li>
      </ul>
        <?php if (empty($_SESSION['home'])): ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo URL ?>reg.php">注册</a></li>
          <li><a href="<?php echo URL ?>login.php">登录</a></li>


          <li><a href="./login.php"> <span class="glyphicon glyphicon-th-list" style="color:#666666;font-size:10px"></span> 我的订单</a></li>

          <li><a href="./login.php"> <span class="glyphicon glyphicon-shopping-cart" style="color:#FF4466;font-size:10px"></span> 购物车</a></li>

          <li><a href="./login.php">客户服务</a></li>

          <li class="dropdown">
             <a href="<?php echo URL ?>login.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    
             <span class="glyphicon glyphicon-home" style="color:#E92E22;font-size:15px"></span> 我的小店 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./admin/login.php">管理后台</a></li>
            <li><a href="./login.php">商家社区</a></li>
            <li><a href="./login.php">商家培训</a></li>
            <li><a href="./login.php">市场入驻</a></li>
          </ul>
        </li>
      </ul>

      <?php else: ?>
        <ul class="nav navbar-nav navbar-right">

          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['home']['name'] ?> <span class="caret"></span></a>

            <ul class="dropdown-menu">
              <li><a href="./myself.php">个人中心</a></li>
              <li><a href="./com/404.php">邀请</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="./com/logout.php">退出</a></li>
            </ul>
          </li>



          <li><a href="./shopping.php"> <span class="glyphicon glyphicon-shopping-cart" style="color:#FF4466;font-size:10px"></span> 购物车</a></li>

          <li><a href="./com/404.php">登录次数:<?php echo $_SESSION['home']['logincount'] ?></a></li>
          
          <li class="dropdown">
            <a href="./index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    <span class="glyphicon glyphicon-home" style="color:#E92E22;font-size:15px"></span> 我的小店 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="./admin/login.php">管理后台</a></li>
              <li><a href="./com/404.php">商家社区</a></li>
              <li><a href="./com/404.php">商家培训</a></li>
              <li><a href="./com/404.php">市场入驻</a></li>
            </ul>
          </li>

        </ul>
        <?php endif ?>
    </div>
  </div>
</nav>