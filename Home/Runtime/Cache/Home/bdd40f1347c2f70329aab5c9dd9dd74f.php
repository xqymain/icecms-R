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

	<title><?php echo ($user_name); ?>个人中心</title>
	
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

	
	<div class="nav"><a href=/index.php/Home/Message/index>信箱</a><a href=/index.php/Home/Home/zone/id/<?php echo ($user_id); ?>>我的空间</a><a href=/index.php/Home/Home/change_zone/>排版</a><a href=/index.php/Home/Bbs/user_post/>我的帖子</a></div>
		<a href=/index.php/Home/Message/index/id/<?php echo ($user_id); ?>>发信息给TA</a>
	<div class="top"></div>
	<div class="title_bbs">
		<ul class="user-titbox">
	<li class="title_bbs">
			<?php if($user_img == ''): ?><img class="image" src="/Public/Uploads/user_head/defalut.jpg" /> 
			<?php else: ?>
				<img class="image" src="/Public/Uploads/user_head/<?php echo ($user_img); ?>" /><?php endif; ?>
		</li>
<li class="title_bbs"><b>	ID:<?php echo ($user_id); ?><hr>
<li class="title_bbs"><b>	用户名:<?php echo ($user_name); ?></span></li>
<li class="title_bbs"><b>	邮箱:<?php echo ($user_email); ?></span></li>
<li class="title_bbs"><b>	性别:<?php echo ($user_sex); ?></span></li>
<li class="title_bbs"><b>	积分:<?php echo ($user_integral); ?></span></li>
<li class="title_bbs"><b>	金币:<?php echo ($user_money); ?></span></li>
<li class="title_bbs"><b>	身份:<?php echo ($user_rank); ?></span></li>
<li class="title_bbs"><b>	回复总数:<?php echo ($user_respond_number); ?></span></li>
<li class="title_bbs"><b>	帖子总数:<?php echo ($user_theme_number); ?></span></li>
<li class="title_bbs"><b>	注册日期:<?php echo ($user_reg_date); ?></span></li>
<li class="title_bbs"><b>	个性签名:<?php echo ($user_character); ?></span></li>
</ul>
	</div>
	
	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>