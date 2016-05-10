<?php require './init.php' ?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街详情页</title>

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

    <!-- ================ NAV ============== -->
    <?php  require PATH.'com/nav.php'; ?>

    <!-- =================店头===================== -->
  <div class="shop-header">
    <div class="header clearfix">
      <div class="user-info fl">
        <a title="小蓝外贸女装" class="avatar" href="http://shop.mogujie.com/14jka">
          <img src="./imgs/11hswx_iezdmyldgrrwin3egazdambqmmyde_320x320.jpg_100x100.jpg" class="face fl">
        </a>
        <div class="shop-name fl">
          <div class="name-wrap clearfix">
            <a title="小蓝外贸女装" class="name fl" href="http://shop.mogujie.com/14jka">小蓝外贸女装</a>
            <p class="mark1">
              <img src="./imgs/upload_ie4tcnlfha3dqmrrg4zdambqgqyde_83x16.png">
            </p>
          </div>
          <!-- 评分信息 -->
          <div class="shop-score J-show-shop-score">
            <p>
              <span class="s-cat">描述<b>4.70</b></span>
              <span class="s-cat">价格<b>4.68</b></span>
              <span class="s-cat">质量<b>4.68</b></span>
              <span class="s-cat">服务<b>4.70</b></span>
            </p>
              <!-- 下拉列表 -->
            <div class="shop-info clearfix"></div>
          </div>
        </div>
        <div class="shop-action fl">
          <a data-shopid="14jka" href="javascript:;" rel="nofollow" class="J-shop-follow shop-follow fl ">+ 收 藏</a>
          <a class="chart fl clearfix" href="javascript:;">
            <div data-from="shop-header" data-style="widget4" data-bid="14jka#23" class="mogutalk_widget_btn kefu fl">
              <img src="./imgs/wangwang.png" class="wangwang">
            </div>
          </a>
        </div>
        <div class="icon-show-score J-show-shop-score"></div>
        <div class="line-right fr"></div>
      </div>
      <div class="shop-search">
        <div class="top_nav_search" id="nav_search_form">
          <form id="top_nav_form" method="get" action="http://www.mogujie.comhttp://www.mogujie.com/search/" target="_blank">
            <div class="text-wrap clearfix">
              <input type="text" placeholder="输入你想要的商品..." name="q" autocomplete="off" class="text ts_txt" id="J_SearchKey">
              <a class="search-inshop" id="J_SearchInShop" data-baseurl="http://shop.mogujie.com/14jka" href="javascript:;">搜本店</a>
              <input type="submit" value="搜全站" class="submit-btn">
            </div>
            <input type="hidden" id="select_type" value="bao" name="t">
          </form>
          <div class="top_search_hint"></div>
        </div>
      </div>
      <div id="seach_type" class="shop-search-list seatch_type_msearch ts_type fl">
        <div class="search-list-box fl">
          <p class="no-tip tip_none">暂无相关热门关键词</p>
          <ul class="search-tip search_tip"></ul>
        </div>
      </div>
    </div>
  </div>
  <div class="cb"></div>
