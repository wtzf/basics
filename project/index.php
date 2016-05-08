<?php require './init.php' ?>


<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>蘑菇街主页</title>
    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="./public/js/html5shiv.min.js"></script>
      <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/home.css">
  </head>
  <body>
  <!-- ================ 引入导航 =============== -->
  <?php require PATH.'com/nav.php'; ?>
 
  <!-- ================LOGO=================== -->
  <div id="header">
    <div class="logo">
      <div class="fl">
  <!-- =============LEFT============== -->
        <div class="fl">
          <div><a href="#"><img src="./imgs/logo.png" class="logo1 "></a></div>
          <div class="logo2">全部商品</div>
        </div>
    <!-- =============END LEFT============= -->

    <!-- ============CENTER============== -->
        <div class="sou fr">
          <form class="">
              <select class="sou1 fl">
                <option selected> &nbsp;搜商品</option>
                <option > &nbsp;搜店铺</option>
              </select>
              <input type="text" class="sou2 fl"  placeholder="释放双脚来双平底鞋吧">
              <button type="submit" class="sou3 fl"><a href="#" class="glyphicon glyphicon-search"></a></button>
          </form>
          <div class="sou4 mt20">
            <a href="./main2.php" class="text-muted">防晒衣</a>
            <a href="./main2.php" class="text-muted">连衣裙</a>
            <a href="./main2.php" class="text-muted">凉鞋</a>
            <a href="./main2.php" class="text-muted">夏季套装</a>
            <a href="./main2.php" class="text-muted">小白鞋</a>
            <a href="./main2.php" class="text-muted">T恤</a>
            <a href="./main2.php" class="text-muted">牛仔短裤</a>
            <a href="./main2.php" class="text-muted">墨镜</a>
            <a href="./main2.php" class="text-muted">衬衫</a>
          </div>
          <div class="sou5 mt20">
            <a href="./main2.php" class="sou6"><b>团购</b></a>
            <a href="./main2.php" class="sou7 sou6"><b>快抢</b></a>
          </div>
        </div>
      </div>
      <!-- ==============END CENTER============= -->

      <!-- ================RIGHT================ -->
      <div class="erweima fr mt5">
      <img src="./imgs/erweima.png">
      </div>
    </div>
  </div>
  <!-- ================END LOGO================ -->
  <div class="cb"></div>

  <!-- ==============SHOW================ -->
  <div id="show">
    <!-- =============SHOW LIST============= -->
    <div class="show-list fl">
      <ul>
      <!-- =================1============= -->
        <li class="list bdb">
          <dl class="mt20">
            <dt class="fl zi1 "><a href="./main2.php" class="clb">上衣</a></dt>
            <dd class="fl zi2"><a href="./main2.php" class="clr">春上新</a></dd>
            <dd class="fl zi2"><a href="./main2.php" class="clb">时尚套装</a> </dd>
            <dd class="fl zi2"><a href="./main2.php" class="clb">T恤</a></dd>
          </dl>
          <div class="nav_more" style="top: -1px;">
            <dl class="nav_more_warp">
                <dt><a href="http://www.mogujie.com/book/clothing/51819?from=hpc_6" target="_blank" rel="nofollow">新品发布</a></dt>
                <dd>
                    <a href="http://www.mogujie.com/book/clothing/50249?from=hpc_6" target="_blank" class="hot" rel="nofollow">衬衫</a>
                    <a href="http://www.mogujie.com/book/clothing/50245?from=hpc_6" target="_blank" class="" rel="nofollow">雪纺衫</a>
                        <a href="http://www.mogujie.com/book/clothing/50270?from=hpc_6" target="_blank" class="" rel="nofollow">牛仔外套</a>
                        <a href="http://www.mogujie.com/book/clothing/50261?from=hpc_6" target="_blank" class="" rel="nofollow">风衣</a>
                        <a href="http://www.mogujie.com/book/clothing/50248?from=hpc_6" target="_blank" class="" rel="nofollow">背心吊带</a>
                        <a href="http://www.mogujie.com/book/clothing/50258?from=hpc_6" target="_blank" class="" rel="nofollow">针织衫</a>
                        <a href="http://www.mogujie.com/book/clothing/50259?from=hpc_6" target="_blank" class="" rel="nofollow">棒球外套</a>
                        <a href="http://www.mogujie.com/book/clothing/50273?from=hpc_6" target="_blank" class="" rel="nofollow">卫衣</a>
                        <a href="http://www.mogujie.com/book/clothing/10055545?from=hpc_6" target="_blank" class="" rel="nofollow">绑带衬衫</a>
                        <a href="http://www.mogujie.com/book/clothing/51148?from=hpc_6" target="_blank" class="" rel="nofollow">马甲</a>
                        <a href="http://www.mogujie.com/book/clothing/52171?from=hpc_6" target="_blank" class="" rel="nofollow">皮衣</a>
                        <a href="http://www.mogujie.com/book/clothing/50253?from=hpc_6" target="_blank" class="" rel="nofollow">薄毛衣</a>
                    </dd>
                </dl>
            <dl class="nav_more_warp">
                <dt><a href="http://www.mogujie.com/book/clothing/51831?from=hpc_6" target="_blank" rel="nofollow">当季热卖</a></dt>
                <dd>
                    <a href="http://www.mogujie.com/book/clothing/51287?from=hpc_6" target="_blank" class="" rel="nofollow">纯棉衬衫</a>
                    <a href="http://www.mogujie.com/book/clothing/10055543?from=hpc_6" target="_blank" class="hot" rel="nofollow">纯色T恤</a>
                    <a href="http://www.mogujie.com/book/clothing/10055546?from=hpc_6" target="_blank" class="" rel="nofollow">工装外套</a>
                    <a href="http://www.mogujie.com/book/clothing/50254?from=hpc_6" target="_blank" class="" rel="nofollow">开衫</a>
                    <a href="http://www.mogujie.com/book/clothing/50251?from=hpc_6" target="_blank" class="" rel="nofollow">短款外套</a>
                    <a href="http://www.mogujie.com/book/clothing/10055542?from=hpc_6" target="_blank" class="" rel="nofollow">印花卫衣</a>
                    <a href="http://www.mogujie.com/book/clothing/50275?from=hpc_6" target="_blank" class="" rel="nofollow">蕾丝衫</a>
                    <a href="http://www.mogujie.com/book/clothing/51288?from=hpc_6" target="_blank" class="" rel="nofollow">格纹衬衫</a>
                    <a href="http://www.mogujie.com/book/clothing/51146?from=hpc_6" target="_blank" class="" rel="nofollow">运动套装</a>
                    <a href="http://www.mogujie.com/book/clothing/51839?from=hpc_6" target="_blank" class="" rel="nofollow">西装外套</a>
                    <a href="http://www.mogujie.com/book/clothing/50265?from=hpc_6" target="_blank" class="" rel="nofollow">情侣装</a>
                </dd>
            </dl>
            <dl class="nav_more_warp">
                <dt><a href="http://www.mogujie.com/book/clothing/52172?from=hpc_6" target="_blank" rel="nofollow">流行元素</a></dt>
                <dd>
                    <a href="http://www.mogujie.com/book/clothing/52189?from=hpc_6" target="_blank" class="" rel="nofollow">太空棉</a>
                    <a href="http://www.mogujie.com/book/clothing/52188?from=hpc_6" target="_blank" class="" rel="nofollow">廓形</a>
                    <a href="http://www.mogujie.com/book/clothing/52174?from=hpc_6" target="_blank" class="" rel="nofollow">条纹</a>
                    <a href="http://www.mogujie.com/book/clothing/52175?from=hpc_6" target="_blank" class="" rel="nofollow">格子</a>
                    <a href="http://www.mogujie.com/book/clothing/52177?from=hpc_6" target="_blank" class="" rel="nofollow">印花</a>
                    <a href="http://www.mogujie.com/book/clothing/52176?from=hpc_6" target="_blank" class="hot" rel="nofollow">流苏</a>
                    <a href="http://www.mogujie.com/book/clothing/52178?from=hpc_6" target="_blank" class="" rel="nofollow">字母</a>
                    <a href="http://www.mogujie.com/book/clothing/52179?from=hpc_6" target="_blank" class="" rel="nofollow">蕾丝</a>
                    <a href="http://www.mogujie.com/book/clothing/52180?from=hpc_6" target="_blank" class="" rel="nofollow">波点</a>
                    <a href="http://www.mogujie.com/book/clothing/52181?from=hpc_6" target="_blank" class="" rel="nofollow">纯色</a>
                    <a href="http://www.mogujie.com/book/clothing/52184?from=hpc_6" target="_blank" class="" rel="nofollow">前短后长</a>
                    <a href="http://www.mogujie.com/book/clothing/10055575?from=hpc_6" target="_blank" class="" rel="nofollow">时尚挂脖</a>
                    <a href="http://www.mogujie.com/book/clothing/10055532?from=hpc_6" target="_blank" class="" rel="nofollow">性感V领</a>
                </dd>
            </dl>
            <div class="nav_more_warp nav_more_pic">
                <a href="http://www.mogujie.com/book/clothing/50245?from=hpc_6" rel="nofollow" target="_blank">
                    <img alt="上衣" src="http://s18.mogucdn.com/p1/160503/upload_ie4dezrqgu3gmyruhazdambqgiyde_250x130.jpg" data-src="http://s18.mogucdn.com/p1/160503/upload_ie4dezrqgu3gmyruhazdambqgiyde_250x130.jpg" class="">
                </a>
            </div>
        </div>
    </li>
      <!-- =================2================= -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">裙子</a></dt>
          <dd class="fl zi2"><a href="#" class="clb">初夏新品</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">连衣裙</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">蕾丝裙</a></dd>
        </dl>
      </li>  
      <!-- ===============3================== -->   
      <li class="list bdb">
        <dl  class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">裤子</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">夏上新</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">牛仔裤</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">阔腿裤</a></dd>
        </dl>
      </li>  
      <!-- ===============4================== -->   
      <li class="list bdb">
        <dl  class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">内衣</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">夏上新</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">睡衣套装</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">内裤</a></dd>
        </dl>
      </li> 
      <!-- ===============5================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">鞋子</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">人气新品</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">"星款"</a> </dd>
          <dd class="fl zi2"><a href="#" class="clr">小白鞋</a></dd>
        </dl>
      </li> 
      <!-- ===============6================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">男友</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">短裤</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">T恤</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">帆布鞋</a></dd>
        </dl>
      </li> 
      <!-- ===============7================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">包包</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">春上新</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">双肩</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">斜跨</a></dd>
        </dl>
      </li>
      <!-- ===============8================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">美妆</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">超值套装</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">面膜</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">BB霜</a></dd>
        </dl>
      </li>
      <!-- ===============9================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">配饰</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">墨镜</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">棒球帽</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">项链</a></dd>
        </dl>
      </li>
      <!-- ===============10================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">家居</a></dt>
          <dd class="fl zi2"><a href="#" class="clb">新品</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">四件套</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">小家具</a></dd>
        </dl>
      </li>
      <!-- ===============11================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">母婴</a></dt>
          <dd class="fl zi2"><a href="#" class="clr">夏季新品</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">童装</a> </dd>
          <dd class="fl zi2"><a href="#" class="clb">孕妇装</a></dd>
        </dl>
      </li>
      <!-- ===============12================== -->   
      <li class="list bdb">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">零食</a></dt>
          <dd class="fl zi2"><a href="#" class="clb">休闲食品</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clr">进口美食</a> </dd>
          <dd class="fl zi2"><a href="#" class="clr">内食</a></dd>
        </dl>
      </li>
      <!-- ===============13================== -->   
      <li class="list">
        <dl class="mt20">
          <dt class="fl zi1"><a href="#" class="clb">百货</a></dt>
          <dd class="fl zi2"><a href="#" class="clb">收纳盒</a></dd>
          <dd class="fl zi2 clr"><a href="#" class="clb">玻璃杯</a> </dd>
          <dd class="fl zi2"><a href="#" class="clr">晴雨伞</a></dd>
        </dl>
      </li>
      </ul>
    </div>
    <!-- =============END SHOW LIST=========== -->
    <!-- =============SHOW PHOTO MAX=========== -->
    
    <div class="max-photo fl">
      <a href="#"><img src="./imgs/max1.jpg"></a>
    </div>
    <!-- ==========END SHOW PHOTO MAX=========== -->
    <!-- =============SHOW PHOTO MIN=========== -->
    <div class="min-photo">
      <div class="min-photo1">
        <a href="#"><img src="./imgs/min1.jpg" class="min-photo3"></a>
      </div>
      <div class="min-photo2">
        <a href="#"><img src="./imgs/min2.jpg" class="min-photo3"></a>
      </div>
    </div>
    <!-- ==========END SHOW PHOTO MIN========== -->
  </div>
  <!--==============END SHOW==================  -->
  <div class="cb"></div>
  <!-- ================MAIN 1==================== -->
  <div class="main1">
    <div class="fl main1-1">
      <div>
        <a href="#"><img src="./imgs/main1-1a.png" class="fl main1-1a"></a>
      </div>
      <div>
        <a href="#"><img src="./imgs/main1-1b.jpg"  class="fr main1-1b"></a>
      </div>
    </div>
    <div class="fr main1-2">
      <div class="fl main1-2a">
        <a href="#"><img src="./imgs/man1-2a.png"></a>
      </div>
      <div class="fr main1-2b">
        <div class="main1-2b1">
          <a href="#"><img src="./imgs/main1-2b1.jpg"></a>
        </div>
        <div class="main1-2b2">
          <a href="#"><img src="./imgs/main1-2b2.jpg"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ==============END MAIN 1=============== -->
  <div class="cb"></div>
  <!-- ============MAIN 2================= -->
  <div class="wrap ntpl_2 mt60">
    <div class="h_title">/////////////////////////////////////////////// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>品牌馆</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/////////////////////////////////////////////</div>
  <div class="npt1_con">
  <div class="nptl_col1">
     <a rel="nofollow" target="_blank" class="ad_up" href="http://baicaowei.mogujie.com/index?from=search_shop&amp;ptp=1.BZ2pVqe1.0.32.kUskL&amp;shopwebtag=1&amp;mt=10.927.r76957">
      <img data-src="http://s16.mogucdn.com/p1/160429/upload_ie4gkn3gga2dknzthazdambqgiyde_183x213.jpg" class="fade-in" src="http://s16.mogucdn.com/p1/160429/upload_ie4gkn3gga2dknzthazdambqgiyde_183x213.jpg" alt="">
     </a>     
     <a rel="nofollow" target="_blank" href="http://hstylehdys.mogujie.com/index?shopwebtag=1&amp;mt=10.928.r70924" class="ad_btm_item"> 
      <img data-src="http://s18.mogucdn.com/p1/160317/upload_ifrdgzjtgqzdsyjvg4zdambqmeyde_111x60.png" class="fade-in" src="http://s18.mogucdn.com/p1/160317/upload_ifrdgzjtgqzdsyjvg4zdambqmeyde_111x60.png" alt=""> 
        <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/1qieo2/index?shopwebtag=1&amp;mt=10.928.r71354" class="ad_btm_item"> 
        <img data-src="http://s18.mogucdn.com/p1/160321/upload_ifqtmytbgu4gizjwg4zdambqgyyde_111x60.jpg" class="fade-in" src="http://s18.mogucdn.com/p1/160321/upload_ifqtmytbgu4gizjwg4zdambqgyyde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://sports.mogujie.com/index?ptp=1.CmymMoKw.0.34.J3FBJ&amp;shopwebtag=1&amp;mt=10.928.r43479" class="ad_btm_item"> 
        <img data-src="http://s11.mogucdn.com/p1/160314/upload_ie4dmmrqmm3doyrug4zdambqgiyde_111x60.jpg" class="fade-in" src="http://s11.mogucdn.com/p1/160314/upload_ie4dmmrqmm3doyrug4zdambqgiyde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://sports.mogujie.com/index?from=search_shop&amp;ptp=1.BZ2pVqe1.0.49.D5JIa&amp;shopwebtag=1&amp;mt=10.928.r43490" class="ad_btm_item"> 
        <img data-src="http://s17.mogucdn.com/p1/160314/upload_ie4tcmjtha3doyrug4zdambqgqyde_111x60.jpg" class="fade-in" src="http://s17.mogucdn.com/p1/160314/upload_ie4tcmjtha3doyrug4zdambqgqyde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://sports.mogujie.com/index?ptp=1.CmymMoKw.0.35.eEcrt&amp;shopwebtag=1&amp;mt=10.928.r29540" class="ad_btm_item"> 
        <img data-src="http://s6.mogucdn.com/p1/151123/upload_ifqwkmdbmeywiojqguzdambqgyyde_111x60.jpg" class="fade-in" src="http://s6.mogucdn.com/p1/151123/upload_ifqwkmdbmeywiojqguzdambqgyyde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/1q3s8o/index?ptp=1.CmymMoKw.0.30.gtMr5&amp;shopwebtag=1&amp;mt=10.928.r74854" class="ad_btm_item"> 
        <img data-src="http://s18.mogucdn.com/p1/160422/upload_ifqtaojzg5tdsnbrhazdambqgyyde_111x60.jpg" class="fade-in" src="http://s18.mogucdn.com/p1/160422/upload_ifqtaojzg5tdsnbrhazdambqgyyde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/1obqee?mt=10.928.r29542" class="ad_btm_item"> 
        <img data-src="http://s11.mogucdn.com/p1/151123/upload_ifrwkyrtmmywiojqguzdambqhayde_111x60.jpg" class="fade-in" src="http://s11.mogucdn.com/p1/151123/upload_ifrwkyrtmmywiojqguzdambqhayde_111x60.jpg" alt=""> 
          <span class="hover_cover"></span> 
      </a>    
      <a rel="nofollow" target="_blank" href="http://gangben.mogujie.com/?mt=10.928.r76266" class="ad_btm_item"> 
        <img data-src="http://s16.mogucdn.com/p1/160422/upload_ifqtizlcmy3tomzrhazdambqgyyde_111x60.jpg" class="fade-in fr" src="http://s16.mogucdn.com/p1/160422/upload_ifqtizlcmy3tomzrhazdambqgyyde_111x60.jpg" alt=""> 
        <span class="hover_cover"></span> 
      </a>   
    </div> 
    <div class="nptl_col2">   
      <div class="col_long_pic"> 
        <a href="http://baicaowei.mogujie.com/index?from=search_shop&amp;ptp=1.BZ2pVqe1.0.32.kUskL&amp;shopwebtag=1&amp;mt=10.929.r76955" target="_blank" rel="nofollow"> 
          <img class="fade-in" data-src="http://s18.mogucdn.com/p1/160429/upload_ie4dkmbrga2dknzthazdambqgiyde_305x500.jpg" src="http://s18.mogucdn.com/p1/160429/upload_ie4dkmbrga2dknzthazdambqgiyde_305x500.jpg" alt=""> 
        </a> 
      </div>   
      <div class="col_goods"> 
        <div class="goods_its">   
          <a href="http://www.mogujie.com/book/food/10056652?mt=10.930.r76825" class="goods_item " target="_blank" rel="nofollow"> 
            <img class="fade-in" data-src="http://s16.mogucdn.com/p1/160424/upload_ie4dknddge2tcmbshazdambqgiyde_300x300.jpg" src="http://s16.mogucdn.com/p1/160424/upload_ie4dknddge2tcmbshazdambqgiyde_300x300.jpg" alt=""> 
            <span class="goods_name"> 
              <span class="gd_name_ch">坚果</span> 
            </span>
          </a>    
          <a href="http://www.mogujie.com/book/food/10056676?mt=10.930.r76826" class="goods_item " target="_blank" rel="nofollow"> 
            <img class="fade-in" data-src="http://s16.mogucdn.com/p1/160424/upload_ie4dendfgi2tcmbshazdambqgiyde_300x300.jpg" src="http://s16.mogucdn.com/p1/160424/upload_ie4dendfgi2tcmbshazdambqgiyde_300x300.jpg" alt=""> 
              <span class="goods_name"> 
                <span class="gd_name_ch">肉食</span>
              </span> 
            </a>    
            <a href="http://www.mogujie.com/book/food/10056653?mt=10.930.r76827" class="goods_item " target="_blank" rel="nofollow"> 
              <img class="fade-in" data-src="http://s18.mogucdn.com/p1/160424/upload_ie4tmmbtge2tcmbshazdambqgqyde_300x300.jpg" src="http://s18.mogucdn.com/p1/160424/upload_ie4tmmbtge2tcmbshazdambqgqyde_300x300.jpg" alt=""> 
                <span class="goods_name"> 
                  <span class="gd_name_ch">饼干</span> 
                </span> 
              </a>    
              <a href="http://www.mogujie.com/book/food/10056677?mt=10.930.r76828" class="goods_item pos_btm" target="_blank" rel="nofollow"> 
                <img class="fade-in" data-src="http://s18.mogucdn.com/p1/160428/upload_ifrtiojrmnrwemzthazdambqhayde_300x300.jpg" src="http://s18.mogucdn.com/p1/160428/upload_ifrtiojrmnrwemzthazdambqhayde_300x300.jpg" alt=""> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">巧克力</span> 
                  </span> 
                </a>    
                <a href="http://www.mogujie.com/book/food/10056678?mt=10.930.r76829" class="goods_item pos_btm" target="_blank" rel="nofollow"> 
                <img class="fade-in" data-src="http://s18.mogucdn.com/p1/160428/upload_ifrtgm3bmfrwemzthazdambqhayde_300x300.jpg" src="http://s18.mogucdn.com/p1/160428/upload_ifrtgm3bmfrwemzthazdambqhayde_300x300.jpg" alt=""> 
                <span class="goods_name"> 
                  <span class="gd_name_ch">蜜饯</span> 
                </span>
              </a>    
              <a href="http://www.mogujie.com/book/food/10056679?mt=10.930.r76830" class="goods_item pos_btm" target="_blank" rel="nofollow"> 
                <img class="fade-in" data-src="http://s16.mogucdn.com/p1/160428/upload_ie4gemdbmnrwemzthazdambqgiyde_300x300.jpg" src="http://s16.mogucdn.com/p1/160428/upload_ie4gemdbmnrwemzthazdambqgiyde_300x300.jpg" alt=""> 
                <span class="goods_name"> 
                  <span class="gd_name_ch">糕点</span> 
                </span> 
              </a>   
            </div>
          </div> 
        </div> 
        <div class="cb"></div>

        <div class="wrap ntpl_2 mt60">
             <div class="h_title">/////////////////////////////////////////////// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>运动</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/////////////////////////////////////////////</div>
        <div class="nptl_con"> 
          <div class="nptl_col1">   
            <a href="http://www.mogujie.com/book/thin/10056372?mt=10.918.r29773" class="ad_up" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s7.mogucdn.com/p1/160419/6a_ie4tqmjqmzswmnjqhazdambqgqyde_183x213.png" class="fade-in" data-src="http://s7.mogucdn.com/p1/160419/6a_ie4tqmjqmzswmnjqhazdambqgqyde_183x213.png"> 
            </a>     
            <a class="ad_btm_item" href="http://shop.mogujie.com/1cpmwi/index?from=search_shop&amp;ptp=1.BZ2pVqe1.0.32.jgEuh&amp;shopwebtag=1&amp;mt=10.919.r29779" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s18.mogucdn.com/p1/160419/upload_ifqwcmbwgfrgknjqhazdambqgyyde_111x60.jpg" class="fade-in" data-src="http://s18.mogucdn.com/p1/160419/upload_ifqwcmbwgfrgknjqhazdambqgyyde_111x60.jpg"> 
              <span class="hover_cover"></span> 
            </a>    
            <a class="ad_btm_item" href="http://feispeed.mogujie.com/1ofc2i?from=search_shop&amp;ptp=1.BZ2pVqe1.0.40.RGywk&amp;mt=10.919.r29948" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s7.mogucdn.com/p1/160309/6a_ie3wemdfmzrggmbtg4zdambqgayde_111x60.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160309/6a_ie3wemdfmzrggmbtg4zdambqgayde_111x60.jpg"> 
              <span class="hover_cover"></span> 
            </a>    
            <a class="ad_btm_item" href="http://xiaotaoyongyi.mogujie.com/index?shopwebtag=1&amp;mt=10.919.r29790" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s10.mogucdn.com/p1/160429/6a_ifrwkyzrgmydenzthazdambqhayde_111x60.jpg" class="fade-in" data-src="http://s10.mogucdn.com/p1/160429/6a_ifrwkyzrgmydenzthazdambqhayde_111x60.jpg"> 
              <span class="hover_cover"></span> 
            </a>    
            <a class="ad_btm_item" href="http://sports.mogujie.com/index?mt=10.919.r29828" target="_blank" rel="nofollow"> <img alt="" src="http://s18.mogucdn.com/p1/160419/upload_ifqtsmjymjrgknjqhazdambqgyyde_111x60.jpg" class="fade-in" data-src="http://s18.mogucdn.com/p1/160419/upload_ifqtsmjymjrgknjqhazdambqgyyde_111x60.jpg">
             <span class="hover_cover"></span>
            </a>    
            <a class="ad_btm_item" href="http://shop.mogujie.com/1otkmk/index?from=search_shop&amp;ptp=1.BZ2pVqe1.0.32.AVw2i&amp;shopwebtag=1&amp;mt=10.919.r29803" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s17.mogucdn.com/p1/160419/upload_ifrdcztegbrgknjqhazdambqmeyde_111x60.jpg" class="fade-in" data-src="http://s17.mogucdn.com/p1/160419/upload_ifrdcztegbrgknjqhazdambqmeyde_111x60.jpg"> 
              <span class="hover_cover"></span>
            </a>    
            <a class="ad_btm_item" href="http://shop.mogujie.com/1oimjk/index?mt=10.919.r29836" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s6.mogucdn.com/p1/160419/6a_ifrwmnrrmqzwmnjqhazdambqhayde_111x60.png" class="fade-in" data-src="http://s6.mogucdn.com/p1/160419/6a_ifrwmnrrmqzwmnjqhazdambqhayde_111x60.png"> 
              <span class="hover_cover"></span> 
            </a>    
            <a class="ad_btm_item" href="http://shop.mogujie.com/1d1ux2/index?mt=10.919.r29784" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s7.mogucdn.com/p1/160429/6a_ie4wczrqgnrtanzthazdambqgqyde_111x60.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160429/6a_ie4wczrqgnrtanzthazdambqgqyde_111x60.jpg"> 
              <span class="hover_cover"></span> 
            </a>    
            <a class="ad_btm_item" href="http://shop.mogujie.com/1ctuvq/index?mt=10.919.r29821" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s10.mogucdn.com/p1/160419/6a_ifrdezrrg43gmnjqhazdambqmeyde_111x60.png" class="fade-in" data-src="http://s10.mogucdn.com/p1/160419/6a_ifrdezrrg43gmnjqhazdambqmeyde_111x60.png"> 
              <span class="hover_cover"></span> 
            </a>   
          </div> 
          <div class="nptl_col2">   
            <div class="col_long_pic"> 
              <a rel="nofollow" target="_blank" href="http://www.mogujie.com/book/thin/10056355?ptp=1.BtWxRgdy._mt-921-r31575.6.1p5YZv&amp;mt=10.920.r29919"> 
                <img alt="" src="http://s6.mogucdn.com/p1/160426/6a_ifrdem3bmq4genzshazdambqmeyde_305x500.png" data-src="http://s6.mogucdn.com/p1/160426/6a_ifrdem3bmq4genzshazdambqmeyde_305x500.png" class="fade-in"> 
              </a> 
            </div>   
            <div class="col_goods"> 
              <div class="goods_its">   
                <a rel="nofollow" target="_blank" class="goods_item " href="http://www.mogujie.com/book/thin/10056525?mt=10.921.r29874"> 
                  <img alt="" src="http://s10.mogucdn.com/p1/160426/6a_ie4deyrwga2daobshazdambqgiyde_175x170.jpg" data-src="http://s10.mogucdn.com/p1/160426/6a_ie4deyrwga2daobshazdambqgiyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">女运动鞋</span> 
                  </span> 
                </a>    
                <a rel="nofollow" target="_blank" class="goods_item " href="http://www.mogujie.com/book/shoes/51273?mt=10.921.r29875"> 
                  <img alt="" src="http://s8.mogucdn.com/p1/160426/6a_ifrdgobwmizwmnzshazdambqmeyde_175x170.jpg" data-src="http://s8.mogucdn.com/p1/160426/6a_ifrdgobwmizwmnzshazdambqmeyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">女休闲鞋</span> 
                  </span> 
                </a>    
                <a rel="nofollow" target="_blank" class="goods_item " href="http://www.mogujie.com/book/thin/10056524?mt=10.921.r29879"> 
                  <img alt="" src="http://s7.mogucdn.com/p1/160426/6a_ifqtsy3cgiygmnzshazdambqgyyde_175x170.jpg" data-src="http://s7.mogucdn.com/p1/160426/6a_ifqtsy3cgiygmnzshazdambqgyyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">男运动鞋</span> 
                  </span> 
                </a>    
                <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://www.mogujie.com/book/thin/10056429?mt=10.921.r29877"> 
                  <img alt="" src="http://s6.mogucdn.com/p1/160426/6a_ifrdimtbgazdaobshazdambqmeyde_175x170.jpg" data-src="http://s6.mogucdn.com/p1/160426/6a_ifrdimtbgazdaobshazdambqmeyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">泳衣</span>
                  </span> 
                </a>    
                <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://www.mogujie.com/book/thin/10056476?mt=10.921.r29880"> 
                  <img alt="" src="http://s7.mogucdn.com/p1/160426/6a_ifqtaobqhe2dcobshazdambqgyyde_175x170.jpg" data-src="http://s7.mogucdn.com/p1/160426/6a_ifqtaobqhe2dcobshazdambqgyyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">运动裤</span> 
                  </span>
                </a>   
                <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://www.mogujie.com/book/thin/10056543?mt=10.921.r31575"> 
                  <img alt="" src="http://s10.mogucdn.com/p1/160426/6a_ie4tqmjsgaytgobshazdambqgqyde_175x170.jpg" data-src="http://s10.mogucdn.com/p1/160426/6a_ie4tqmjsgaytgobshazdambqgqyde_175x170.jpg" class="fade-in"> 
                  <span class="goods_name"> 
                    <span class="gd_name_ch">健身器械</span> 
                  </span> 
                </a>   
              </div> 
            </div>
          </div> 
        </div> 
      </div>
      <div class="cb"></div>
      <!-- ==================main  3=============== -->
      <div class="wrap ntpl_1 mt60">
            <div class="h_title">/////////////////////////////////////////////// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>红人Bazaar</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/////////////////////////////////////////////</div>
      <div class="nptl_con"> 
        <div class="nptl_col1"> 
          <div class="covered_con">   
            <div class="covered_pic  first_child"> 
              <a href="http://shop.mogujie.com/15cgc?traceid=shopindex_2zi9jqq37bb4&amp;order=created&amp;ptp=1.6g4kcJR2._items.2.SgiSA&amp;mt=10.908.r64727#shopFeed" target="_blank" rel="nofollow"> 
                <img alt="" src="http://s8.mogucdn.com/p1/160217/80_ifrdmmbrmzrdknddgyzdambqmeyde_170x170.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160217/80_ifrdmmbrmzrdknddgyzdambqmeyde_170x170.jpg"> 
                <span class="covered"></span> 
              </a> 
            </div>    
            <div class="covered_pic "> 
              <a href="http://www.mogujie.com/hongren/category?tag=%E7%BE%8E%E5%A6%86&amp;ptp=1.BzoApp8t.0.79.N5QEG&amp;mt=10.908.r64728" target="_blank" rel="nofollow"> 
                <img alt="" src="http://s8.mogucdn.com/p1/160217/80_ie4tanbsmvrtknddgyzdambqgqyde_170x170.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160217/80_ie4tanbsmvrtknddgyzdambqgqyde_170x170.jpg"> 
                <span class="covered"></span> 
              </a> 
            </div>   
            </div> <!-- 顶部图片资源广告位 --> 
              <ul class="btm_txt_con clearfix">   
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E8%AE%BE%E8%AE%A1&amp;mt=10.909.r30307" target="_blank" rel="nofollow">设计频</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E6%A8%A1%E7%89%B9&amp;ptp=1.BzoApp8t.0.124.sBrhK&amp;mt=10.909.r36597" target="_blank" rel="nofollow">模特频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E7%94%B7%E6%9C%8B%E5%8F%8B&amp;mt=10.909.r30311" target="_blank" rel="nofollow">男友频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E5%B0%8F%E4%B8%AA%E5%AD%90&amp;ptp=1.BzoApp8t.0.94.cTQg4&amp;mt=10.909.r36593" target="_blank" rel="nofollow">萌妹频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E5%81%A5%E8%BA%AB&amp;ptp=1.BzoApp8t.0.94.sBrhK&amp;mt=10.909.r50893" target="_blank" rel="nofollow">瘦身频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E4%B8%AD%E6%80%A7&amp;ptp=1.BzoApp8t.GSEiYUOK.96.bCf5VI&amp;mt=10.909.r44435" target="_blank" rel="nofollow">中性频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E6%83%85%E8%B6%A3&amp;ptp=1.BzoApp8t.0.94.iAj5M&amp;mt=10.909.r30316" target="_blank" rel="nofollow">情趣频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E6%9E%81%E7%AE%80&amp;mt=10.909.r30317" target="_blank" rel="nofollow">极简频道</a>
                </li>    
                <li>
                  <a href="http://www.mogujie.com/hongren/category?tag=%E6%97%B6%E5%B0%9A%E5%8D%9A%E4%B8%BB&amp;ptp=1.BzoApp8t.0.104.D0RWA&amp;mt=10.909.r63285" target="_blank" rel="nofollow">博主频道</a>
                </li>   
              </ul> <!-- 底部文字超链接 --> 
            </div> <!-- 第一列 --> 
            <div class="nptl_col2"> 
              <div class="nptl_c2_row1"> 
                <div class="nptl2_mt_slider"> 
                  <div class="mt_slider_view_con"> 
                    <ul>  
                      <li> 
                        <a href="http://www.mogujie.com/u/168tjm/getpublishfeeds?mt=10.910.r66041" target="_blank" rel="nofollow"> 
                          <img alt="" src="http://s6.mogucdn.com/p1/160316/80_ifqtezjxgfsdmnbvg4zdambqgyyde_305x330.jpg" class="fade-in" data-src="http://s6.mogucdn.com/p1/160316/80_ifqtezjxgfsdmnbvg4zdambqgyyde_305x330.jpg"> 
                        </a> 
                       </li>    
                       <li> 
                        <a href="http://www.mogujie.com/u/1nnipo?mt=10.910.r66042" target="_blank" rel="nofollow"> 
                          <img alt="" src="http://s7.mogucdn.com/p1/160316/80_ie3wmmjrgjstmnbvg4zdambqgayde_305x330.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160316/80_ie3wmmjrgjstmnbvg4zdambqgayde_305x330.jpg"> 
                        </a> 
                        </li>    
                        <li> 
                          <a href="http://www.mogujie.com/u/12yutxg/getpublishfeeds?mt=10.910.r66043" target="_blank" rel="nofollow"> 
                            <img alt="" src="http://s7.mogucdn.com/p1/160316/80_ie4tcojrmjstmnbvg4zdambqgqyde_305x330.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160316/80_ie4tcojrmjstmnbvg4zdambqgqyde_305x330.jpg"> 
                          </a> 
                        </li>   
                      </ul> 
                    </div> 
                      <a class="mt_slider_ctrl prev" href="javascript:void(0);" rel="nofollow"><i></i>
                      </a> 
                      <a class="mt_slider_ctrl next" href="javascript:void(0);" rel="nofollow"><i></i>
                      </a> 
                    </div> 
                  </div> 
                  <div class="nptl_c2_row2"> 
                  <ul>   
                    <li class="first_child"> 
                      <a href="http://www.mogujie.com/book/bazaar/10055010?mt=10.911.r61318" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s7.mogucdn.com/p1/160125/80_ifqtamtbgm2tgzrugyzdambqgyyde_130x150.jpg" data-src="http://s7.mogucdn.com/p1/160125/80_ifqtamtbgm2tgzrugyzdambqgyyde_130x150.jpg" class="fade-in"> 
                          <span class="r_desc">
                           <span>早春感潮流外套</span>
                           <span class="t_btm">流行趋势早早入荷！</span> 
                          </span> 
                      </a> 
                    </li>    
                    <li class=""> 
                      <a href="http://www.mogujie.com/book/bazaar/10054853?mt=10.911.r53732" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s10.mogucdn.com/p1/160125/80_ifrdanrsgaztkzrugyzdambqmeyde_130x150.jpg" data-src="http://s10.mogucdn.com/p1/160125/80_ifrdanrsgaztkzrugyzdambqmeyde_130x150.jpg" class="fade-in"> 
                          <span class="r_desc"> 
                            <span>流行色热销款毛衣</span> 
                            <span class="t_btm">针织单品持续温暖</span> 
                          </span> 
                      </a> 
                    </li>    
                    <li class=""> 
                      <a href="http://www.mogujie.com/book/bazaar/10054851?mt=10.911.r61336" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s6.mogucdn.com/p1/160125/80_ie3tcmzqmi3dkzrugyzdambqgayde_130x150.jpg" data-src="http://s6.mogucdn.com/p1/160125/80_ie3tcmzqmi3dkzrugyzdambqgayde_130x150.jpg" class="fade-in"> 
                          <span class="r_desc"> 
                            <span>清新少女感裙装</span> 
                            <span class="t_btm">2016腿玩年秘诀~</span> 
                          </span> 
                      </a>
                    </li>   
                  </ul> 
                </div> 
              </div> 
            </div> 
          </div>
