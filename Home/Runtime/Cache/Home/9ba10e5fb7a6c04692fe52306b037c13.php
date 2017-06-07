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

<title><?php echo ($title); ?></title>
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
		afterBlur: function () { this.sync(); },
		items : [
			 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat',  '|', 'emoticons', 'image', 'link','insertfile','code','source']
		});			
	});
		</script>
		<script type="text/javascript">
			/*
$(function (){
document.getElementById("submit").onclick=function (){ 
  $.ajax({
	  url:'/index.php/Home/Bbs/add_respond',
	  type:'POST',
	  dataType:'json',
	  data:{'content':$("#content").val(),'id':$("#post_id").val()},
	   })
	   .done(function (data){
		   $("#result").html(data.content);
		   if(json.status !=0){
			    location.reload();                                            
		     }
		  console.log("success");
	  })
	   .fail(function(data){
		    $("#result").html(data.content);
		   if(json.status !=0){
			    location.reload();                                            
		     }
		console.log("error");	
 	 })
  	 .always(function(){
		console.log("complete");
	 }); 
   }
  });*/
	</script>
	<script type="text/javascript">
		google_ad_client = "ca-pub-7116729301372758";
		google_ad_slot = "5052271949";
		google_ad_width = 728;
		google_ad_height = 90;
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
	<a href="/index.php/Home/Bbs/index">论坛</a>>
	<a href=/index.php/Home/Bbs/board_list/id/<?php echo ($board_id); ?>><?php echo ($board); ?></a>>
	<a href="/index.php/Home/Bbs/add">发帖</a>
</div>
<div class="bbs_head">标题：<?php echo ($title); ?> 
	<span class="right"><?php echo ($hot); ?>阅</span>
</div>
<div class="bbs_view"><?php echo ($content); ?></div>
<div class="bbs_view_u">
	<b class="right"><?php echo ($date); ?>
		<br/>
		<div class="bshare-custom">分享:<div class="bsPromo bsPromo2"></div><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
	
	</b>
	<br/>
	<?php if($my_id == $user_id): ?><a href="/index.php/Home/Bbs/change_post/id/<?php echo ($post_id); ?>">修改/移动帖子</a><?php endif; ?>
</div>



<div class="bbs_user">
	楼主:	<?php if($user_img == ''): ?><img class="image" src="/Public/Uploads/user_head/defalut.jpg" /> 
		<?php else: ?>
		<img class="image" src="/Public/Uploads/user_head/<?php echo ($user_img); ?>" /><?php endif; ?>
		<a href=/index.php/Home/Home/zone/id/<?php echo ($user_id); ?>.html><?php echo ($user_name); ?></a>ID:<?php echo ($user_id); ?>//<a href="javascript:onclick=atAdd('<?php echo ($user_name); ?>'); return false">@Ta</a><br>
	身份:<?php echo ($user_rank); ?><br>
	签名:<?php echo ($user_character); ?><br>
	<a href=/index.php/Home/message/index/id/<?php echo ($user_id); ?>.html>给TA发送消息</a>
</div>



<div class="bbs_ping_line" >
	<a href=/index.php/Home/Bbs/respond_list/id/<?php echo ($post_id); ?>.html>【回复列表】【<?php echo ($count); ?>条回复】</a>
</div>
<?php if(is_array($respond_arr)): $i = 0; $__LIST__ = $respond_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 5 );++$i; if($mod%2 != 0): ?><div class="bbs_ping_title">
	<?php else: ?>
		<div class="bbs_ping_title_two"><?php endif; ?>
	<?php echo ($count-$mod); ?>楼:<a href=/index.php/Home/Home/zone/id/<?php echo ($vo["respond_user_id"]); ?>.html><span style="color:#FFABAB"><?php echo ($vo["respond_user_name"]); ?></span></a>//(ID:<?php echo ($vo["respond_user_id"]); ?>):</span><?php echo ubb($vo["respond_content"]);?><span class="right"><?php echo ($vo["respond_time"]); ?><a href="javascript:onclick=atAdd('<?php echo ($vo["respond_user_name"]); ?>'); return false">@Ta</a>
</span></div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="bbs_ping_line"><a href=/index.php/Home/Bbs/respond_list/id/<?php echo ($post_id); ?>.html>【查看更多回复】</a></div>





<div class="bbs_su">
	<div id="result"></div>
<?php if($status != 0): ?><form method='post' action="<?php echo U('add_respond');?>">
	<textarea name="content" id="content" type="text" value="" style="width:100%;height:200px;visibility:hidden;"></textarea>
	<input type="hidden" name="id" id="post_id"value="<?php echo ($post_id); ?>" class="left" />
	<input type="submit" name="submit" id="submit" class="button white" value="回复">
	</form >
	<a >如果无法上传附件或者文件,请更改换浏览器再试</a><br />
	快捷方式:<a href="javascript:onclick=codeAdd(); return false">添加代码</a>|<a href="javascript:onclick=urlAdd(); return false">添加超链接</a>|<a href="javascript:onclick=imgAdd(); return false">添加图片链接</a>
<?php else: ?>
	管理员已经锁定此贴，禁止回复<?php endif; ?>
</div>

	<div class="foot"><a href="/index.php/Home/Index/index">首页</a>&nbsp;<a href="/index.php/Home/Bbs/index">论坛</a>&nbsp;<a href="/index.php/Home/Article/index">文章</a>&nbsp;<a href="/index.php/Home/Bbs/add">发帖</a>&nbsp;<a href="/index.php/Home/Article/add">投稿</a>&nbsp;<a href="/index.php/Home/Home/dark_home">小黑屋</a>
		<br />Copyright 2017 Recreate |<a href="http://szerver.szhome.win/about"> ABOUT US</a>

</div>
</body>
</html>