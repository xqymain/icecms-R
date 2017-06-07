<?php
function ubb($content)
{
	//代码高亮Ubb
	require_once 'code_fun.php';
	$tihuan=array(

		//与代码高亮类有冲突//所以替换两次UBB
	//@替换
	'(@|＠)([\\x{4e00}-\\x{9fa5}A-Za-z0-9_\\-]{1,})(\x20|&nbsp;|<|\xC2\xA0|\r|\n|\x03|\t|,|\\?|\\!|:|;|，|。|？|！|：|；|、|…|$)',	'<a href=javascript:onclick=atAdd("\\2"); return false;>\\1</a><a href=../../../Home/zone/name/\\2>\\2</a>\\3',
//	'(#|＃)([\\x{4e00}-\\x{9fa5}A-Za-z0-9_\\-]{1,})(\x20|&nbsp;|<|\xC2\xA0|\r|\n|\x03|\t|,|\\?|\\!|:|;|，|。|？|！|：|；|、|…|$)','<a href=javascript:onclick=atAdd("\\2"); return false;>\\1</a><a href=../../../Home/zone/name/\\2>\\2</a>\\3',
	
		'\[br\]','<br/>',
'\[网址=(.*)\](.*)\[/网址\]','<a href="\\1">\\2</a>',
'\[url=(.*)\](.*)\[/url\]','<a href="\\1">\\2</a>',
'\[br\]','<br/>',
'\[hr\]','<hr/>',
'\[tab\]','&nbsp;&nbsp;&nbsp;&nbsp;',
'\[url\](.*)\[/url\]','<a href="\\1">\\1</a>',
'\[img\](.*)\[/img\]','<img src="\\1"/>',
'\[图片=(.*)\](.*)?\[/图片\]','<img src="\\1" alt="\\2"/>',
'\[img=(.*)\](.*)?\[/img\]','<img src="\\1" alt="\\2"/>',
'\[([bip]|(center)|(left)|(right))\]','<\\1>',
'\[/([bip]|(center)|(left)|(right))\]','</\\1>',
'\[form=([a-zA-Z0-9]*),(.*)\]','<form accept-charset="utf-8" action="\\2" method="\\1">',
'\[/form\]','</form>',
//表情替换

'\[#委屈\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/1a480a4051102c3b.jpg>',
'\[#冷\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/1ce12e9e772f7db7.jpg"/>',
'\[#笑眼\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-2c316463050231db.jpg"/>',
'\[#汗\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/2dc557cb843f63cb.jpg>',
'\[#睡觉\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-3ad907655c7a0bc4.jpg>',
'\[#酷\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/5a766c37942f7023.jpg>',
'\[#吐舌\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/5c66d3fadf5d4d61.jpg>',
'\[#惊讶\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-5e578cd44fd7b9fb.jpg>',
'\[#阴险\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-6ade9f7a9794f8a9.jpg>',
'\[#惊哭\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-7c37a677f41ca9f0.jpg>',
'\[#咦\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/7dcc396a1cbad836.jpg>',
'\[#喷\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/11b526d109bb01e2.jpg>',
'\[#泪\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/23ab08039cba2f6c.jpg>',
'\[#啊\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/35fe58467cf5ebfe.jpg>',
'\[#不高兴\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/77bc568df69705b1.jpg>',
'\[#怒\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-118c8668f7f35ab0.jpg>',
'\[#疑问\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/138d85adbd85efd9.jpg>',
'\[#太开心\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/282b4f1bd3b6a0ac.jpg>',
'\[#花心\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/283cd8ffdd3050d1.jpg>',
'\[#勉强\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/553c9448ee898ad5.jpg>',
'\[#开心\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/976d0d256bfadc.jpg>',
'\[#呵呵\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/5255e9022f79e0df.jpg>',
'\[#滑稽\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/7501ff46eda30418.jpg>',
'\[#真棒\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-7748fcb4062a525e.jpg>',
'\[#狂汗\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/9291e52eaa0cd75.jpg>',
'\[#黑线\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-21269bca95e81e04.jpg>',
'\[#乖\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/26342bb6a0ed95ef.jpg>',
'\[#钱\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/50200d27e9acc17a.jpg>',
'\[#鄙视\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-330014af9c6f1634.jpg>',
'\[#呼~\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/1934589ee93c036f.jpg>',
'\[#吐\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/a8a11ea16fc48dc.jpg>',
'\[#生气\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/-cf1846b763f03bc.jpg>',
'\[#哈哈\]','<img src=http://'.$_SERVER['SERVER_NAME'].'/Public/face/ebee24e1bf8a13e.jpg>',




'\[submit=([a-zA-Z0-9]*),[0-9\*#]\](.*)\[/submit\]','<input type="submit" name="\\1" value="\\3" accesskey="\\2"/>',
'\[submit,[0-9\*#]\](.*)\[/submit\]','<input type="submit" value="\\2" accesskey="\\1"/>',
'\[input=([a-zA-Z0-9]*),([0-9]*)\](.*)?\[/input\]','<input type="text" name="\\1" value="\\3" size="\\2"/>',
'\[input=([a-zA-Z0-9]*)\](.*)?\[/input\]','<input type="text" name="\\1" value="\\2"/>',
'\[password=([a-zA-Z0-9]*)\](.*)?\[/password\]','<input type="password" name="\\1" value="\\2"/>',
'\[submit=([a-zA-Z0-9]*)\](.*)?\[/submit\]','<input type="submit" name="\\1" value="\\2"/>',
'\[submit\](.*)?\[/submit\]','<input type="submit" value="\\1"/>',
'\[sel(ect)?=([a-zA-Z0-9]*)\]','<select name="\\2">',
'\[/sel(ect)?\]','</select>',
'\[op(tion)?\](.*)?\[/op(tion)?\]','<option value="\\2">\\2</option>',
'\[op(tion)?=(.*)?\](.*)?\[/op(tion)?\]','<option value="\\2">\\3</option>',
'\[read=(.*)\](.*)\[/read\]','<a href="read.php?id=\\1">\\2</a>',
'\[time\]','<?php echo date("m-d H:i"); ?>',
'\[h(idden)?=([a-zA-Z0-9]*)\](.*)?\[/h(idden)?\]','<input type="hidden" name="\\2" value="\\3"/>',
'\[text=([a-zA-Z0-9_]+)\]','<textarea name="\\1">',
'\[/text\]','</textarea>',
'\[text=([0-9]+),([0-9]+),([a-zA-Z0-9_]+)\]','<textarea name="\\3" cols="\\1" rows="\\2">',
/*'\[ad\]','<?php include "ad.php"; ?>',*/
'\[ex\]',chr(94),
'\[or\]',chr(124),
'\[chr([0-9]+)\]','<?php echo chr("\\1"); ?>',
'\[tp\]','<div class="tp">',
'\[/tp\]','</div>',
'<p>([
]+)?</p>','',
);
$all=count($tihuan);
	for($a=0;$a<$all;$a=$a+2){
		$b=$a+1;
		$content=preg_replace('!'.$tihuan[$a].'!uisU',$tihuan[$b],$content);
	}


	$content= preg_replace_callback('#\[code\](.*)\[/code\]#sU',"code",$content);//其中code是回调函数
	$tihuan=array(
	'\r','<br/>',
);


	$all=count($tihuan);
	for($a=0;$a<$all;$a=$a+2){
		$b=$a+1;
		$content=preg_replace('!'.$tihuan[$a].'!uisU',$tihuan[$b],$content);
	}


	return $content;
}
?>