<!-- =============================店内导航==================================== -->
  <div class="ovbox mod_topNav blackStyle ">
        <div class="biaoti">
          <h1 class="dabiao"><b>小兰女装</b></h1>
          <h3 class="xiaobiao">fashion shop</h3>
        </div>
        
    <div class="mod_list clearfix">
      <div data-title="$commonTopNav.layoutName" data-type="topNav" data-width="1200" data-id="237592" class="mod_item w1200">
        <div class="mod_cont topNav">
          <ol class="clearfix">
            <li><a href="http://shop.mogujie.com/14jka">首页</a></li>
            <li class="all"><a href="http://shop.mogujie.com/14jka/index/total">全部商品</a></li>
            <li><a href="http://shop.mogujie.com/14jka/list/index?categoryId=66487">裤子/打底裤</a></li>
            <li><a href="http://shop.mogujie.com/14jka/list/index?categoryId=66496">连衣裙/半身裙</a></li>
            <li><a href="http://shop.mogujie.com/14jka/list/index?categoryId=66483">针织衫/毛衣</a></li>
            <li><a href="http://shop.mogujie.com/14jka/list/index?categoryId=257731">毛呢外套</a></li>
            <li><a href="http://shop.mogujie.com/14jka/list/index?categoryId=257730">棉衣</a></li>
            <li><a href="http://shop.mogujie.com/14jka/page/view?id=16219">【好评返现】</a></li>
            <li><a href="http://shop.mogujie.com/14jka/tuan">蘑菇团</a></li>
          </ol>
          <!-- <div style="display: none;" class="category_list slideer">
            <dl>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=257731">毛呢外套</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66493">T恤/背心</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66"></a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66492">雪纺衫/蕾丝衫</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66491">衬衫/打底衫</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66496">连衣裙/半身裙</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66485">卫衣/绒衫</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=78371">风衣/外套</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66487">裤子/打底裤</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=66495">其他配饰</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=257730">棉衣</a>
              </dd>
              <dd>
                <a href="http://shop.mogujie.com/14jka/list/index?categoryId=287297">棉衣/棉服/羽绒服</a>
              </dd>
            </dl> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  <!-- <div class="cb"></div> -->
  </div>
  <!-- ======================主体========================================================================= -->
  <div id="body_wrap" >
    <div class="shop-detail">
    <!-- ======================详细信息========================================================================= -->
      <div class="detail-primary clearfix">
        <div class="primary-goods">
          <div class="clearfix">
            <div id="J_GoodsInfo" class="fl goods-info goods-info-normal">
              <div class="info-box">
              <div class="fr">
                <h1 class="goods-title"><span itemprop="name">清新袖口木耳边车线撞色短袖衬衫</span></h1>
                <div class="goods-prowrap goods-main">
                  <div class="clearfix main-box">
                  <dl class="clearfix property-box">
                    <dt class="property-type property-type-origin">原价：</dt>
                    <dd class="property-cont property-cont-origin">
                      <span class="price" id="J_OriginPrice">¥68.57</span>
                    </dd>
                  </dl>
                  <dl class="clearfix property-box">
                    <dt class="property-type property-type-now"> 现价 ：</dt>
                    <dd class="property-cont property-cont-now fl">
                      <span class="price" id="J_NowPrice">¥48.00</span>
                    </dd>
                    <dd class="property-extra fr">
                      <span class="mr10">评价：
                        <span class="num">10</span>
                      </span>
                      <span>累计销量：
                        <span class="num J_SaleNum">158</span>
                      </span>
                    </dd>
                  </dl>
                  <div id="J_ModulePromotions">
                    <dl class="clearfix promotions-box">
                      <dt>店铺优惠：</dt> 
                      <dd class="clearfix">
                        <div class="module-promotions clearfix"> <!-- 店铺优惠列表 -->   
                          <div class="promotion-box">
                            <span class="info shopPromotion-info">全店满4件减15元</span> 
                            <span class="more"></span> 
                            <div style="display: none;" class="favorable-list"> 
                              <ul>  
                                <div class="favorable-item fl"> 
                                  <span class="dot fl">▪</span> 
                                  <span class="fl">全店满4件减15元</span>  
                                </div>  
                                <div class="favorable-item fl"> 
                                  <span class="dot fl">▪</span> 
                                  <span class="fl">全店满3件减9元</span>  
                                </div>  
                                <div class="favorable-item fl"> 
                                  <span class="dot fl">▪</span> 
                                  <span class="fl">全店满2件减5元</span>  
                                </div>  
                              </ul> 
                              <b></b> 
                            </div>
                          </div>   <!-- 满包邮 -->   
                        </div> 
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="goods-prowrap goods-im">
                <dl class="clearfix">
                  <dt>客服：</dt>
                  <dd>
                    <div data-from="goodsdetail_skumtalk" data-style=
                    "default" data-bid="14jka#23" class="mogutalk_widget_btn kefu">
                      <!-- <iframe width="85" height="24" frameborder="0" allowtransparency="true" marginheight="0" scrolling="no" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/enterbutton.html"></iframe> -->
                    </div>
                  </dd>
                </dl>
              </div>
              <div id="J_GoodsSku" class="goods-prowrap goods-sku">
                <div class="content">
                  <div class="pannel-title">
                    <b class="J_PannelClose pannel-close"></b>
                  </div>
                  <div class="box">
                    <dl style="display: block;" class="style clearfix">
                      <dt>款式：</dt>
                      <dd>
                        <ol class="J_StyleList style-list clearfix">
                          <li title="白色" data-src="http://s22.mogucdn.com/p1/160425/62976417_ifqtgnjumvstcnbshazdambqgyyde_640x960.jpg" data-id="1" class="img">
                            <img src="http://s22.mogucdn.com/p1/160425/62976417_ifqtgnjumvstcnbshazdambqgyyde_640x960.jpg_100x100.jpg"><b></b>
                          </li>
                          <li title="黑格子" data-src="http://s22.mogucdn.com/p1/160425/62976417_ie4dcnbumu3danbshazdambqgiyde_640x960.jpg" data-id="2" class="img">
                            <img src="http://s22.mogucdn.com/p1/160425/62976417_ie4dcnbumu3danbshazdambqgiyde_640x960.jpg_100x100.jpg"><b></b>
                          </li>
                        </ol>
                      </dd>
                    </dl>
                      <dl style="display: block;" class="size clearfix">
                        <dt>尺码：</dt>
                        <dd>
                          <ol class="J_SizeList size-list clearfix">
                            <li title="S" data-id="100" class="">S</li>
                            <li title="M" data-id="101" class="">M</li>
                            <li title="L" data-id="102" class="">L</li>
                          </ol>
                        </dd>
                      </dl>
                      <dl class="clearfix">
                        <dt>数量：</dt>
                        <dd class="num clearfix">
                          <div data-stock="3439" class="goods-num fl" id="J_GoodsNum">
                            <span class="num-reduce num-disable"></span>
                            <input type="text" value="1" class="num-input">
                            <span class="num-add "></span>
                          </div>
                          <div class="J_GoodsStock goods-stock fl">库存3439件</div>
             <!--  <div class="J_GoodsStockTip goods-stock-tip fl">您所填写的商品数量超过库存！</div> -->
                        </dd>
                    </dl>
                  </div>
                  <div class="goods-buy clearfix">
                    <a class="fl mr10 buy-btn buy-now" id="J_BuyNow" href="javascript:;">立刻购买</a>
                      <input type="hidden" id="dapeiShow" value="nodapei">
                        <a class="fl mr10 buy-cart buy-btn" id="J_BuyCart" href="javascript:;">加入购物车</a>
                  </div>
                </div>
                <div class="goods-social clearfix">
                  <div tid="0" tradeitemid="18xuivs" goodsid="0" class=" fav  item"><b></b>
                    <span class="fav-num">1807</span>
                  </div>
                  <div class="share item"><b></b>分享
                  <div class="share-w clearfix">
                    <a rel="nofollow" title="关注QQ空间" class="forqzone" href="http://sns.qzone.qq.com/" target="_blank"></a>
                    <a rel="nofollow" title="关注人人" class="forrenren" href="http://widget.renren.com/" target="_blank"></a>
                    <a rel="nofollow" title="关注sina" class="forsina" href="http://service.weibo.com/" target="_blank"></a>
                    <a rel="nofollow" title="关注微信" class="forweixin" href="http://www.mogujie.com/" target="_blank"></a>
                  </div>
                </div>
                <div class="report">
                  <a rel="nofollow" class="goods_report fl" href="http://www.mogujie.com/trade/report/add?itemid=18xuivs" target="_blank">举报</a>
                </div>
              </div>
              <div class="goods-extra clearfix">
                <div class="extra-services">
                  <div class="fl clearfix label">商品特色：</div>
                  <ul class="fl clearfix list">
                    <li class="item">
                      <span title="品质认证" class="link">
                        <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/upload_ie4dcyjqgyytcm3bg4zdambqgiyde_30x31.png">品质认证
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="extra-services">
                  <div class="fl clearfix label">服务承诺：</div>
                    <ul class="fl clearfix list">
                      <li class="item">
                        <a rel="nofollow" title="" target="_blank" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=927" class="link">
                          <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/upload_ieztcoldmvsdmztdgmzdambqgyyde_24x24.png">退货补运费
                        </a>
                      </li>
                      <li class="item">
                        <a rel="nofollow" title="" target="_blank" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=892" class="link">
                          <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/upload_ieywiobrmfsdmztdgmzdambqmeyde_24x24.png">7天无理由退货
                        </a>
                      </li>
                      <li class="item">
                        <a rel="nofollow" title="" target="_blank" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=921" class="link">
                          <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/idid_ifrwcmrtha3geyzzg4zdambqhayde_24x24.png">劣一赔三服务
                        </a>
                      </li>
                      <li class="item">
                        <a rel="nofollow" title="" target="_blank" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=893" class="link">
                          <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/upload_iezgeolcmnsdmztdgmzdambqmmyde_24x24.png">72小时发货
                        </a>
                      </li>
                      <li class="item">
                        <a rel="nofollow" title="" target="_blank" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=895" class="link">
                          <img width="24" height="24" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/upload_ie2dim3dmrsdmztdgmzdambqgiyde_24x24.png">全国包邮
                        </a>
                      </li>
                    </ul>
                  </div>
