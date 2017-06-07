<?php
		
/*
@获取用户的ip//如果是加密的话，此方法则不行
*/
		function getip() {    
// $ip = $_server['remote_addr'];     
 //if (!empty($_server['http_client_ip'])) {        
 // $ip = $_server['http_client_ip'];    
 //} elseif (!empty($_server['http_x_forwarded_for'])) {        
 // $ip = $_server['http_x_forwarded_for'];    
 //}  
 $ip=getenv('REMOTE_ADDR');  
  return $ip;
}
		
		
		
		
/**
 * 通过IP获取城市
 * @param string $ip ip地址
 * @return string 【城市名称】
 */
function get_ip_city($ip)
{
    $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=';
    @$city = file_get_contents($url . $ip);
    $city = str_replace(array('var remote_ip_info = ', '};'), array('', '}'), $city);
    $city = json_decode($city, true);
    if ($city['city']) {
        $location = $city['city'];
    } else {
        $location = $city['province'];
    }
	if($location){
		return $location;
	}else{
		return;
	}
}


/**
 * 数据安全处理函数
 * @param string $str 待过滤字符串
 * @return 
 */	
function get_safe_str($str){
	$str=htmlspecialchars_decode($str,ENT_QUOTES);
	$str=str_replace(array('<','>','\'','"','%','/*'),array('《','》','‘','”','',''),$str);
	$str=mysql_escape_string($str);
	return $str;
}



/**
  * 判断是否是手机
*
* @return  boolean
*/
function  isMobile() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	 $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
	  $is_mobile = false;
	foreach ($mobile_agents as $device) {
		if (stristr($user_agent, $device)) {
			$is_mobile = true;
			break;
		}
	}
	return $is_mobile;
}


/**
 * 截取字符串
 * @param string $str 待截取字符串
 * @param string $start 开始位置
 * @param string $len 截取长长度
 * @param string $add 末尾是否添加字符 
 * @return string 
 */
function sub_str($str,$start=0,$len,$add=0){
	if($add){
		if(mb_strlen($str,'UTF8')>$len){
			return mb_substr($str,$start,$len,'UTF8').$add;
		}else{
			return mb_substr($str,$start,$len,'UTF8');
		}
	}else{
		return mb_substr($str,$start,$len,'UTF8');
	}
}

//传入文件路径。获取文件大小（字节）
function getsize($file_url)   {
	//$s=stat($file_url);
	// $size = $s["size"];
	// 获取远程文件大小
    $f=file_get_contents($file_url);
    $size=strlen($f);
    return $size;
    }


//把字节单位转换层其他单位
function size($bytesize){ //当$bytesize 大于是1024字节时，开始循环，当循环到第4次时跳出；
        $i=0;
        while(abs($bytesize)>=1024){        
        $bytesize=$bytesize/1024;
        $i++;
        if($i==4)break;
        }
        //将Bytes,KB,MB,GB,TB定义成一维数组；
        $units= array("B","KB","MB","GB","TB");
        $newsize=round($bytesize,2);
        return $newsize.$units[$i];

}



//找回密码
include_once("smtp.class.php");
function find_password($email,$token,$username){  
    $smtpserver = "smtp.mxhichina.com"; //SMTP服务器，如：smtp.163.com 
    $smtpserverport = 25; //SMTP服务器端口，一般为25 
    $smtpusermail = "postmaster@icecms.cn"; //SMTP服务器的用户邮箱，如xxx@163.com 
    $smtpuser = "postmaster@icecms.cn"; //SMTP服务器的用户帐号xxx@163.com 
    $smtppass = "123456"; //SMTP服务器的用户密码 
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //实例化邮件类 
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML 
    $smtpemailto = $email; //接收邮件方，本例为注册用户的Email 
    $smtpemailfrom = $smtpusermail; //发送邮件方，如xxx@163.com 
    $emailsubject = "ICECMS用户帐号密码找回";//邮件标题 
    //邮件主体内容 
     $emailbody ="亲爱的$user_name<br/>感谢您对我站（ICECMS.cn）的支持<br/>请点击链接重置你的密码。<br/> 
	  <a href=http://".$_SERVER['SERVER_NAME']."/index.php/Home/Home/find_pwdo/token/$token target=_blank> http://".$_SERVER['SERVER_NAME']."/index.php/Home/Home/find_pwdo/token/$token</a><br/> 如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。"; 

    //发送邮件 
   $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype); 
    if($rs==1){ 
           return 1; 
    }else{ 
    	  return 0;		
    } 
} 


//利用HTMLPurifier过滤不安全字符
	function xss_clean($str){
		vendor('library.HTMLPurifier#auto');
		$config = HTMLPurifier_Config::createDefault();   //创建默认配置
		$purifier = new HTMLPurifier($config);   //实例化 并传入默认配置 ($config为空也可)
		$str = $purifier->purify($str); //开始过滤 返回过滤后的字符串
		return $str;
	}

require_once 'ubb_fun.php';
?>
