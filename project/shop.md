# 商城项目文档

## 1. 目录结构：


## 根目录:
1. 主页  		index.php
2. 二级页 		main2.php
3. 详情页 		xiangqing.php
4. 购物车		shopping.php
5. 登录页 		login.php
6. 地址页		address.php
7. 修改密码		changpwd.php
8. 评价 			comment.php
9. 数据库常量定义  	config.php
10. 订单页			dingdan.php
11. 找回密码  		findpwd.php
12. 主配置 			init.php
13. 注册页			reg.php
14. 后台目录			admin
15. 功能目录			com
16. 图片				imgs
17. 记录目录			note
18. 公共模块			public
19. 图片上传保存目录	uploads

#### 1. 功能目录 com:
1. 404页面 		404.php  
2. 购物车处理 	cartdo.php  
3. 修改密码处理	changpwddo.php
4. 找回密码处理   findpwddo.php
5. 页脚			footer.php
6. 函数			function.php
7. 热销			is_hot.php
8. 新品			is_new.php
9. 巨幕			jum.php
10. 登录处理		logindo.php
11. 退出处理		logout.php
12. 个人中心修改密码处理       myselfdo.php
13. 页面导航					nav.php
14. 处理购物车跳转地址处理页   orderdo.php
15. 地址处理页				ordergoodsdo.php
16. 订单完成处理并跳到个人中心	orderinfo.php
17. 分页						page.php
18. 个人中心评论处理			pinbg.php
19. 跳转页面					redirect.php
20. 注册处理页面				regdo.php
21. 页面搜索模块				search.php
22. 详情页商品详情			shop.php
23. 验证码模块				yzm.php
24. 点赞量处理页  			zan.php

### 2. 后台目录
1. 后台用户管理		admin_user
	1. 主页				index.php
	2. 增加管理员			add.php
	3. 修改管理员信息		edit.php
	4. 处理页面			action.php
2. 前台用户管理		user
	1. 主页				index.php
	2. 增加用户			add.php
	3. 修改用户信息		edit.php
	4. 处理页面			action.php
3. 商品分类管理		category
	1. 主页				index.php
	2. 增加商品分类			add.php
	3. 修改商品分类		edit.php
	4. 处理页面			action.php
4. 评论管理			comment
	1. 主页				index.php
	2. 处理页面			action.php
5. 商品管理			goods
	1. 主页				index.php
	2. 增加商品			add.php
	3. 修改商品信息		edit.php
	4. 修改商品图片		img.php
	4. 处理页面			action.php
6. 订单管理			order
	1. 主页				index.php
	2. 处理页面			action.php
7. 公共目录			public
	1. 样式			css
	2. 字体    		fonts
	3. js			js
8. 后台主页(分帧)
	1. 主页			index.php
	2. 主体			main.php
	3. 顶部			top.php
	4. 菜单			menu.php 
9. 登录页面			login.php
10. 登录处理页面		logindo.php
11. 退出处理页面		logoutdo.php
12. 主配置文件		init.php
13. 跳转页面			redirect.php