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

<title>投稿</title>
<style>
			form {
				margin: 0;
			}
			textarea {
				display: block;
			}
		</style>
		<link rel="stylesheet" href="/Public/editor/themes/default/default.css" />
		<script charset="utf-8" src="/Public/editor/kindeditor-min.js"></script>
		<script charset="utf-8" src="/Public/editor/lang/zh_CN.js"></script>
		<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', { 
					width : '100%',
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : true,
					items : [
					 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat',  '|', 'emoticons', 'image', 'link','insertfile','code','source']
				});
			});
		</script>
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-7116729301372758";
		/* 更多演示（728x90） */
		google_ad_slot = "5052271949";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>

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

	
<div class="bbs_line">
	<a href="/index.php/Home/Index/index">首页</a>>
	<a href=/index.php/Home/Article/index>文章</a>>
	<a href=/index.php/Home/Article/add>投稿</a>
</div>
<div class="bbs_head">文明投稿（需要管理员审核才能显示出来）</div>
	<div class="bbs_fl_line">
		<form name="LoginForm" action="/index.php/Home/Article/add_do.html"enctype="multipart/form-data" method="post">
			<p>
				<label  class="label">标题:</label>
				<input name="title" type="text" class="input" placeholder="标题"  />
			<p/>
			<p>
				<label class="label">内容:</label>
				<textarea name="content" id="content" style="width:700px;height:200px;visibility:hidden;">[code]//这里放代码[/code]</textarea>
			<p/>
			文章类型:<select name="board_id">
			<?php if(is_array($board_arr_)): $i = 0; $__LIST__ = $board_arr_;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["article_board_id"]); ?>"><?php echo ($vo["article_board_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<div class="we1">
				<input type="submit" name="submit" value="投稿" class="bbs_post"/>	
			</div>
		</form>
	<a >如果无法上传附件或者文件,请更改换浏览器再试</a><br />
	快捷方式:<a href="javascript:onclick=codeAdd(); return false">添加代码</a>|<a href="javascript:onclick=urlAdd(); return false">添加超链接</a>|<a href="javascript:onclick=imgAdd(); return false">添加图片链接</a>
	</div>

	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>