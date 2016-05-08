目录结构的构建

PS.以下所有目录的路径都是以项目目录为基底

0. 根目录  项目目录
0.1 主页 ./index.php
0.2 数据库的配置 ./config.php
0.3 初始化的配置文件 ./init.php
0.4 404.php
0.5 修改密码页  ./changpwd.php
0.6 订单页   ./dingdan.php
0.7 找回密码页  ./findpwd.php
0.8 登录页   ./login.php
0.9 注册页   ./reg.php
0.10  二级页   ./main2.php
0.11  个人中心页   ./myself.php
0.12  购物车页   ./shopping.php
0.12  详情页   ./xiangqing.php

============================
1. 公共目录 [public文件夹] 
    用于引入CSS/JS/FONT等文件
1.0 bootstrap 文件 ./
1.1 前台主页的样式文件 ./public/home.css 
1.3 登录背景样式文件   ./public/login.css 
1.2 后台主页的样式文件 ./public/admin.css 
1.4 ....

============================
2. 功能组件  [com文件]
用于存放网站的各种功能模块
2.0 修改密码   ./com/changpwddo.php
2.1 找回密码   ./com/findpwddo.php
2.2 页脚   ./com/footer.php
2.3 自定义函数库   ./com/function.php
2.4 巨幕   ./com/jum.php
2.5 登录处理   ./com/logindo.php
2.6 退出登录   ./com/logout.php
2.7 导航栏   ./com/nav.php
2.8 跳转页   ./com/redirect.php
2.9 注册处理   ./com/regdo.php
2.10 搜索栏   ./com/search.php
2.11 验证码   ./com/yzm.php

============================
3.图片 [imgs 文件]
用于存放网站自己的背景图/logo/按钮图/图标

============================
4.文件上传  [uploads文件夹]
用于保存上传上来的图片

============================
5.记录 [note文件夹]
用于存放 网站的说明文件/SQL文件/数据库备份

============================
6.后台部分 [admin文件夹]
用于实现网站的后台

