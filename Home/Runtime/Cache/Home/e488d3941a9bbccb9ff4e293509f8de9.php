<?php if (!defined('THINK_PATH')) exit();?><header id="header" class="header" style="background-color: #616161;">
</header>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="robots" content="noindex,follow" />
    <link rel='stylesheet' id='style-css'  href='/Public/webcss/style.css' type='text/css' media='all' />
    <script type='text/javascript' src='/Public/webjs/jquery.min.js'></script>
    <meta name=Copyright Content="本程序版权归YTech所有"/>
    <meta name="Author-Corporation" content="YTech,2017"/>
    <meta name="description" content="<?php echo ($description); ?>"/>
    <meta name="keywords" content="<?php echo ($key); ?>"/>
    
<title><?php echo ($user_name); ?>个人中心</title>

    <style type="text/css" id="custom-background-css">
	body.custom-background { background-image: url('/Public/webcss/bg.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
   </style>
   <script>
	window._deel = {name: 'YxomTech',url: '/', ajaxpager: '', commenton: 0, roll: [0,0]}
  </script>   
  <script type='text/javascript' src='/Public/webjs/global.js'></script>
  <script language ="javascript" type ="text/javascript">
		function atAdd(at){
			//alert("test");
			var content =document.getElementsByName("content")[0]
			//content.value+="@"+at+",";
			editor.html(editor.text()+'@'+at+",");
		}
		function urlAdd(){
			var content =document.getElementsByName("content")[0];
			content.value+="[url=http://链接地址]点击访问[/url]";
		}


		function imgAdd(){
			var content =document.getElementsByName("content")[0];
			content.value+="[img]http://图片地址[/img]";
		}


		function codeAdd(){
			var content =document.getElementsByName("content")[0];
			content.value+="[code]//请在这里输入代码[/code]";
		}
		</script>
</head>

<body class="archive category category-android-articles category-18 custom-background">
	<header id="header" class="header" style="background-color: #3838B7;">
        <div class="container-inner">
                <div align="center" class="g-logo">
                    <h1>
                        <span class="g-mono" style="font-family:楷体;">兖州之家</span>
                        <span class="g-bloger" style="font-family:楷体;">天行健，君子以自强不息</span>
                        </h1>
                </div>
        </div>
        <div id="toubuads"></div>
  
        <div id="nav-header" class="navbar" >
		<ul class="nav">
	 <li id="menu-item-71" class="menu-item menu-item-type-article_type menu-item-object-page menu-item-71">
        <a href="/">首页</a></li>
        <li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-13">
            <a href="/index.php/Home/Bbs/new_post">论坛板块</a>
            <ul class="sub-menu">
                <li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9">
                <a href="/index.php/Home/Bbs/board_list/id/1">杂谈茶楼</a></li>
                <li id="menu-item-10" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10">
                <a href="/index.php/Home/Bbs/board_list/id/5">IoT Python交流</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12">
                <a href="/index.php/Home/Bbs/board_list/id/2">Deep Learning交流</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12">
                <a href="/index.php/Home/Bbs/board_list/id/6">C/C++/JAVA交流</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12">
                <a href="/index.php/Home/Bbs/board_list/id/4">官方公告</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12">
                <a href="/index.php/Home/Bbs/board_list/id/3">BUG反馈</a></li>
        </ul>
        </li>

        <li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-13">
            <a href="/index.php/Home/Home">个人中心</a>
            <ul class="sub-menu">
            <li id="menu-item-16" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16">
            <a href="/index.php/Home/Home">个人中心</a></li>
            <li id="menu-item-16" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16">
            <a href="/index.php/Home/Home/change">修改资料</a></li>
            <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
            <a href="/index.php/Home/Home/zone/id/">我的空间</a></li>
            <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
            <a href="/index.php/Home/Bbs/user_post">我的帖子</a>  </li>
            </ul>
        </li>


        <li id="menu-item-6" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-6">
            <a href="">文章分享</a>
            <ul class="sub-menu">
                <li id="menu-item-22" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22">
                <a href="/index.php/Home/Article/board_list/id/1">互联网</a></li>
                <li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-7">
                <a href="/index.php/Home/Article/board_list/id/2">编程感悟</a></li>
                <li id="menu-item-11" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11">
                <a href="/index.php/Home/Article/board_list/id/3">WORLDS OF CODER</a></li>
            </ul>
            </li>

        <li id="menu-item-69" class="menu-item menu-item-type-article_type menu-item-object-page menu-item-69">
        <a href="/index.php/Home/Bbs/add">发帖</a></li>
        <li id="menu-item-71" class="menu-item menu-item-type-article_type menu-item-object-page menu-item-71">
        <a href="/index.php/Home/Article/add">投稿</a></li>

        <li id="menu-item-374" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-374">
                <a href="/index.php/Home/Bbs/new_post">最新帖子</a>
                <ul class="sub-menu">
                    <li id="menu-item-19" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19">
                    <a href="/index.php/Home/Bbs/new_post">最新帖子</a></li>
                </ul>
            </li>

            <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24">
            <a href="/index.php/Home/Message/receive/">我的信息</a>
            <ul class="sub-menu">
                <li id="menu-item-66" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66">
                <a href="/index.php/Home/Message/index">发送信息</a></li>
                <li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-65">
                <a href="/index.php/Home/Message/sended">我已发送</a></li>
                <li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70">
                <a href="/index.php/Home/Message/receive/">我已接收</a></li>
                <li id="menu-item-318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-318">
                <a href="/index.php/Home/Message/atreceive">被@消息</a></li>
            </ul>
        </li>



        <li id="menu-item-67" class="menu-item menu-item-type-article_type menu-item-object-page menu-item-67">
       	 <a href="/about">ABOUT US</a>
        </li>
	<li style="float:right;">
		<div class="toggle-search">
            <i class="fa fa-search">
            </i>
		</div>
        <div class="search-expand" style="display: none;">
            <div class="search-expand-inner">
                <form method="article" class="searchform" action="/index.php/Home/Bbs/search">
                    <div>
            <input type="ext" class="search" name="content" value='输入内容并回车';" onfocus="if(this.value=='输入内容并回车')this.value='';" value="输入内容并回车">
                    </div>
                </form>
            </div>
        </div>
	</li>
</ul>
</div>

</div>
</header>
<section class="container">
	<div class="title">
		<h2>
			最新帖子

	<div style="float:right;">
		<?php
 if(!isset($_COOKIE['user_sid'])){ echo '<i class="fa fa-power-off"></i> <a href="/index.php/Home/Login">Login</a>'; }else{ echo "欢迎来到兖州之家 V5.2"; } ?>
	</div> </h2>
    </div>
    <!-- body开始--!>
	
<div class="content-wrap">
	<div class="content">
		<header class="archive-header">
		个人资料
		</header>
		<ul class="user-titbox">
			<div align="left" class="open-message"><span class="right">
				<?php if($user_img == ''): ?><img class="image" src="/Public/Uploads/user_head/defalut.jpg" /> 
		<?php else: ?>
		<img class="image" src="/Public/Uploads/user_head/<?php echo ($user_img); ?>" /><?php endif; ?>
		</span></li></div >
		<a href="/index.php/Home/Home/change_user_head">修改头像</a>
<div align="left" class="open-message">	<li class="title_bbs"><b>ID</b><span class="right"><?php echo ($user_id); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	用户名:</b><span class="right"><?php echo ($user_name); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	邮箱:</b><span class="right"><?php echo ($user_email); ?>【该邮箱找回密码的时候使用】</span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	手机号码:</b><span class="right"><?php echo ($user_phone); ?>【不可修改】</span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	性别:</b><span class="right"><?php echo ($user_sex); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	积分:</b><span class="right"><?php echo ($user_integral); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	金币:</b><span class="right"><?php echo ($user_money); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	身份:</b><span class="right"><?php echo ($user_rank); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	回复总数:</b><span class="right"><?php echo ($user_respond_number); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	帖子总数:</b><span class="right"><?php echo ($user_theme_number); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	注册日期:</b><span class="right"><?php echo ($user_reg_date); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	个性签名:</b><span class="right"><?php echo ($user_character); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	上次登录ip:</b><span class="right"><?php echo ($user_login_last_ip); ?></span></li></div >
<div align="left" class="open-message">	<li class="title_bbs"><b>	上次登录时间:</b><span class="right"><?php echo ($user_last_login_time); ?></span></li></div >
</ul>
<a href="/index.php/Home/Home/change" class="action">修改资料【包括密码】</a><br>
<a href="/index.php/Home/Login/logout" class="action action-share bdsharebuttonbox">退出登陆</a>
</div>
</div>

<aside class="sidebar">
<div class="widget widget_calendar">
<div id="calendar_wrap">
		<table id="wp-calendar">
          
			<div class="title">
		<h2>
			在线工具
		</h2>
	</div>
	1.<a href=/tool/decode.php>编码解码器</a><hr />
    2.<a href=/tool/htmledit.php>HTML在线编辑</a><hr />
	3.<a href=/tool/http.php>HTTP浏览器请求查看</a><hr />
    4.<a href=/tool/mine-type.php>MINE-TYPE对照表</a><hr />
	5.<a href=/tool/viewhtml.php>源代码查看</a><hr />
    6.<a href=/tool/domaindecode.php>中文域名编码/解码</a><hr />
    7.<a href=/tool/baidu>无限注册百度账号</a><hr />
    8.<a href=/tool/tieba>查看贴吧用户的隐藏动态</a><hr />
    9.<a href="./Home/Tool/kugoumusic.html">酷狗音乐API</a><hr />

    <br />
  
	</table>
</div>
</div>

<div class="widget git_tag">
	<div class="title">
		<h2>
			<a class="btn" target="_blank" href="">论坛分类</a>论坛分类
		</h2>
	</div>
	<div class="git_tags">
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/1">杂谈茶楼</a>
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/5">Iot & Python交流</a>
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/2">Deep Learning交流</a>
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/6">C/C++/JAVA交流</a>
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/4">官方公告</a>
		<a title="" target="_blank" href="/index.php/Home/Bbs/board_list/id/3">BUG提交</a>
	</div>
	</div>
	<div class="widget widget_links">
		<div class="title">
			<h2>Friends Link</h2>
		</div>
		<ul class='xoxo blogroll'>
        <li><a href="http://icecms.cn/" rel="friend co-worker neighbor crush" target="_blank">ICECMS</a></li>
	<li><a href="http://artrix.tech/" rel="friend co-worker neighbor crush" target="_blank">Artrix</a></li>

		</ul>
	</div>


	<div class="widget widget_links">
		<div class="title">
			<h2>Thanks</h2>
		</div>
	<ul class='xoxo blogroll'>
		<li><a href="http://thinkphp.cn/" target="_blank">THINKPHP</a></li>
		<li><a href="http://www.w3cschool.cc/" target="_blank">W3CSCHOOL</a></li>
		<li><a href="http://htmlpurifier.org/" target="_blank">htmlpurifier</a></li>
		<li><a href="http://kindeditor.net/" target="_blank">kindeditor</a></li>
	</ul>
         </div>
	<div class="widget widget_links">
		<div class="title">
			<h2>Support Us</h2>
		</div>
	  <ul class='xoxo blogroll'>
		<li><a href="https://www.2345.com/?k45626210" target="_blank">》Click《</a></li>
		<li><a href="https://github.com/xqymain/icecms-R" target="_blank">Github</a></li>							     
	  </ul>
         </div>

<div class="widget git_comment">
	<div class="title">
		<h2>Team</h2>
</div>
<ul>
	<li><a target="_blank" href="">
		<img data-original="/Public/images/nohead.jpg" class="avatar avatar-72" height="50px" width="50px">
		<div class="muted">
			<i>YTech</i>
		起风了，惟有努力生存。
		</div>
           </a>
	</li>
</ul>
</div>
</aside>
</section>
<footer style="border-top: 1px solid ;background-image: url('/Public/webcss/footbg.jpg'); background-repeat: repeat;" class="footer">
<div class="footer-inner">
	<div class="footer-copyright" align="center">
           
		Copyright 2015-2017   YTech & ICECMS  | <a rel="nofollow" target="_blank" href="/about">ABOUT US</a> | <a rel="nofollow" target="_blank" href="/index.php/Home/Home/dark_home.html">DARK HOUSE</a> <br />  
		<span class="trackcode pull-right">Tell us 邮箱:201330010330@hnu.edu.cn</span></div></div>
</footer>

</body>
</html>