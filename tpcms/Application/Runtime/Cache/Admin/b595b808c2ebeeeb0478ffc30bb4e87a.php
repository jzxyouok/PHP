<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/main.css"/>
    <script src="http://127.0.0.1/tpblog/Application/Admin/Public/js/jquery.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a href="/tpblog">前台首页</a></li>
                <li><a href="/tpblog/index.php/Admin/Index/index">后台首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo (session('username')); ?></a></li>
                <li><a href="/tpblog/index.php/Admin/Admin/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
                <li><a href="/tpblog/index.php/Admin/Admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <ul class="sub-menu">
                        <li><a href="/tpblog/index.php/Admin/Article/lst">文章管理</a></li>
                        <li><a href="/tpblog/index.php/Admin/Cate/lst">分类管理</a></li>
                        <li><a href="/tpblog/index.php/Admin/Link/lst">友情链接</a></li>
                        <li><a href="/tpblog/index.php/Admin/Admin/lst">管理员管理</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="result-wrap" style="text-align: center">
        <h1>本网站为练习网站</h1>
    </div>
    <!--/main-->
</div>
</body>
</html>