<!-- ==========================main  4===================== -->
      <div class="wrap ntpl_1 mt60">
        <div class="h_title">/////////////////////////////////////////////// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>心水好货</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/////////////////////////////////////////////</div>  <!-- 模块标题 --> 
        <div class="nptl_con"> 
          <div class="nptl_col1"> 
            <div class="covered_con">   
              <div class="covered_pic  first_child"> 
                <a href="http://happyday.mogujie.com/?mt=10.2140.r72960" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s7.mogucdn.com/p1/160405/fi_ie4tizbqmm3dezdcg4zdambqgqyde_170x170.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160405/fi_ie4tizbqmm3dezdcg4zdambqgqyde_170x170.jpg"> 
                  <span class="covered"></span> 
                </a> 
              </div>   
              <div class="covered_pic "> 
                <a href="http://guaijiaojie.mogujie.com/?mt=10.2140.r72961" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s8.mogucdn.com/p1/160405/fi_ie4wkndbgu3tezdcg4zdambqgqyde_170x170.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160405/fi_ie4wkndbgu3tezdcg4zdambqgqyde_170x170.jpg"> 
                  <span class="covered"></span> 
                </a> 
              </div>   
            </div> <!-- 顶部图片资源广告位 --> 
            <ul class="btm_txt_con clearfix">   
              <li>
                <a href="http://www.mogujie.com/book/commodity/51832?mt=10.2139.r66193" target="_blank" rel="nofollow">最爱文具</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/clothing/51819?mt=10.2139.r66194" target="_blank" rel="nofollow">新品服饰</a>
              </li>   
              <li>
                <a href="http://www.mogujie.com/book/home/51646?mt=10.2139.r66195" target="_blank" rel="nofollow">暖心家居</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/magic/51897?mt=10.2139.r66196" target="_blank" rel="nofollow">潮流彩妆</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/food/52030?mt=10.2139.r66197" target="_blank" rel="nofollow">安心食品</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/shoes/10054940?mt=10.2139.r66198" target="_blank" rel="nofollow">人气美鞋</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/bags/51955?mt=10.2139.r66199" target="_blank" rel="nofollow">流行包包</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/accessories/51944?mt=10.2139.r66200" target="_blank" rel="nofollow">精致饰品</a>
              </li>    
              <li>
                <a href="http://www.mogujie.com/book/neiyi/50006?mt=10.2139.r66201" target="_blank" rel="nofollow">性感内衣</a>
              </li>   
            </ul> <!-- 底部文字超链接 --> 
          </div> <!-- 第一列 --> 
          <div class="nptl_col2"> 
            <div class="nptl_c2_row1">
              <div class="nptl2_mt_slider"> 
                <div class="mt_slider_view_con"> 
                  <ul>   
                    <li> 
                      <a href="http://naimeifei.mogujie.com/?mt=10.2138.r72962" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s7.mogucdn.com/p1/160405/fi_ifqtsnrsmiztezdcg4zdambqgyyde_305x330.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160405/fi_ifqtsnrsmiztezdcg4zdambqgyyde_305x330.jpg"> 
                      </a> 
                    </li>    
                    <li> 
                      <a href="http://modcara.mogujie.com?mt=10.2138.r72964" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s8.mogucdn.com/p1/160405/fi_ifqtqyrxmmztizdcg4zdambqgyyde_305x330.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160405/fi_ifqtqyrxmmztizdcg4zdambqgyyde_305x330.jpg"> 
                      </a> 
                    </li>    
                    <li> 
                      <a href="http://annechen.mogujie.com?mt=10.2138.r72965" target="_blank" rel="nofollow"> 
                        <img alt="" src="http://s7.mogucdn.com/p1/160405/fi_ifrtsnzzg5qtazdcg4zdambqhayde_305x330.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160405/fi_ifrtsnzzg5qtazdcg4zdambqhayde_305x330.jpg"> 
                      </a> 
                    </li>   
                  </ul> 
                </div> 
              <a class="mt_slider_ctrl prev" href="javascript:void(0);" rel="nofollow"><i></i></a> 
              <a class="mt_slider_ctrl next" href="javascript:void(0);" rel="nofollow"><i></i></a> 
            </div> 
          </div> 
          <div class="nptl_c2_row2"> 
            <ul>  
              <li class="first_child"> 
                <a href="http://www.mogujie.com/book/clothing/50249?mt=10.2137.r72966" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s8.mogucdn.com/p1/160405/fi_ifrdsyzygeywmy3cg4zdambqmeyde_130x150.jpg" data-src="http://s8.mogucdn.com/p1/160405/fi_ifrdsyzygeywmy3cg4zdambqmeyde_130x150.jpg" class="fade-in"> 
                  <span class="r_desc"> 
                    <span>必备衬衫</span> 
                    <span class="t_btm">换季必备 四季穿三季</span> 
                  </span> 
                </a> 
              </li>    
              <li class=""> 
                <a href="http://www.mogujie.com/book/shoes/51249?mt=10.2137.r72967" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s8.mogucdn.com/p1/160405/fi_ifqtem3cmizgmy3cg4zdambqgyyde_130x150.jpg" data-src="http://s8.mogucdn.com/p1/160405/fi_ifqtem3cmizgmy3cg4zdambqgyyde_130x150.jpg" class="fade-in"> 
                  <span class="r_desc"> 
                    <span>无敌小白鞋</span> 
                    <span class="t_btm">hold住所有造型</span> 
                  </span> 
                </a> 
              </li>    
              <li class=""> 
                <a href="http://www.mogujie.com/book/neiyi/50030?mt=10.2137.r72968" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s7.mogucdn.com/p1/160405/fi_ifqtmylbmfrtazdcg4zdambqgyyde_130x150.jpg" data-src="http://s7.mogucdn.com/p1/160405/fi_ifqtmylbmfrtazdcg4zdambqgyyde_130x150.jpg" class="fade-in"> 
                  <span class="r_desc"> 
                    <span>唯美内衣套装</span> 
                    <span class="t_btm">秀出少女美好肉体</span> 
                  </span> 
                </a> 
              </li>   
            </ul> 
          </div> 
        </div> 
      </div> 
    </div>



       <div class="wrap ntpl_1 mt60">
        <div class="h_title">/////////////////////////////////////////////// &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>蘑菇良品</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/////////////////////////////////////////////</div> <!-- 模块标题 --> 
        <div class="nptl_con">
          <div class="nptl_col1">
            <a href="http://shop.mogujie.com/detail/18ps3h0?ptp=1.CmymMoKw._items.49.T8ZL0&amp;mt=10.912.r72819" class="ad_up" target="_blank" rel="nofollow"> 
              <img alt="" src="http://s10.mogucdn.com/p1/160418/gx_ifrwmndggi4tambqhazdambqhayde_185x217.jpg" class="fade-in" data-src="http://s10.mogucdn.com/p1/160418/gx_ifrwmndggi4tambqhazdambqhayde_185x217.jpg"> 
              </a>     
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31361" target="_blank" rel="nofollow"> <img alt="" src="http://s7.mogucdn.com/p1/160316/62_ie4tezleg5tdgnrvg4zdambqgqyde_111x60.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160316/62_ie4tezleg5tdgnrvg4zdambqgqyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
              </a>    
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31362" target="_blank" rel="nofollow"> <img alt="" src="http://s7.mogucdn.com/p1/160316/62_ifqwgmjtmeytinrvg4zdambqgyyde_111x60.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160316/62_ifqwgmjtmeytinrvg4zdambqgyyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
              </a>    
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31363" target="_blank" rel="nofollow"> <img alt="" src="http://s8.mogucdn.com/p1/160316/62_ie4wemrxgmydinrvg4zdambqgqyde_111x60.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160316/62_ie4wemrxgmydinrvg4zdambqgqyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
              </a>    
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31364" target="_blank" rel="nofollow">
                <img alt="" src="http://s7.mogucdn.com/p1/160316/62_ie4wgylfgazdinrvg4zdambqgqyde_111x60.jpg" class="fade-in" data-src="http://s7.mogucdn.com/p1/160316/62_ie4wgylfgazdinrvg4zdambqgqyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
              </a>    
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31365" target="_blank" rel="nofollow">
                <img alt="" src="http://s8.mogucdn.com/p1/160316/62_ie4ggyjvmqydinrvg4zdambqgiyde_111x60.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160316/62_ie4ggyjvmqydinrvg4zdambqgiyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
              </a>    
              <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31366" target="_blank" rel="nofollow">
                <img alt="" src="http://s8.mogucdn.com/p1/160316/62_ie4dsobshazdinrvg4zdambqgiyde_111x60.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160316/62_ie4dsobshazdinrvg4zdambqgiyde_111x60.jpg"> 
                <span class="hover_cover"></span> 
                </a>    
                <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31367" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s10.mogucdn.com/p1/160316/62_ie3wcnbygmytinrvg4zdambqgayde_111x60.jpg" class="fade-in" data-src="http://s10.mogucdn.com/p1/160316/62_ie3wcnbygmytinrvg4zdambqgayde_111x60.jpg"> 
                  <span class="hover_cover"></span> 
                </a>    
                <a class="ad_btm_item" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;ptp=1.CmymMoKw._items.2.sWqWB&amp;shopwebtag=1&amp;mt=10.913.r31368" target="_blank" rel="nofollow"> 
                  <img alt="" src="http://s8.mogucdn.com/p1/160316/62_ie4ggnjqmuzdinrvg4zdambqgiyde_111x60.jpg" class="fade-in" data-src="http://s8.mogucdn.com/p1/160316/62_ie4ggnjqmuzdinrvg4zdambqgiyde_111x60.jpg"> 
                  <span class="hover_cover"></span> 
                </a>   
              </div> 
              <div class="nptl_col2">   
              <div class="col_long_pic"> 
                <a rel="nofollow" target="_blank" href="http://shop.mogujie.com/1qfnyw/index/total?categoryId=&amp;order=created&amp;shopwebtag=1&amp;ptp=1.BtWxRgdy._mt-913-r31364.5.Dbxr6&amp;mt=10.914.r76351"> 
                  <img alt="" src="http://s7.mogucdn.com/p1/160422/gx_ifrteodehazwcnjrhazdambqhayde_305x500.jpg" data-src="http://s7.mogucdn.com/p1/160422/gx_ifrteodehazwcnjrhazdambqhayde_305x500.jpg" class="fade-in"> 
                </a> 
              </div>   
              <div class="col_goods"> 
                <div class="goods_its">   
                  <a rel="nofollow" target="_blank" class="goods_item " href="http://shop.mogujie.com/detail/18pbizm?ptp=1.CmymMoKw._items.22.3keym&amp;mt=10.915.r72824"> 
                    <img alt="" src="http://s6.mogucdn.com/p1/160410/gx_ie4geytfmyytsnteg4zdambqgiyde_300x300.jpg" data-src="http://s6.mogucdn.com/p1/160410/gx_ie4geytfmyytsnteg4zdambqgiyde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name">
                      <span class="gd_name_ch">优雅半身裙</span> 
                    </span> 
                  </a>    
                  <a rel="nofollow" target="_blank" class="goods_item " href="http://shop.mogujie.com/detail/18przss?ptp=1.BSjqt66R.0.30.y6nO5&amp;mt=10.915.r72834"> 
                    <img alt="" src="http://s7.mogucdn.com/p1/160414/gx_ifqwimbsmfsdeylfg4zdambqgyyde_300x300.jpg" data-src="http://s7.mogucdn.com/p1/160414/gx_ifqwimbsmfsdeylfg4zdambqgyyde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name"> 
                      <span class="gd_name_ch">就是这么显瘦</span> 
                    </span> 
                  </a>    
                  <a rel="nofollow" target="_blank" class="goods_item " href="http://shop.mogujie.com/detail/18p0di6?ptp=1.CmymMoKw._items.70.3keym&amp;mt=10.915.r72837"> 
                    <img alt="" src="http://s6.mogucdn.com/p1/160410/gx_ifrwczjqmjqtsnteg4zdimbqhayde_300x300.jpg" data-src="http://s6.mogucdn.com/p1/160410/gx_ifrwczjqmjqtsnteg4zdimbqhayde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name"> 
                      <span class="gd_name_ch">超显高短裤</span> 
                    </span> 
                  </a>    
                  <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://shop.mogujie.com/detail/18p8it2?ptp=1.CmymMoKw._items.40.3keym&amp;mt=10.915.r72857"> 
                    <img alt="" src="http://s8.mogucdn.com/p1/160410/gx_ie4den3fmnsdsnteg4zdambqgiyde_300x300.jpg" data-src="http://s8.mogucdn.com/p1/160410/gx_ie4den3fmnsdsnteg4zdambqgiyde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name"> 
                      <span class="gd_name_ch">减龄必备</span> 
                    </span> 
                  </a>    
                  <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://shop.mogujie.com/detail/18p8rfs?ptp=1.BSjqt66R.0.32.npXup&amp;mt=10.915.r72859"> 
                    <img alt="" src="http://s8.mogucdn.com/p1/160414/gx_ifrgmmjtmrqwkolfg4zdambqmeyde_300x300.jpg" data-src="http://s8.mogucdn.com/p1/160414/gx_ifrgmmjtmrqwkolfg4zdambqmeyde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name"> 
                      <span class="gd_name_ch">粉嫩马卡龙</span> 
                    </span> 
                  </a>    
                  <a rel="nofollow" target="_blank" class="goods_item pos_btm" href="http://shop.mogujie.com/detail/18omlbu?ptp=1.CmymMoKw._items.94.3keym&amp;mt=10.915.r31357"> 
                    <img alt="" src="http://s8.mogucdn.com/p1/160410/gx_ie4ginzvmu4dsnteg4zdambqgiyde_300x300.jpg" data-src="http://s8.mogucdn.com/p1/160410/gx_ie4ginzvmu4dsnteg4zdambqgiyde_300x300.jpg" class="fade-in"> 
                    <span class="goods_name"> 
                      <span class="gd_name_ch">学院风连衣裙</span> 
                    </span>
                  </a>   
                </div> 
              </div> 
            </div>
          </div> 
        </div>
      </div>
    </div>
<!-- =================引入尾部============= -->
  <?php require PATH.'com/footer.php'; ?>


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>