<!--              <div class="extra-pay">
                    <div class="fl clearfix label">支付方式：</div>
                    <div class="fl list list-nomaibei"></div>
                  </div> -->
                </div>
              </div>
              </div>
            <div id="J_GoodsImg" class="fl goods-topimg">
              <div class="big-img">
                <img width="400" src="./imgs/62976417_ifqwizbumrstcnbshazdambqgyyde_640x960.jpg_468x468.jpg" id="J_BigImg">
              </div>
              <div class="small-img" id="J_SmallImgs">
                <div class="box">
                    <div class="list">
                      <ul style="text-align: center;" class="clearfix">
                        <li class=""><img src="http://s16.mogucdn.com/p1/160425/62976417_ifqwizbumrstcnbshazdambqgyyde_640x960.jpg_100x100.jpg"><i></i></li>
                        <li class=""><img src="http://s22.mogucdn.com/p1/160425/62976417_ifqtgnjumvstcnbshazdambqgyyde_640x960.jpg_100x100.jpg"><i></i></li>
                        <li class="c"><img src="http://s22.mogucdn.com/p1/160425/62976417_ie4dcnbumu3danbshazdambqgiyde_640x960.jpg_100x100.jpg"><i></i></li>
                      </ul>
                    </div>
                  </div>
                    <a href="javascript:;" class="left-btn arrow-btn"></a>
                    <a href="javascript:;" class="right-btn arrow-btn"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cb"></div>
