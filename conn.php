<?php
$cfg_dbhost="LOCAL";
$cfg_dbuser="USERNAME";
$cfg_dbpwd="PASSWORD";
$cfg_dbname="DATANEME";
$conn = @mysqli_connect($cfg_dbhost, $cfg_dbuser, $cfg_dbpwd);
	if (!$conn){
		die("连接数据库失败：" . mysqli_error());
	}
	else{
	mysqli_select_db($cfg_dbname, $conn);
	mysqli_query("SET NAMES utf8");
	mysqli_query("set character_set_client=utf8");
	mysqli_query("set character_set_results=utf8");
	echo("Errorcode: " . mysqli_errno($conn));
	}
mysqli_close($conn);
?>
