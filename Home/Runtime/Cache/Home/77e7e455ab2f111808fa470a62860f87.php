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

<title>登陆</title>
	<script>
	$(function(){
         var ajaxUrl = Document.URL;
	     document.getElementById("user_name").onblur=function(){ 
             $.post('/index.php/Home/Login/checkuser',{'user_name':$("#user_name").val()},function(json){
		     if(json.status == 1){
			     $("#result").html("<img src=/Public/images/is_ok.png>");
		     }else{
		    	 $("#result").html("用户名不存在");
              	      }
		 });
	 }
     })
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

	
<div class="top"><?php echo ($title); ?></div>
<form name="LoginForm" method="post" action="/index.php/Home/Login/do_login.html" >
<div class="we">用户名:
<input id="user_name" name="user_name" type="text" class="input"  placeholder="昵称,ID"  /> <a id="result"></a>
</div>

<div class="we">密　码:
<input id="password" name="user_password" type="password" class="input" placeholder="密码" />
</div>
<div class="we">验证码:
<input id="code" name="code" type="text" class="input" placeholder="验证码" />
<br>
<img src='/index.php/Home/Public/code'onclick="this.src=this.src+'?'+Math.random()"/>
</div>
<div class="we">
通过什么登陆:<input id="m" name="m" type="radio" class="input" value="name"  checked=checked/>呢称
<input id="m" name="m" type="radio" class="input" value="id" />ID
</div>
<div class="we1"><input type="submit" name="submit" value="登陆"  class="bbs_post"/></div>
<div class="we">没有帐号？马上
	<a href="/index.php/Home/Login/reg.html">注册</a>OR<a href=/index.php/Home/Home/password>忘记密码</a></div>
</form>

	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>