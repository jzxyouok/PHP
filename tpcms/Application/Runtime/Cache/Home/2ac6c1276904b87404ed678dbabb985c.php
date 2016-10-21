<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="screen" href="/tpblog/Public/style/style.css"  />
<link rel="shortcut icon" href="http://yispace.net/wp-content/themes/weiweiqi/img/favicon.ico" />
<script src="/tpblog/Public/style/jquery.min.js"></script> 
<script src="/tpblog/Public/style/post.js"></script>
<title>练习</title>
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
<body class="single single-post postid-42805 single-format-standard">
<div class="topbar">
	<div class="inner">
		<a class="logo">练习</a>
		<ul class="nav">
			<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($current == $vo['id']): ?>class='current-menu-item'<?php endif; ?> ><a href="/tpblog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<div class="wrapper">
	<div class="content">

<div class="meta">
	<h1 class="meta-tit"><?php echo ($arts["title"]); ?></h1>
	<p class="meta-info">发表：<a href="/tpblog/index.php"><?php echo ($catename); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-d",$arts["time"])); ?> &nbsp;&nbsp; </p>
</div>


<div>
<?php if($prevs): ?><strong>上一篇：</strong>
<a class="prev-post icon-right" href="/tpblog/index.php/Home/Article/index/id/<?php echo ($prevs["id"]); ?>">
<?php echo ($prevs["title"]); ?></a>
<?php else: ?>
<strong>上一篇：没有了</strong><?php endif; ?>
</div>

<div style="margin:10px 0;">
<?php if($nexts): ?><strong>下一篇：</strong>
<a class="next-post" href="/tpblog/index.php/Home/Article/index/id/<?php echo ($nexts["id"]); ?>">
<?php echo ($nexts["title"]); ?></a> 
<?php else: ?>
<strong>下一篇：没有了</strong><?php endif; ?>
</div>
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
		</div>		<div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
	<ul class='xoxo blogroll'>
	<?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
</div>
</div>
</div>

<div class="footer">
		<div style="text-align: center">
			<h1>网站练习</h1>
		</div>
	</div>
</div>
</body>
</html>