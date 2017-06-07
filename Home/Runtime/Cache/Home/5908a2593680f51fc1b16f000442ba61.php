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

<title>首页_<?php echo ($title); ?></title>
<meta name="description" content="<?php echo ($description); ?>"/>
<meta name="keywords" content="<?php echo ($key); ?>"/>

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

	
<div id="mess"><?php echo ($msg); ?></div>
<div id="mess"><?php echo ($atmsg); ?></div>
<header class="head">
<?php if($user_name == ''): ?><a href="/index.php/Home/Login"><span>登录</span></a> <a href="/index.php/Home/Login/reg"><span>注册</span></a><?php endif; ?>
</header>
<div class="top">
<img src="/Public/LOGO.png" alt="logo">
</div>

<div class="nav"><a href="/index.php/Home/Home">资料</a><a href="/index.php/Home/Bbs/">论坛</a> <a href="/index.php/Home/Article">文章</a><a href="/index.php/Home/Bbs/add">发帖</a><a href="/index.php/Home/Article/add">投稿</a></div>



<div class="title"><a href=/index.php/Home/Bbs/board_list/id/4>TOP</a></div>
<?php if(is_array($post_list_4)): $i = 0; $__LIST__ = $post_list_4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs">	<a href=/index.php/Home/Bbs/read/id/<?php echo ($vo["post_id"]); ?>.html><?php echo ($vo["post_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>




<div class="title2">动态帖子|<a href=/index.php/Home/Bbs/new_post>查看最新帖子</a><a href=/index.php/Home/Bbs/add><span class="right">发帖</span></a></div>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs"><?php echo ($i); ?>.<a href=/index.php/Home/bbs/read/id/<?php echo ($vo["post_id"]); ?>.html><b><?php echo ($vo["post_title"]); ?></b></a>
<br>
	<div class="bbs_fl_title">
		<?php
 echo htmlspecialchars(sub_str($vo['post_content'],0,60,0)).'....'; ?>
		</div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>


<div class="title"><a href=/index.php/Home/Bbs/board_list/id/3>ICECMS BUG提交</a></div>
<?php if(is_array($post_list_3)): $i = 0; $__LIST__ = $post_list_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs">	<a href=/index.php/Home/bbs/read/id/<?php echo ($vo["post_id"]); ?>.html><?php echo ($vo["post_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>


<div class="title"><a href="/index.php/Home/Article">推荐文章</a><span class="right"><a href="/index.php/Home/Article/add">投稿</a></span></div>
<?php if(is_array($a_list)): $i = 0; $__LIST__ = $a_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 8 );++$i;?><div class="title_bbs"><a href=/index.php/Home/Article/read/id/<?php echo ($vo["article_id"]); ?>.html><?php echo ($vo["article_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="title">小小工具</div>
<div class="title_bbs">
	<a href=/index.php/Home/Tool/kugoumusic>音乐搜索（直链下载）</a>
</div>
<?php echo ($website_foot); ?>

	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>