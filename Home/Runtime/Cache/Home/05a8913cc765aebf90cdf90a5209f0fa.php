<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta name="baidu_union_verify" content="5add5fe9e85ff6ebf295bddad133a3bd">
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
<meta http-equiv="Content-Language" content="zh-CN"/>
<meta name=Copyright Content="本程序版权归Recreate所有"/> 
<meta name="Author-Corporation" content="Recreate,2015"/>
<meta name="description" content="<?php echo ($description); ?>"/>
<meta name="keywords" content="<?php echo ($key); ?>"/>
<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<meta http-equiv="Cache-Control" content="must-revalidate,no-cache"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="/Public/css/home.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/bbs.css"/>
<link rel="stylesheet" type="text/css" href="/Public/css/box.css"/>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/box.js"></script>

<title>文章</title>

</head>
<script language ="javascript" type ="text/javascript">
function atAdd(at){
	var content =document.getElementsByName("content")[0]
		//	content.value+="@"+at+",";
		editor.html(editor.text()+'@'+at+",");
}


function urlAdd(){
	var content =document.getElementsByName("content")[0];
	//content.value+="[url=http://链接地址]点击访问[/url]";
	editor.html(editor.text()+"[url=http://链接地址]点击访问[/url]");
}


function imgAdd(){
	var content =document.getElementsByName("content")[0];
	//content.value+="[img]http://图片地址[/img]";
	editor.html(editor.text()+"[img]http://图片地址[/img]");

}


function codeAdd(){
	var content =document.getElementsByName("content")[0];
	//content.value+="[code]//请在这里输入代码[/code]";
	editor.html(editor.text()+"[code]//请在这里输入代码[/code]");
}



</script>
<style>
input[id=number]{
width:60px;
height:25px;
border-width: 1px;
border-style: solid;
color:#d7d7d7;
}</style>
<body>

	
<div class="bbs_line"><a href="/index.php/Home/Index/index">首页</a>><a href=/index.php/Home/Article/index>文章</a>><a href=/index.php/Home/Article/add>投稿</a></div>
<form action="<?php echo U('Article/search');?>" method="post">
	<input type="text" name="content"  placeholder="搜索些什么呢">
	<input name="sort" type="radio" value="title" checked=checked/>标题
	<input name="sort" type="radio" value="user" />用户
	<input type="submit" name="submit" value="搜索">
</form>



<div class="bbs_fl_line">文章列表</div>

<div class="bbs_fl_title"><a href=/index.php/Home/Article/board_list/id/1>互联网</a><span><?php echo ($count_1); ?></span></div>
	<?php if(is_array($article_list_1)): $i = 0; $__LIST__ = $article_list_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs">
		<a href=/index.php/Home/Article/read/id/<?php echo ($vo["article_id"]); ?>.html><?php echo ($vo["article_title"]); ?></a>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>


<div class="bbs_fl_title"><a href=/index.php/Home/Article/board_list/id/2>编程感悟</a><span><?php echo ($count_2); ?></span></div>
	<?php if(is_array($article_list_2)): $i = 0; $__LIST__ = $article_list_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs">
		<a href=/index.php/Home/Article/read/id/<?php echo ($vo["article_id"]); ?>.html><?php echo ($vo["article_title"]); ?></a>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>

<div class="bbs_fl_title"><a href=/index.php/Home/Article/board_list/id/3>其他</a><span><?php echo ($count_3); ?></span></div>
	<?php if(is_array($article_list_3)): $i = 0; $__LIST__ = $article_list_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs">
		<a href=/index.php/Home/Article/read/id/<?php echo ($vo["article_id"]); ?>.html><?php echo ($vo["article_title"]); ?></a>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>


	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>