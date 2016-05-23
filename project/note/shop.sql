-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: localhost    Database: s47_shop
-- ------------------------------------------------------
-- Server version	5.7.9

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `s47_address`
--

DROP TABLE IF EXISTS `s47_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phone` char(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_address`
--

LOCK TABLES `s47_address` WRITE;
/*!40000 ALTER TABLE `s47_address` DISABLE KEYS */;
INSERT INTO `s47_address` VALUES (1,'上海市闸北区万荣路1188号F栋3楼兄弟连',1,'黄文韬','18130616025'),(2,'上海市闸北区万荣路1188号F栋3楼兄弟连',1,'尹以斌','13111112222'),(3,'上海市闸北区万荣路1188号F栋3楼兄弟连',1,'王德稳','18111112222');
/*!40000 ALTER TABLE `s47_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_admin_user`
--

DROP TABLE IF EXISTS `s47_admin_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pwd` char(32) NOT NULL,
  `tel` char(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_admin_user`
--

LOCK TABLES `s47_admin_user` WRITE;
/*!40000 ALTER TABLE `s47_admin_user` DISABLE KEYS */;
INSERT INTO `s47_admin_user` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','18130616025',0),(2,'hwtt','e10adc3949ba59abbe56e057f20f883e','18111112222',1),(3,'wjkk','c8837b23ff8aaa8a2dde915473ce0991','13111112222',1);
/*!40000 ALTER TABLE `s47_admin_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_category`
--

DROP TABLE IF EXISTS `s47_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '0,',
  `display` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cname` (`cname`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_category`
--

LOCK TABLES `s47_category` WRITE;
/*!40000 ALTER TABLE `s47_category` DISABLE KEYS */;
INSERT INTO `s47_category` VALUES (1,'服装',0,'0,',1),(2,'男装',1,'0,1,',1),(3,'女装',1,'0,1,',1),(4,'上衣',3,'0,1,3,',1),(5,'裙子',3,'0,1,3,',1),(6,'裤子',3,'0,1,3,',1),(7,'连衣裙',5,'0,1,3,5,',1),(8,'短裙',5,'0,1,3,5,',1),(9,'蕾丝裙',5,'0,1,3,5,',1),(10,'包臀裙',5,'0,1,3,5,',1),(11,'背带裤',6,'0,1,3,6,',1),(12,'打底裤',6,'0,1,3,6,',1),(13,'情侣装',4,'0,1,3,4,',1),(14,'蕾丝衫',4,'0,1,3,4,',1),(15,'背心吊带',4,'0,1,3,4,',1),(17,'型男裤装',2,'0,1,2,',1),(18,'西装裤',17,'0,1,2,17,',1);
/*!40000 ALTER TABLE `s47_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_comment`
--

DROP TABLE IF EXISTS `s47_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `og_id` int(10) unsigned NOT NULL,
  `p_id` int(10) unsigned NOT NULL,
  `comment` varchar(600) NOT NULL,
  `return` varchar(600) DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_comment`
--

LOCK TABLES `s47_comment` WRITE;
/*!40000 ALTER TABLE `s47_comment` DISABLE KEYS */;
INSERT INTO `s47_comment` VALUES (1,10,1,'很好，很喜欢~~~~~~','~~~~~~~·',0),(2,12,1,'.................................','',0),(3,13,1,'好好好哦','',0);
/*!40000 ALTER TABLE `s47_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_goods`
--

DROP TABLE IF EXISTS `s47_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) DEFAULT NULL,
  `cate_id` int(10) unsigned DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `stock` int(10) unsigned NOT NULL DEFAULT '0',
  `sale` int(10) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  `state` tinyint(4) NOT NULL DEFAULT '1',
  `zan` smallint(6) NOT NULL DEFAULT '0',
  `msg` varchar(600) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `gname` (`gname`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_goods`
--

LOCK TABLES `s47_goods` WRITE;
/*!40000 ALTER TABLE `s47_goods` DISABLE KEYS */;
INSERT INTO `s47_goods` VALUES (1,'曼旋 2016夏装新款小清新短袖棉麻连衣裙',7,158.20,961,0,1,1,1,0,'曼旋 2016夏装新款两件套棉麻连衣裙中长款韩版修身短袖休闲时尚套装女套装裙修身棉麻连衣裙潮 ML0608'),(2,'秋冬高腰半身裙大码百褶裙A字裙蓬蓬裙伞裙短裙裤毛呢裙加厚呢子',8,99.40,533,0,0,0,1,0,'秋冬高腰半身裙大码百褶裙A字裙蓬蓬裙伞裙短裙裤毛呢裙加厚呢子'),(3,'新款优雅淑女圆领无袖拼接透视白色蕾丝公主裙',9,44.10,997,0,0,1,1,0,'韩国东大门新款！足以用惊艳全场来形容，名副其实的压轴小洋装！\r\n\r\n超爱的奶色，特别柔和显肤色，美到没朋友！\r\n\r\n重工压褶立体层次感，穿上ta，你的出现就是别人的风景！'),(4,'新款淑女气质百搭性感开叉包臀裙修身显瘦半身职业裙',10,98.99,1110,0,1,1,1,0,'品质保证！承诺7天无理由退换货~~~\r\n\r\n一件衣服好的样式能凸显出自己的气质，好的面料让自己舒适，好的质量保证可以穿的更久。亲爱的还在犹豫什么呢？'),(5,'韩版新款矿石灰高腰包臀职业半身裙',10,88.90,140,1,1,0,1,0,'可上班穿，可休闲穿，上衣搭配不同的会有不同的风格，质量是原版AA定制，气场要hold住！'),(6,'复古花朵印染修身弹力包臂裙',10,84.00,75,4,1,0,1,0,'复古花朵印染设计，修身包臀，有弹力，尽显性感臀部，回头率好高的'),(7,'初秋新品气质修身显瘦口袋拼贴A字包臀裙',10,89.60,272,0,1,0,1,0,'贴身A字包臀版型短裙，平整简洁腰部后面设计隐形拉链，两边的个性新颖宽大口袋美观又实用，在膝盖略上的长度，拉长比例又相当百搭长度适中，小个子姑娘也可以驾驭修身款式，正式的场合也可以穿上身搭配衬衫或者T恤都可以，秋冬搭配毛衣穿也是很时尚的哦，球鞋或者高跟鞋也毫无压力的搭配。\r\n'),(8,'蕾丝短裙韩版性感包臀裙',10,82.65,398,0,0,1,1,0,'0861#实拍2016春夏蕾丝短裙韩版显瘦半身裙一步裙性感修身包臀裙 此款送皮带'),(9,'秋冬高腰修身包臀裙',10,92.90,399,0,1,0,1,0,'高腰修身包臀裙一步裙 2015年秋冬半身裙 秋冬'),(10,'韩版显瘦小脚哈伦背带休闲裤',11,59.50,788,0,0,1,1,0,'吊带可拆卸，有两种方式穿法哦！裤子超级的百搭，穿不同的打底，显示不同的风格，配不同的外套，穿出不同的个性，背带裤是减龄的好帮手，同时穿出时尚青春与活力^^'),(11,'2016新款韩国代购韩版学生宽松大码显瘦背带裤长',11,79.80,466,0,0,1,1,0,'韩国货！重磅货！\r\n\r\n好东西要说3遍以上才可以\r\n\r\n这次我穿它去海边，全棉的牛仔布 很舒服\r\n\r\n春夏都可以穿，里面配个T恤，卫衣都超随意。BF风~\r\n\r\n背带裤双面都可以换着穿。'),(12,'宽松软妹白色牛仔日系破洞学生百搭休闲文艺百搭背带裤九分裤',11,87.50,88,0,1,0,1,0,'无破洞不夏天'),(13,'春季新款韩版减龄百搭竖条纹背带裤吊带裤休闲连体长裤女',11,46.00,66,0,1,1,1,0,'春季新款韩版减龄百搭竖条纹背带裤吊带裤休闲连体长裤女'),(14,'夏季新品复古白色蕾丝双层连衣裙',7,89.01,1621,0,1,0,1,0,'厂家直销质量保证，买到就是赚到'),(15,'夏季小清新甜美修身碎花棉质连衣裙背心裙女无袖短裙',8,69.30,291,1,1,1,1,0,'夏季小清新甜美修身碎花棉质连衣裙背心裙女无袖短裙'),(16,'文艺小清新复古宫廷风中长款蕾丝连衣裙 钩花镂空气质打底仙女裙',9,66.50,1388,0,0,0,1,0,'亲爱的姑娘们，这款大量现货呢，超精致细腻的重工蕾丝，仙仙飘飘美翻了，外出游玩拍照伴娘礼服，是焦点的哦！\r\n俏皮娃娃领口，钩花镂空气质打底仙女裙，100%质量保证。不缩水，不起皱，显气质，超仙女，超级显瘦。7天内无条件退换货。'),(17,'排扣高腰 外穿打底裤小脚裤',12,19.60,199,0,0,1,1,0,'亏本促销，限时抢购，欢迎抢购！！！'),(18,'格子情侣装夏装两件套装连衣裙子女时尚套装纯棉无袖背心裙男衬衫',13,79.00,397,1,1,0,1,0,'菇凉们，女款是一套的哟，女款的上衣扎进裙子里面会更好看的哟'),(19,'百搭显瘦❤韩版宽松V领五分袖镂空蕾丝衫',14,50.00,181,0,1,1,1,0,'❤百搭显瘦❤韩版宽松V领五分袖镂空蕾丝衫❤\r\n'),(20,'【MyGirl】韩版短款百搭挂脖针织背心',15,49.99,118,0,1,1,1,0,'舒适针织面料，穿着亲肤透气而且带有弹力噢~非常时尚百搭款式，单穿或者内搭都是美美哒~~'),(21,'【专柜正品】海澜之家男士冬季时尚商务休闲裤西裤',18,161.00,11103,0,1,0,1,0,'【专柜正品】海澜之家男士冬季时尚商务休闲裤西裤');
/*!40000 ALTER TABLE `s47_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_image`
--

DROP TABLE IF EXISTS `s47_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iname` varchar(255) DEFAULT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `cover` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `iname` (`iname`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_image`
--

LOCK TABLES `s47_image` WRITE;
/*!40000 ALTER TABLE `s47_image` DISABLE KEYS */;
INSERT INTO `s47_image` VALUES (1,'201605115732d3df55038.jpg',1,1),(2,'201605115732d52eb8e98.jpg',2,1),(3,'201605115732d6d92973d.jpg',3,1),(4,'201605115732d87f00f4d.jpg',4,1),(5,'201605115732ea8d5c5be.jpg',5,1),(6,'201605115732eaff5ac6e.jpg',6,1),(7,'201605115732ebfe39f57.jpg',7,1),(8,'201605115732eca78225a.jpg',8,1),(9,'201605115732ed6794f14.jpg',9,1),(13,'2016051257348361c750f.jpg',10,1),(14,'20160512573483be0d1ab.jpg',11,1),(15,'201605125734843c34f3b.jpg',12,1),(16,'20160512573484f5ee29c.jpg',13,1),(17,'2016051257348580dd8c6.jpg',14,1),(18,'201605125734862c89851.jpg',15,1),(20,'201605125734875b47adc.jpg',16,1),(22,'20160512573489192b3cb.jpg',17,1),(23,'201605125734899824771.jpg',18,1),(24,'2016051257348af45257c.jpg',19,1),(25,'2016051257348b65c767f.jpg',20,1),(26,'2016051257348c0c0ef5c.jpg',21,1);
/*!40000 ALTER TABLE `s47_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_order`
--

DROP TABLE IF EXISTS `s47_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ordernum` varchar(255) NOT NULL,
  `address_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `allprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordernum` (`ordernum`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_order`
--

LOCK TABLES `s47_order` WRITE;
/*!40000 ALTER TABLE `s47_order` DISABLE KEYS */;
INSERT INTO `s47_order` VALUES (1,'20160519825780308',3,1,343.32,1),(2,'20160519279565345',2,1,231.29,1),(3,'201605191188185938',1,1,336.00,2),(4,'20160519853495623',3,1,1219.03,2),(5,'20160519207661112',3,1,533.40,2),(6,'20160520407412598',2,1,165.30,1),(7,'201605201581023378',1,1,148.30,2),(8,'201605231080699323',1,1,278.70,0),(9,'201605231343704200',3,1,296.80,0),(10,'20160523140378789',2,1,225.20,0),(11,'20160523602902266',2,1,239.40,0),(12,'20160523831254596',3,1,257.00,0),(13,'20160523398709984',2,1,332.50,0),(14,'20160523648085089',1,1,200.00,0),(15,'20160523304725631',1,1,184.00,0),(16,'201605231339100369',2,1,58.80,0),(17,'201605231345370800',1,1,166.48,0),(18,'20160523112957137',3,1,191.89,0),(19,'201605231645475286',3,1,632.80,0),(20,'201605231758055735',1,1,415.10,0),(21,'20160523852596745',3,1,84.00,0);
/*!40000 ALTER TABLE `s47_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_ordergoods`
--

DROP TABLE IF EXISTS `s47_ordergoods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_ordergoods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `qty` int(10) unsigned NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_ordergoods`
--

LOCK TABLES `s47_ordergoods` WRITE;
/*!40000 ALTER TABLE `s47_ordergoods` DISABLE KEYS */;
INSERT INTO `s47_ordergoods` VALUES (1,8,82.65,2,1),(2,14,89.01,2,1),(3,3,44.10,3,2),(4,4,98.99,1,2),(5,6,84.00,4,3),(6,7,89.60,2,4),(7,1,158.20,3,4),(8,2,99.40,3,4),(9,14,89.01,3,4),(10,5,88.90,6,5),(11,8,82.65,2,6),(12,18,79.00,1,7),(13,15,69.30,1,7),(14,9,92.90,3,8),(15,15,69.30,2,9),(16,1,158.20,1,9),(17,9,92.90,1,10),(18,3,44.10,3,10),(19,11,79.80,3,11),(20,10,59.50,2,12),(21,13,46.00,3,12),(22,16,66.50,5,13),(23,19,50.00,4,14),(24,13,46.00,4,15),(25,17,19.60,3,16),(26,20,49.99,2,17),(27,16,66.50,1,17),(28,4,98.99,1,18),(29,9,92.90,1,18),(30,1,158.20,4,19),(31,6,84.00,1,20),(32,2,99.40,2,20),(33,3,44.10,3,20),(34,6,84.00,1,21);
/*!40000 ALTER TABLE `s47_ordergoods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s47_user`
--

DROP TABLE IF EXISTS `s47_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s47_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pwd` char(32) NOT NULL,
  `tel` char(11) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '2',
  `email` varchar(255) DEFAULT NULL,
  `logincount` int(10) unsigned DEFAULT '0',
  `forbid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s47_user`
--

LOCK TABLES `s47_user` WRITE;
/*!40000 ALTER TABLE `s47_user` DISABLE KEYS */;
INSERT INTO `s47_user` VALUES (1,'hwtt','670b14728ad9902aecba32e22fa4f6bd','18130616025',2,'1154257912@qq.com',35,0),(3,'hhhh','670b14728ad9902aecba32e22fa4f6bd','13012345678',1,'12111@qq.com',2,0),(4,'wdww','e10adc3949ba59abbe56e057f20f883e','18111112222',2,'11@qq.com',2,0),(5,'qqqqq1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,'',7,0),(6,'wwwww1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,'',0,1),(7,'eeeee1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(8,'rrrrr1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(9,'ttttt1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(10,'yyyyy1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(11,'uuuuu1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(12,'qqqqq2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(13,'wwwww2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(14,'eeeee2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(15,'rrrrr2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(16,'ttttt2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(17,'yyyyy2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(18,'uuuuu2','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(19,'iiiii1','e10adc3949ba59abbe56e057f20f883e','13888888888',2,NULL,0,0),(20,'hsad\r\n','e10adc3949ba59abbe56e057f20f883e','18111112222',2,'11@qq.com',2,0),(22,'lala\r\n','e10adc3949ba59abbe56e057f20f883e','18114322243',2,'11212@qq.com',2,0),(23,'lala\r\n\r\nhahasa','e10adc3949ba59abbe56e057f20f883e','18114324322',2,'11212@qq.com',2,0),(26,'hhaaa\r\n','e10adc3949ba59abbe56e057f20f883e','18111111232',2,'116543@qq.com',2,0),(27,'sjashd\r\n','e10adc3949ba59abbe56e057f20f883e','18143112222',2,'114533@qq.com',2,0),(28,'hqwd','e10adc3949ba59abbe56e057f20f883e','18112112787',2,'111232@qq.com',1,0),(29,'hewrd','e10adc3949ba59abbe56e057f20f883e','18111122222',1,'1165@qq.com',2,0),(30,'htretd','e10adc3949ba59abbe56e057f20f883e','18111312222',1,'11544@qq.com',2,0),(31,'llssad','e10adc3949ba59abbe56e057f20f883e','18111112222',2,'11786@qq.com',0,0),(32,'hello','e10adc3949ba59abbe56e057f20f883e','18114311222',1,'1168776@qq.com',2,0),(33,'love','e10adc3949ba59abbe56e057f20f883e','18111644222',2,'1167867@qq.com',2,0),(34,'evening','e10adc3949ba59abbe56e057f20f883e','18111766622',1,'1145354@qq.com',2,0),(35,'bill','e10adc3949ba59abbe56e057f20f883e','18111999922',2,'1123423@qq.com',2,0),(36,'hapl','e10adc3949ba59abbe56e057f20f883e','18111888222',1,'112345@qq.com',2,0),(37,'help','e10adc3949ba59abbe56e057f20f883e','18111198222',2,'11436@qq.com',2,0),(38,'login','e10adc3949ba59abbe56e057f20f883e','18117982222',2,'116547@qq.com',2,0),(39,'main','e10adc3949ba59abbe56e057f20f883e','18111198722',1,'116325@qq.com',2,0),(40,'pubilc','e10adc3949ba59abbe56e057f20f883e','18197812222',2,'1563117@qq.com',2,0),(41,'note','e10adc3949ba59abbe56e057f20f883e','18111119872',1,'111243@qq.com',2,0),(42,'image','e10adc3949ba59abbe56e057f20f883e','18111134222',2,'12421@qq.com',2,0),(43,'phone','e10adc3949ba59abbe56e057f20f883e','18111154322',2,'12341@qq.com',2,0),(44,'order','e10adc3949ba59abbe56e057f20f883e','18111112222',2,'11241@qq.com',2,0),(45,'goods','e10adc3949ba59abbe56e057f20f883e','18116282222',1,'19391@qq.com',2,0),(46,'comment','e10adc3949ba59abbe56e057f20f883e','18119753022',2,'193871@qq.com',2,0),(47,'mask','e10adc3949ba59abbe56e057f20f883e','18110864622',1,'106361@qq.com',2,0),(48,'today','e10adc3949ba59abbe56e057f20f883e','18111086722',2,'11947@qq.com',2,0),(49,'lastday','e10adc3949ba59abbe56e057f20f883e','18111090222',1,'137561@qq.com',2,0),(50,'shabi','e10adc3949ba59abbe56e057f20f883e','18111165722',2,'198761@qq.com',2,0),(51,'updays','e10adc3949ba59abbe56e057f20f883e','18199812222',1,'134561@qq.com',2,0),(52,'uploads','e10adc3949ba59abbe56e057f20f883e','18119012222',2,'14617@qq.com',2,0),(53,'cofing','e10adc3949ba59abbe56e057f20f883e','18111454222',0,'17651@qq.com',2,0),(54,'myself','e10adc3949ba59abbe56e057f20f883e','18111162222',2,'131541@qq.com',2,0),(55,'find','e10adc3949ba59abbe56e057f20f883e','18111116522',2,'1456761@qq.com',2,0),(56,'password','e10adc3949ba59abbe56e057f20f883e','18116411222',1,'1157679@qq.com',2,0),(57,'text','e10adc3949ba59abbe56e057f20f883e','18115431222',2,'1178234@qq.com',2,0),(58,'shopping','e10adc3949ba59abbe56e057f20f883e','18123412222',1,'114560@qq.com',2,0),(59,'letgo','e10adc3949ba59abbe56e057f20f883e','18111127522',2,'11654035@qq.com',2,0),(60,'shasha','e10adc3949ba59abbe56e057f20f883e','18112346222',1,'1167940@qq.com',2,0);
/*!40000 ALTER TABLE `s47_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-23 21:02:55
