<?php require './init.php' ?>

<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街购物车</title>

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
 
<!-- ==================步骤==================== -->
<div class="g-header clearfix">
    <div class="g-header-in wrap clearfix">
        <div class="process-bar">
            <div class="md_process md_process_len4">
                <div class="md_process_wrap md_process_step1_5">
                    <div class="md_process_sd"></div>
                    <i class="md_process_i md_process_i1">
                        1                <span class="md_process_tip">购物车</span>
                    </i>
                    <i class="md_process_i md_process_i2">
                        2                <span class="md_process_tip">确认订单</span>
                    </i>
                    <i class="md_process_i md_process_i3">
                        3                <span class="md_process_tip">支付</span>
                    </i>
                    <i class="md_process_i md_process_i4">
                        <img width="23" height="23" alt="" src="//www.mogujie.com/img/pay/right.png">
                        <span class="md_process_tip">完成</span>
                    </i>
                </div>
            </div>        </div>
        <div class="logo logo-cart"></div>
    </div>
  </div>
<!-- ===================主体===================== -->
  <div class="g-wrap wrap">  
    <ul id="cartSlide" class="clearfix cart_slide pb20"> 
      <li> 
        <a class="mr10 cart_slide_item cartSlideItemAll cart_slide_item_cur"> 全部商品 (<span class="num">1</span>)</a> 
      </li> 
      <li class="cartslide-line">|</li> 
      <li> 
        <a class="mr10 cart_slide_item cartSlideItemCut " url="1" href="javascript:;"> 优惠 (<span class="num">1</span>) </a> 
      </li> 
      <li class="cartslide-line">|</li> 
      <li> 
        <a class="mr10 cart_slide_item cartSlideItemLess  cart_slide_not_allowed" url="2" href="javascript:;"> 库存紧张 (<span class="num">0</span>) </a> 
      </li> 
    </ul>  <!-- 不为空的情况 --> 
    <div class="cart_wrap cart_nobdbtm"> 
      <div id="cartPage" class="cart_page_wrap"> 
        <input type="hidden" value="" id="shop_domain" name="shop_domain"> 
        <input type="hidden" value="" id="data_props" name="data_props"> 
        <input type="hidden" value="0" id="coudan_type"> <!-- 表格 --> 
          <table id="cartOrderTable" class="cart_table"> <thead> 
            <tr> 
              <th class="cart_table_check_wrap cart_alleft pl10"> 
                <input type="checkbox" id="s_all_h" class="s_all tr_checkmr" name="s_all"> <label for="s_all_h">全选</label> </th> 
              <th class="cart_table_goods_wrap">商品</th> 
              <th class="cart_table_goodsinfo_wrap">商品信息</th>
              <th>单价(元)</th> 
              <th class="cart_table_goodsnum_wrap">数量</th> 
              <th class="cart_table_goodssum_wrap">小计(元)</th> 
              <th class="cart_table_goodsctrl_wrap">操作</th> 
            </tr> </thead> <tbody>    
            <tr class="" data-sellerid="11mh9n2" data-bid="1o7nja" id="shoptit_1o7nja"> <!-- id 是店铺id --> 
              <td class="cart_group_head" colspan="7"> <!-- data-bid 这里 店铺id -->  
                <input type="checkbox" data-sellerid="11mh9n2" name="s_shopall" data-bid="1o7nja" class="s_shopall tr_checkmr">
                  <label class="cart_lightgray" for="">店铺：</label>  
                    <a class="cart_hoverline" target="_blank" href="http://shop.mogujie.com/1o7nja">久久潮衣社</a>  
                    <a data-bid="1o7nja#23" class="cart_im_btn mr5 mogutalk_widget_btn mogutalk_btn" href="javascript:;">联系客服</a>
                      <img src="http://s17.mogucdn.com/p1/150923/upload_ieztomzrmeydmmlegmzdambqgyyde_147x23.png">   <!-- 有更多满减信息 -->  
                      <div class="cart_tip_red cart_hidetip"> 
                        <div class="cart_tip_hd"> 
                          <span>领取</span>
                          <i class="cart_icon_redarrow">√</i> 
                        </div> 
                        <div class="cart_hidden" style="display: none;">
                          <p class="got_cp">
                            <a class="close" href="javascript:;"></a>
                          </p>
                          <div class="coupons">
                            <ul>
                              <li class="clearfix">
                                <span class="value fl ">￥3.00</span>
                                <p class="cp_title fl">购物满99元立减</p>
                                <p class="cp_desc fl">16.03.24-16.09.24</p>
                                <span data-pid="19teoc" class="draw fr yes">领取</span>
                              </li>
                              <li class="clearfix">
                                <span class="value fl ">￥10.00</span>
                                <p class="cp_title fl">购物满168元立减</p>
                                <p class="cp_desc fl">16.03.24-16.09.24</p>
                                <span data-pid="19teq0" class="draw fr yes">领取</span>
                              </li>
                              <li class="clearfix">
                                <span class="value fl ">￥30.00</span>
                                <p class="cp_title fl">购物满288元立减</p><p class="cp_desc fl">16.03.24-16.09.24</p>
                                <span data-pid="19tetg" class="draw fr yes">领取</span>
                              </li>
                            </ul>
                          </div>
                        </div> 
                      </div> 
                    <span class="cart_tip_red red">优惠券：</span> 
                    <ul class="discount cart_tip_red">  
                      <li><i></i>满99元减3</li>  
                    </ul>  
                  </td> 
                </tr>  
                <tr data-price="7000" data-ptp="_shoppingcart" data-ptps="1.kLpMkyRL._book_shopping_50003_pc-wall-v1_noab-noab_wall_docs.48.eFFEn" data-tradeitemid="18qdbci" data-stockid="16kqz4g" data-sellerid="11mh9n2" data-bid="1o7nja" data-isless="false" data-cut="true" class="cart_mitem "> 
                  <td class="vm">  
                    <input type="checkbox" data-stockid="16kqz4g" class="cart_thcheck">
                  </td> 
                  <td class="cart_table_goods_wrap"><!-- 商品 --> 
                    <a class="cart_goods_img" target="_blank" href="http://shop.mogujie.com/detail/18qdbci?ptpfrom=1.kLpMkyRL._book_shopping_50003_pc-wall-v1_noab-noab_wall_docs.48.eFFEn"> 
                      <img width="78" height="78" alt="夏装韩范新款V领宽松七分袖中长款衬衫女潮" src="http://s22.mogucdn.com/p1/160420/49111659_ifrgeytgga2geyjqhazdambqmeyde_640x960.jpg_100x100.jpg" class="cartImgTip">  
                    </a> <!-- 商品title --> 
                    <a title="夏装韩范新款V领宽松七分袖中长款衬衫女潮" class="cart_goods_t cart_hoverline" target="_blank" href="http://shop.mogujie.com/detail/18qdbci?ptpfrom=1.kLpMkyRL._book_shopping_50003_pc-wall-v1_noab-noab_wall_docs.48.eFFEn"> 夏装韩范新款V领宽松七分袖中长款衬衫女潮 </a> <!-- 321活动提醒 <div class="event_tip_wrap"> <p class="event_tips"> <b><img src="" alt=""></b><span class="e_price">321活动提醒</span> </p> </div>--> <!-- 321活动提醒 end --> 
                    <p class="remind_btm"> <!-- 降价信息 -->  </p> 
                  </td> 
                  <td>  
                    <p class="cart_lh20">颜色：红色</p>  
                    <p class="cart_lh20">尺码：M</p>  
                  </td> 
                  <td class="cart_alcenter"><!-- 单价 -->  
                    <p class="cart_lh20 cart_throughline cart_lightgray">70.00</p>
                    <p data-price="49.00" class="cart_lh20 cart_bold cart_data_sprice"> 49.00 </p>   
                    <p> <span class="cart_tip_yellow cart_tip_focuswidth">促销7.00折</span> </p>  
                  </td> 
                  <td class="cart_alcenter"><!-- 数量 -->  
                    <div> 
                      <div data-ptp="1.kLpMkyRL._book_shopping_50003_pc-wall-v1_noab-noab_wall_docs.48.eFFEn" data-timestamp="" data-stocknum="357" data-stockid="16kqz4g" class="cart_num cart_counter"> 
                        <input type="text" value="1" maxlength="3" class="cart_num_input cart_bold">  
                        <span class="cart_num_add"></span> 
                        <span class="cart_num_reduce disable"></span>  
                      </div> 
                    </div>   
                  </td> 
                  <td class="cart_alcenter"><!-- 小计 --> 
                    <p data-price="49.00" data-unit="49" class="cart_deep_red cart_font16 item_sum">49.00</p> 
                  </td> 
                  <td class="cart_alcenter"><!-- 操作 --> 
                    <a class="cart_hoverline delete" href="javascript:;">删除</a> 
                  </td> 
                </tr>   
                <!-- <tr class="J_mundo m-undo"> 
                  <td colspan="7"> 
                    <div class="m-undo-wrap">成功删除 
                      <span class="J_num">1</span> 件商品，如有误，可
                      <a class="J_undo" href="javascript:;">撤销本次删除</a>
                    </div> 
                  </td>
                </tr>  -->
              </tbody> </table> <!-- 表格 end -->
            </div> 
            <div style="display:none;" id="cartEmptyPage" class="cart_page_wrap"> 
              <div class="cart_empty"> 
                <div class="cart_empty_icon"></div> 
                <h5 class="mb20">您的购物车还是空的，赶快去挑选商品吧！</h5> 
                <ul class="cart_empty_list"> 
                  <li>去看看大家都喜欢的
                    <a class="cart_red cart_uline" href="http://www.mogujie.com/shopping/">潮流单品</a>
                  </li> 
                  <li>去看看正在折扣中的优品
                    <a class="cart_red cart_uline" href="http://www.mogujie.com/tuan/">团购</a>
                  </li> 
                </ul> 
              </div> 
            </div> 
          </div>  
          <div id="cartPaybar" class="cart_paybar wrap"> 
            <a id="payBtn" class="cart_paybtn fr cart_paybtn_disable" href="javascript:;">去付款</a> 
            <div class="cart_paybar_info_cost cart_deep_red cart_bold cart_font26 cart_money fr goodsSum">¥ 0.00</div> 
            <div class="cart_paybar_info cart_pregray fr"> 共有 <span class="cart_deep_red goodsNum">0</span> 件商品，总计： </div> <!-- <div class="act-bottom-event fr"> <img class="event-img" src="" /> <span></span> <span id="J_ActCountdown" data-remaining=""> <span class="an"></span>天<span class="an"></span>小时<span class="an"></span>分<span class="an"></span>秒 </span> </div> --> 
            <div class="cart_paybar_vmbox"> 
              <input type="checkbox" id="s_all_f" class="s_all_slave cart_vm" name="s_all"> 
              <label class="mr10" for="s_all_f">全选</label> 
              <a id="cartRemoveChecked" class="mr10 cart_uline cart_pregray" href="javascript:;">删除</a> 
              <a id="cartRemoveUnuse" class="mr10 cart_uline cart_pregray" href="javascript:;">清空失效商品</a> 
            </div> 
          </div> 
          <form method="POST" id="postform" action="http://buy.mogujie.com/buy"> 
            <input type="hidden" id="postdata" name="postdata"> 
            <input type="hidden" value="" name="mtk">
            <input type="hidden" id="ptpdata" name="ptp"> 
          </form>  
        </div>









<!-- ======================FIXED============================= -->
  <?php require PATH.'com/footer.php'; ?> 


    <!-- 此处引入jQuery -->
    <script src="./public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>