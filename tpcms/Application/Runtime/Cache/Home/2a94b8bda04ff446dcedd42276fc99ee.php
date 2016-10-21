<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="screen" href="/tpblog/Public/style/style.css"  />
<title>网站练习</title>

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
</head>
<body class="home blog">
<div class="topbar">
	<div class="inner">
		<ul class="nav">
			<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($current == $vo['id']): ?>class='current-menu-item'<?php endif; ?> ><a href="/tpblog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<div class="wrapper">
	<div class="content">
		<ul class="excerpt thumb">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="/tpblog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" class="pic"><img src="/tpblog<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></a>			<h2 class="excerpt-tit">
						<a href="/tpblog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["title"]); ?></a>
					</h2>
					<p class="excerpt-desc"><?php echo ($vo["desc"]); ?>...</p>
					<div class="excerpt-time"><?php echo (date("m-d",$vo["time"])); ?></div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>

<div class="paging"><?php echo ($page); ?></div>

</div>
<div class="sidebar">
	<div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>
		<ul>
		<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18"><a href="/tpblog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="widget widget_recent_entries">		<h3 class="widget-tit">最新发表</h3>		<ul>
				<?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a href="/tpblog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>	
				</ul>
		</div>
	<div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
	<ul class='xoxo blogroll'>
		<?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
	<div class="resume"><a href="/tpblog/index.php/Home/Index/download">周起的个人简历</a></div>
</div>

</div>

<div id="board">
    <form id="form" method="post" action="/tpblog/index.php/Home/Index/messadd">
        <div>
            <label for="username">昵称:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="username">邮箱:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="username">内容:</label>
            <textarea name="content" id="" cols="30" rows="10" required></textarea>
        </div>
        <input type="submit" style="width: 200px;height: 30px;margin: 10px;font-size: 20px; border-radius: 5px;">
    </form>
    <table id="table">
        <tr><td colspan="3">最新5条留言</td></tr>
        <tr><td>昵称</td><td>发表时间</td><td style="width: 500px">留言内容</td></tr>
        <?php if(is_array($messages)): $i = 0; $__LIST__ = $messages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["username"]); ?></td><td><?php echo ($vo["time"]); ?></td><td style="width: 500px"><?php echo ($vo["content"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
<div id="footer">
    <div>
        网页练习—时间：2016-10-20    周起
    </div>
</div>
</body>
</html>