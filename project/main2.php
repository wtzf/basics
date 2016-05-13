<?php require './init.php';

    //接收用户点击过来的分类ID
    if (!empty($_GET['cate_id']) ) {
        $cate_id = $_GET['cate_id'];

    //将此ID下的所有子孙的ID全部都查出来

    //1.拼接自己的 "path,id," 条件
      $sql = "SELECT id,cname,path,concat(path,id,',') bpath FROM ".PRE."category WHERE id='$cate_id'";
      $row1 = query($link, $sql);
      $cname = $row1[0]['cname'];

      $bpath = $row1[0]['bpath'];

      $id = $row1[0]['id'];

      $sql="SELECT id FROM ".PRE."category WHERE path LIKE '$bpath%'";
        $result=query($link,$sql);
        // p($result);
        $ids='';
        if (empty($result)) {
          $sql = "
          SELECT i.iname, g.gname, g.price, g.zan, g.id
          FROM ".PRE."goods g, ".PRE."image i
          WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND cate_id=$id";
          $list = query($link, $sql);
          // p($list);

        }else{
          foreach ($result as $val) {
            $ids .=$val['id'].',';
            
          }
          $ids=rtrim($ids,',');
          //按分类ID去查询商品数据
          $sql = "
          SELECT i.iname, g.gname, g.price, g.zan, g.id
          FROM ".PRE."goods g, ".PRE."image i
          WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND cate_id in($ids)";
          $list = query($link, $sql);
          // v($list);
          // p($sql);
          // exit;
        }
    }elseif (!empty($_POST['gname'])) {
      $gname=$_POST['gname'];

      $sql = "
      SELECT i.iname, g.gname, g.price, g.zan, g.id
      FROM ".PRE."goods g, ".PRE."image i
      WHERE g.id = i.goods_id AND i.cover=1 AND g.state=1 AND g.gname LIKE '%$gname%'";
      // p($sql);
      $list = query($link, $sql);
      // p($list);
    }else{
      $sql = "
          SELECT i.iname, g.gname, g.id, g.price, g.zan, g.id
          FROM ".PRE."goods g, ".PRE."image i
          WHERE i.goods_id = g.id AND g.state=1 
          ";
      $list=query($link,$sql);
      // p($list);

    }

?>


<!DOCTYPE html>
<html lang="cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上面3个meta标签*必须*放在最前面 -->
    <title>蘑菇街二级页</title>

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
  <div class="cb"></div>
<!-- =================分类==================== -->

<!-- ==========================================衣服================================================ -->
    <div class="container">
        <div class="row h1">
            <h2>全部商品</h2>
            <hr>
        </div>
        <div class="row">
        <?php  if (empty($list)) {
            redirect('此分类暂无商品',URL.'main2.php',2);

          }else{?>
          <?php foreach ($list as $key => $val): ?>
            <div class="col-md-3">
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
          <?php } ?>

        </div><!-- END row -->
    </div><!-- END container -->










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