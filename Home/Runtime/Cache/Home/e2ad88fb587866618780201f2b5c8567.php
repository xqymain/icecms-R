<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Yxom &rsaquo; 注册</title>
		<link rel='stylesheet' id='buttons-css'  href='/Public/css/buttons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='/Public/css/dashicons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='/Public/css/login.min.css' type='text/css' media='all' />
<style type="text/css">body{height:900px !important;z-index:9999;background-attachment:fixed;width:100%;height:100%;background-image:url(http://cn.bing.com/az/hprichbg/rb/FukuokaTower_ZH-CN10994498941_1366x768.jpg);z-index:9999;background-attachment:fixed;-moz-background-size: 100% 100%;-o-background-size: 100% 100%;-webkit-background-size: 100% 100%;background-size: 100% 100%;-moz-border-image: url(http://cn.bing.com/az/hprichbg/rb/FukuokaTower_ZH-CN10994498941_1366x768.jpg) 0;background-attachment:fixed;background-repeat:no-repeat\9;background-image:none\9;}h1 a { background-image:url(http://www.bingduba.com/favicon.ico)!important;width:32px;height:32px;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;}#registerform,#loginform {background-color:rgba(251,251,251,0.3)!important;}.login label,a{color:#000!important;}</style><meta name='robots' content='noindex,follow' />
<script src="/Public/js/jquery.js"></script>
	<script>
	$(function(){
         var ajaxUrl = Document.URL;
	     document.getElementById("user_name").onblur=function(){ 
             $.post('/index.php/Home/Login/checkuser',{'user_name':$("#user_name").val()},function(json){
		     if(json.status == 1){
			     	 $("#result1").html("用户名已经存在");
		     }else{
		   		 $("#result1").html("<img src=/Public/images/is_ok.png>");
              	      }
	      });
      }

       document.getElementById("user_phone").onblur=function(){ 
	       $.post('/index.php/Home/Login/checkphone',{'user_phone':$("#user_phone").val()},function(json){
		     if(json.status == 1){
			 $("#result2").html("手机号码已经存在");
		     }else{
		      $("#result2").html("<img src=/Public/images/is_ok.png>");
              	      }
	      });
      }

     })
     </script>
	</head>
	<body class="login login-action-login wp-core-ui  locale-zh-cn">
	<div id="login">
		<h1><a href="/index.php/Home" title="ICECMS" tabindex="-1">ICECMS</a></h1>
	
<form name="loginform" id="loginform" action="/index.php/Home/Login/do_reg.html" method="post">
	<p>
		<label for="user_login">用户名<br />
			<input id="user_name" name="user_name" type="text" class="input"  placeholder="昵称"  /><a id="result1"> </a></label>
	</p>
	<p>
		<label for="user_pass">手机号码<br />
		<input id="user_phone" name="user_phone" type="text" class="input"  placeholder="手机号码"  /><a id="result2"></label>
	</p>

	<p>
		<label for="user_pass">密码<br />
			<input id="password" name="user_password" type="password" class="input" placeholder="密码" /></label>
	</p>

		<p>
		<label for="user_pass">验证码<br />
		<input id="code" name="code" type="text" class="input" placeholder="验证码" /></label>
	</p>
	<p class="forgetmenot">
	<label for="rememberme">
		<img src='/index.php/Home/Public/code'onclick="this.src=this.src+'?'+Math.random()"/>
	</label>
	</p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="注册" />
	</p>
</form>

<p id="nav">
	<a href="/index.php/Home/Home/password" title="找回密码">忘记密码？</a>
</p>
<p id="nav">
	<a href="/index.php/Home/Login/index.html" title="登陆">已有帐号？马上登陆</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/index.php/Home/" title="不知道自己在哪？">&larr; 回到Yxom</a></p>
	
	</div>
<div class="text">①请填写正确信息，，注册后完善邮箱，可以用来找回密码<br/>②请规范昵称,长度应在2到12位字符之间<br/>③密码应该是字母或者数字的组合，长度大于6位数</div>
	
		<div class="clear"></div>
	</body>
	</html>