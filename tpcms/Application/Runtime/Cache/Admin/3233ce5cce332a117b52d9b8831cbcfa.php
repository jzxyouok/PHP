<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tpblog/Application/Admin/Public/css/main.css"/>
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
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><a href="/tpblog/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">文章管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/tpblog/index.php/Admin/Article/sort" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/tpblog/index.php/Admin/Article/add">新增文章</a>
                        

                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th width="4%" >ID</th>
                            <th>文章标题</th>
                            <th width="14%" >缩略图</th>
                            <th width="8%" >所属栏目</th>
                            <th width="10%">操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td width="4%"><?php echo ($vo["id"]); ?></td>
                            <td title="<?php echo ($vo["title"]); ?>"><a target="_blank" href="#" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a>
                            </td>
                            <td>
                            <?php if($vo['pic'] != ''): ?><img src="/tpblog<?php echo ($vo["pic"]); ?>" height="30">
                            <?php else: ?>
                            暂无缩略图<?php endif; ?>
                            </td>
                            <td><?php echo ($vo["catename"]); ?></td>
                            <td>
                                <a class="link-update" href="/tpblog/index.php/Admin/Article/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                                <a class="link-del" onclick="return confirm('你要删除该文章吗？');" href="/tpblog/index.php/Admin/Article/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>