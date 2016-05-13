<?php 
    $sql = "
        SELECT i.iname, g.gname, g.id, g.price, g.zan
        FROM ".PRE."goods g, ".PRE."image i
        WHERE i.goods_id = g.id AND i.cover=1 AND g.state=1 AND g.is_hot=1 limit 12
    ";
    $list = query($link, $sql);
    // p($list);exit;

 ?>

<!-- 新品模块 -->
<div class="container mt20">
    <div class="row h2 mt20">
    <div style="height:3px;" class="col-md-12 bg-danger "></div>
        热销商品<span class=" glyphicon glyphicon-hand-down mt30"></span>
        <span><a href="./main2.php" class="btn btn-info btn-lg pull-right mt30">全部商品</a></span>
        <div style="height:3px;" class="col-md-12 bg-danger mt20"></div>
    </div>
    <div class="row">

        <?php if (empty($list)): ?>
        <h2>暂无数据</h2>
        <?php else: ?>
        <?php foreach ($list as $key => $val): ?>
        <div class="col-md-2">
          <div class="thumbnail s1">
            <a href="./xiangqing.php?id=<?php echo $val['id'] ?>&gname=<?php echo $val['gname'] ?>" target="_blank">
                <img src="<?php echo getpath(URL.'uploads/',$val['iname'],'c') ?>">
            </a>
            <div class="caption">
                <a href="./xiangqing.php?id=<?php echo $val['id'] ?>&gname=<?php echo $val['gname'] ?>" target="_blank">
                    <h4><?php echo $val['gname'] ?></h4>
                </a>
              <p>
                <span class="glyphicon glyphicon-yen"></span>
                <?php echo $val['price'] ?>
                <a href="./com/zan.php" class="pull-right"><span class="glyphicon glyphicon-heart"></span> <?php echo $val['zan'] ?></a>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        <?php endif ?>

    </div><!-- END row -->
</div><!-- END container -->