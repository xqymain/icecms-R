<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1" />
<link rel="shortcut icon" href="16X16.ico" type="image/x-icon"><link rel="shortcut icon" href="16X16.ico" type="image/x-icon">
<style type="text/css">
body{word-wrap:break-word;word-break:break-all;margin:0px;padding:2px 1px 2px 1px;background-color:#FFFFFF;color:#000000;}p{margin:0px;padding:2px 1px 2px 1px;}
.tp{margin:0px;background-color:#E6F3FF;}
a{text-decoration:none;color:#08C;}
form{margin:0px;padding:0px;}
img{max -width:100%;}
hr{height:1px;border:1px solid #BED8EA;border-left:none;border-right:none;}
textarea{width:270px;height:55px;overflow-y:visible;}
input[id=number]{
width:60px;
height:25px;
border-width: 1px;
border-style: solid;
color:#d7d7d7;
}
</style>

<title>登陆</title>

</head>
<body>
	
<div class="tp"><?php echo ($title); ?></div>
<fieldset>
<div class="tp">管理员登陆</div>
<form name="LoginForm" method="post" action="/admin.php/Home/Login/do_login.html" >
<p>
<label for="adminname" class="label">用户名:</label>
<input id="adminname" name="admin_name" type="text" class="input"  placeholder="昵称,手机号码,邮箱"  />
<p/>
<hr>
<p>
<label for="password" class="label">密　码:</label>
<input id="password" name="admin_password" type="password" class="input" placeholder="密码" />
<p/>
<hr>
<p>
<label for="password" class="label">验证码:</label>
<input id="code" name="code" type="text" class="input" placeholder="验证码" />
<img src='/admin.php/Home/Public/code'onclick="this.src=this.src+'?'+Math.random()"/>
<p/>
<p>
<input type="submit" name="submit" value="登陆" class="left" />
</p>
</form>
<a>忘记密码的话请自行到数据库中修改，MD5加密的</a>
</fieldset>

</body>
</html>