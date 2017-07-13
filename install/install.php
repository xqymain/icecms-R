<?php
header('content-type:text/html;charset=utf-8');
/*****************************
*数据库连接
*****************************/
$file="install.lock";
if(file_exists($file)){
	exit("请勿重复安装，如需重新安装,请把/install/install.lock文件删除");
}
if(isset($_POST['data'])){
	$conn = @mysqli_connect($_POST['ip'],$_POST['user_name'],$_POST['pwd']);
	if (!$conn){
		die("连接数据库失败：" . mysqli_error());
	}
	mysqli_select_db($_POST['db'], $conn);
	mysqli_query("SET NAMES utf8");
	mysqli_query("set character_set_client=utf8"); 
	mysqli_query("set character_set_results=utf8");
	$sql=file_get_contents("sql.sql"); //把SQL语句以字符串读入$sql 
	$a=explode("\r\n",$sql); //用explode()函数把$sql字符串以“;”分割为数组 
	foreach($a as $b){ //遍历数组 
		mysqli_query($b); //执行SQL语句 
	}
	 $cfg_dbhost=$ip=$_POST['ip'];
	 $cfg_dbuser=$user_name=$_POST['user_name'];
 	 $cfg_dbpwd=$pwd=$_POST['pwd'];
	 $cfg_dbname=$db=$_POST['db'];
	$file="<?php
return array(
	//'配置项'=>'配置值'
	// 添加数据库配置信息
 'DB_TYPE'   => 'mysql', // 数据库类型
 'DB_HOST'   => '$ip', // 服务器地址
 'DB_NAME'   => '$db', // 数据库名
 'DB_USER'   => '$user_name', // 用户名
 'DB_PWD'    => '$pwd', // 密码
 'DB_PORT'   => 3306, // 端口
 'DB_PREFIX' => 'icebbs_', // 数据库表前缀
 'DEFAULT_TIMEZONE' => 'PRC', // 默认时区
'TMPL_L_DELIM'=>'<{', //修改左定界符
'TMPL_R_DELIM'=>'}>', //修改右定界符
//'SHOW_PAGE_TRACE'=>true,//开启页面Trace
);
";
$file1='<?php
$cfg_dbhost="'.$cfg_dbhost.'";
$cfg_dbuser="'.$cfg_dbuser.'";
$cfg_dbpwd="'.$cfg_dbpwd.'";
$cfg_dbname="'.$cfg_dbname.'";
$conn = @mysqli_connect("'.$cfg_dbhost.'","'.$cfg_dbuser.'","'.$cfg_dbpwd.'");
	if (!$conn){
		die("连接数据库失败：" . mysqli_error());
	}
	mysqli_select_db( "'.$cfg_dbname.'", $conn);
	mysqli_query("SET NAMES utf8");
	mysqli_query("set character_set_client=utf8"); 
	mysqli_query("set character_set_results=utf8");
?>';
	$wri=fopen("../config.php","w");
	fwrite($wri,$file);
	fclose($wri);
	$wri=fopen("install.lock","w");
	fwrite($wri,$file);
	fclose($wri);
	$wri=fopen("../conn.php","w");
	fwrite($wri,$file1);
	fclose($wri);
	echo '安装成功,有时间的话请把根目录下的install文件夹删除<br>
		<a href=/admin.php>后台管理员登录</a>(账号admin密码12345678)<br/>
		为了安全性，后台管理和网站前台是独立的，所以后台的账号不能直接登录网站（即上面的账号不能登录网站，只能管理后台）<br/>
		<a href=/index.php>进入首页</a>(有一个账号‘管理员’密码12345678)';
}else{
	echo '请正确填写';
}
?>
