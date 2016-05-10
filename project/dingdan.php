<?php require './init.php' ?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街订单页</title>

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
  <?php require PATH.'com/nav.php'; ?>
  <!-- ================LOGO=================== -->
  <?php require PATH.'com/search.php'; ?>

  <!-- ==================主体==================== -->
    <div id="body_wrap">
      <div class="mu_wrap wrap clearfix">
        <div id="navListWrap">
          <div class="mu_nav_wrap"> <!-- 导航 --> <!--info--> 
            <div class="mu_nav_info"> 
              <div class="mu_nav_info_avatar"> 
                <div class="mu_nav_info_avatar_mk"></div>
                <img width="100" height="100" title="HWT" alt="HWT" src="%E8%AE%A2%E5%8D%95%E5%88%97%E8%A1%A8_%E8%98%91%E8%8F%87%E8%A1%97_files/04.jpg"> 
              </div> 
              <p class="mu_nav_info_uname">HWT</p>
            </div> <!-- info end --> <!-- nav --> 
            <div class="mu_nav mu_expand"> 
              <div class="mu_title">我的订单</div> 
                <ul class="mu_nav_item"> 
                  <li class="c"> 
                    <a href="http://order.mogujie.com/order/list4buyer?status=all&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8">全部订单</a>
                  </li> 
                  <li> 
                    <a href="http://order.mogujie.com/order/list4buyer?status=created&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8"> 待付款 <i class="mu_nav_count" id="unpaidOrder">1</i> </a> 
                  </li> 
                  <li> 
                    <a href="http://order.mogujie.com/order/list4buyer?status=unshipped_and_unreceived&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8"> 待收货 <i class="mu_nav_count" id="unReceivedOrder"><i class="mu_nav_count_arw"></i></i> </a> 
                  </li>
                  <li> 
                    <a href="http://order.mogujie.com/order/list4buyer?status=received_and_completed&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8"> 待评价 <i class="mu_nav_count" id="waitingRateOrder"><i class="mu_nav_count_arw"></i></i> </a> 
                  </li> 
                  <li> 
                    <a href="http://order.mogujie.com/order/list4buyer?status=refund_orders&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8"> 退货退款 <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> 
                  </li> <!-- 新增，stage=8 回收站订单 --> 
                  <li> 
                    <a href="http://order.mogujie.com/order/list4buyer?orderVisibleStatusCode=DELETED&amp;_uk=cvts08rb78ogdmvsrw44kg6pvsdcgjtbls4sscw8"> 订单回收站 <i class="mu_nav_count" id="recyleOrder"><i class="mu_nav_count_arw"></i></i> </a> 
                  </li> 
                </ul> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">
                  <a href="https://f.mogujie.com/wallet/home">我的钱包</a>
                </div> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">
                  <a href="http://www.mogujie.com/pay/fund/index">我的理财</a>
                </div> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">优惠特权</div> 
                <ul class="mu_nav_item"> 
                  <li><a target="_blank" href="http://www.mogujie.com/member">钻石会员</a></li> 
                  <li><a href="http://www.mogujie.com/trade/credit/modouv2/index">我的蘑豆</a></li> 
                  <li><a href="http://www.mogujie.com/trade/promotion/user/redpacket">红包</a></li> 
                  <li> <a href="http://www.mogujie.com/trade/promotion/user/cashcoupon"> 现金券 <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
                  <li> <a href="http://www.mogujie.com/trade/promotion/user/shopcoupon"> 店铺优惠券 <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> 
                  </li> 
                </ul> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">
                  <a href="http://www.mogujie.com/trade/address">地址管理</a>
                </div> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">
                  <a href="http://www.mogujie.com/trade/safety">安全设置</a>
                </div> 
              </div> 
              <div class="mu_nav"> 
                <div class="mu_title">维权管理</div> 
                  <ul class="mu_nav_item"> 
                    <li><a href="http://www.mogujie.com/trade/complaint/list">投诉管理</a></li> 
                    <li><a href="http://www.mogujie.com/trade/report/list4buyer">举报管理</a></li> 
                    <li><a href="http://www.mogujie.com/support/rights/proof/list">被盗举证</a></li> 
                  </ul> 
                </div> 
                <div class="mu_nav pb40"> 
                  <div class="mu_title">帐号设置</div> 
                    <ul class="mu_nav_item"> 
                      <li><a href="http://www.mogujie.com/settings/personal">基本信息</a></li> 
                      <li><a href="http://www.mogujie.com/settings/avatar">修改头像</a></li>
                    </ul> <!-- nav end -->
                  </div>
                </div>
                <div class="mu_content_wrap">
                  <div class="order-title">
                    <ul class="order-title-column clearfix">
                      <li class="goods">商品</li>
                      <li class="price">单价(元)</li>
                      <li class="quantity">数量</li>
                      <li class="aftersale">售后</li>
                      <li class="total">实付款(元)</li>
                      <li class="status">交易状态</li>
                      <li class="other">操作</li>
                    </ul>
                  </div>
                  <div id="orderWrap"><!-- 有订单 --><!-- 回收站 -->
                    <div class="order-list">  <!--订单class 未支付 order-section unpaid //未确认 order-section unconfirmed 完成 order-section finished --> 
                      <div data-payid="20505669344825" class="order-section unpaid"> 
                        <table class="order-table"> <tbody>  <!-- shop头部 --> 
                        <tr class="order-table-header"> 
                          <td colspan="7"> 
                            <div class="order-info fl">  <!-- 编号：已付款->shopOrderId 未付款->payOrderId --> 
                              <span class="no"> 订单编号： 
                                <span class="order_num"> 20505669354825 </span> 
                              </span> 
                              <span class="deal-time"> 成交时间：2016-03-26 18:34:20 </span>
                                <a href="http://shop.mogujie.com/14nfs" target="_blank" class="shop-name"> 店铺：<span>优依阁精品女装</span> </a>  
                              </div> 
                              <a data-bid="14nfs#28" class="mogutalk_btn" href="javascript:;"> <span class="icon icon-contact">联系商家</span> </a> 
                            </td> 
                          </tr> <!-- shop头部end --> <!-- shop内容 -->  
                          <tr class="order-table-item last"> 
                            <td class="goods"> 
                              <a target="_blank" hidefocus="true" title="查看宝贝详情" href="http://www.mogujie.com/detail/18m4qku" class="pic"> 
                                <img width="70" src="./imgs/16mvtq_ie4wkmlbg4ztaolggyzdambqgqyde_640x960.jpg"> 
                              </a> 
                              <div class="desc"> 
                                <p> 
                                  <a target="_blank" href="http://www.mogujie.com/detail/18m4qku">新品 韩版新款显瘦长袖衬衣+宽松高腰小脚破洞牛仔背带裤两件套</a> <!--订单快照-->  
                                  <a target="_blank" href="http://www.mogujie.com/trade/order/snap?orderId=1ejcck74yy" class="snapshot">[交易快照]</a>  
                                </p>   
                                <p>颜色：白色衬衫+背带裤</p>  
                                <p>尺码：M</p>    
                                <ul class="ui-tags-list clearfix">
                                  <li class="ui-tags-item"> 
                                    <img alt="" src="%E8%AE%A2%E5%8D%95%E5%88%97%E8%A1%A8_%E8%98%91%E8%8F%87%E8%A1%97_files/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" class="ui-tag-pic"> 
                                      <div class="ui-tag-text ui-hide"> 
                                        <a href="http://www.mogujie.com/trade/faq/index?id=1ws&amp;type=1" class="ui-tag-link">72小时发货</a> 
                                        <span class="ui-icon-arrow"></span> 
                                      </div> 
                                  </li>  
                                  <li class="ui-tags-item"> 
                                    <img alt="" src="%E8%AE%A2%E5%8D%95%E5%88%97%E8%A1%A8_%E8%98%91%E8%8F%87%E8%A1%97_files/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" class="ui-tag-pic"> 
                                    <div class="ui-tag-text ui-hide"> 
                                      <a href="http://www.mogujie.com/trade/faq/index?id=1c4&amp;type=1" class="ui-tag-link">7天无理由退货</a> 
                                      <span class="ui-icon-arrow"></span> 
                                    </div> 
                                  </li>  
                                </ul>  
                              </div> 
                            </td> 
                            <td class="price">  
                              <p class="price-old">180.00</p>  
                              <p>126.00</p> 
                            </td> 
                            <td class="quantity">1</td> 
                            <td class="aftersale">  </td> <!-- 多个商品的时候 后三列中每列只显示同个内容 -->  
                            <td rowspan="1" class="total">  
                              <p class="total-price">￥ 126.00</p>
                              <p>(包邮)</p>   
                            </td> 
                            <td rowspan="1" class="status"> 
                              <p class="wait_pay"> 待付款 </p> 
                              <a target="_blank" class="order-link go-detail-link" href="http://order.mogujie.com/order/detail4buyer?orderId=20505669354825">订单详情</a> <!-- 查看物流 -->  
                            </td> 
                            <td rowspan="1" class="other"> <!-- 回收站 -->  <!-- 已付款后显示 -->  </td>
                          </tr>  <!-- shop内容end --> <!-- 预售 -->  <!-- 预售end -->  <!-- 未付款时显示 -->
                          <tr class="order-table-footer"> 
                            <td colspan="4"> 
                              <ul> <!-- 剩余时间 --> 
                                <li> <!-- 预售且订单未关闭状态下~ -->   
                                  <p data-time="86355" class="timer">还剩0天23时59分</p>   
                                </li> <!-- 删除订单 -->      
                                <li> 
                                  <a data-payid="20505669344825" href="javascript:;" class="order-link order-cancel">取消订单</a> 
                                </li>    <!-- 优惠券 -->  
                              </ul> 
                            </td> 
                            <td class="total"> 
                              <span class="sub">总计：</span>￥126.00 
                            </td> 
                            <td class="status"> 
                              <p class="wait_pay">等待付款</p> 
                            </td> 
                            <td class="other"> <!-- 付款按钮 -->
                              <a href="http://order.mogujie.com/order/cashier?orderId=20505669344825" target="_blank" class="order-btn primary order-pay">付款</a>      
                            </td> 
                          </tr>  <!-- 未付款时显示end --> 
                        </tbody> 
                      </table> 
                    </div> 
                  </div><!-- 翻页 -->
                  <div id="paginator-list"></div>
                </div>
              </div>
            </div>
          </div>























  <!-- ==============================================footer============================================ -->
  <?php require PATH.'com/footer.php'; ?>

   <!-- 此处引入jQuery -->
  <script src="./public/js/jquery.min.js"></script>
  <!-- bootstrap.min.js必须放在JQ后面 -->
  <script src="./public/js/bootstrap.min.js"></script>
  </body>
 </html>