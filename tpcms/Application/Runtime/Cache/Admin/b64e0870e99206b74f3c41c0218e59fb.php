<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://127.0.0.1/tpblog/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/tpblog">前台首页</a></li>
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
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="/tpblog/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;管理员管理<span class="crumb-step">&gt;</span><span>新增管理员</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform">
                    <input type="hidden" name="id" value="<?php echo ($admins["id"]); ?>" />
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>管理员名称：</th>
                                <td>
                                    <input class="common-text required" id="username" name="username" size="50" value="<?php echo ($admins["username"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>管理员密码：</th>
                                <td>
                                    <input class="common-text required" id="password" name="password" size="50" value="" type="text">
                                    留空则表示不修改
                                </td>
                            </tr>
                            
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>