<!--             <div class="primary-slide">
              <div data-ptp="_rechot" id="J_ModuleLook" class="goods-recommend">
                <p class="title"><s></s><span>热卖推荐</span></p>
              <div class="list">
                <div class="box">
                  <ul>
                    <li>
                      <a target="_blank" href="http://shop.mogujie.com/detail/18nyv04?source=item_detail_hotright?traceid=detail&amp;yixiu=pc_store_right_18nyv04">
                        <img width="120" src="./imgs/11hswx_ie3tsolfga3ggmzxg4zdambqgayde_640x960.png_220x330.jpg">
                      </a>
                      <span>￥59.20</span>
                    </li>
                    <li>
                      <a target="_blank" href="http://shop.mogujie.com/detail/18lrhru?source=item_detail_hotright?traceid=detail&amp;yixiu=pc_store_right_18lrhru">
                        <img width="120" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/11hswx_ifrdcm3egi3wcolegyzdambqmeyde_640x960.jpg_220x330.jpg">
                      </a>
                      <span>￥59.00</span>
                    </li>
                    <li>
                      <a target="_blank" href="http://shop.mogujie.com/detail/18ptdma?source=item_detail_hotright?traceid=detail&amp;yixiu=pc_store_right_18ptdma">
                        <img width="120" src="./【清新袖口木耳边车线撞色短袖衬衫】-衣服-服饰鞋包_女装_上装_衬衫-小蓝外贸女装-蘑菇街优店_files/62976417_ie4wenrzgy2wgntfg4zdambqgqyde_640x960.jpg_220x330.jpg">
                      </a>
                      <span>￥39.77</span> -->
<!--                     </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>
<!-- ===================================评论================================ -->



    </div>
  </div>











    <!-- ====================END=========================== -->
    <?php require PATH.'com/footer.php'; ?>



     <!-- 此处引入jQuery -->
     <script src="./public/js/jquery.min.js"></script>
     <!-- bootstrap.min.js必须放在JQ后面 -->
     <script src="./public/js/bootstrap.min.js"></script>
   </body>
 </html>