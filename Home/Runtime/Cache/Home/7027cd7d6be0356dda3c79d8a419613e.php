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

<title><?php echo ($word); ?>_ICECMS</title>

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

	
<div class="title"><?php echo ($word); ?></div>
<?php if(is_array($m_arr)): foreach($m_arr as $key=>$vo): ?><div class="content">歌手:<?php echo ($vo["singername"]); ?>||歌名:<?php echo ($vo["music_name"]); ?><br />
		<?php if($vo['mp3url'] != ''): ?>MP3格式下载地址:<br/ >
		<input  type="text" class="input" value="<?php echo ($vo["mp3url"]); ?>"  /><a href="<?php echo ($vo["mp3url"]); ?>">点击下载</a>
		<br/ ><?php endif; ?>
		<?php if($vo['m4aurl'] != ''): ?>M4A格式下载地址:<br/ >
		<input  type="text" class="input" value="<?php echo ($vo["m4aurl"]); ?>"  /><a href="<?php echo ($m4aurl); ?>">点击下载</a><?php endif; ?>
	</div>
	<hr><?php endforeach; endif; ?>
	<div class="title">当前是第<?php echo ($pages); ?>页(我也不知道有多少页)</div>
	<a href="/index.php/Home/Tool/searchkugoumusic/word/<?php echo ($word); ?>/pages/1">first page</a>
	<?php if($pages != 1): ?>|<a href="/index.php/Home/Tool/searchkugoumusic/word/<?php echo ($word); ?>/pages/<?php echo ($pages-1); ?>">last page</a><?php endif; ?>
	|<a href="/index.php/Home/Tool/searchkugoumusic/word/<?php echo ($word); ?>/pages/<?php echo ($pages+1); ?>">next page</a>

	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>