<?php
$cfg_dbhost="me4j7z9j.2310lan.dnstoo.com";
$cfg_dbuser="szdata_f";
$cfg_dbpwd="xqymain";
$cfg_dbname="szdata";
$conn = @mysql_connect("me4j7z9j.2310lan.dnstoo.com","szdata_f","xqymain");
	if (!$conn){
		die("连接数据库失败：" . mysql_error());
	}
	mysql_select_db( "szdata", $conn);
	mysql_query("SET NAMES utf8");
	mysql_query("set character_set_client=utf8"); 
	mysql_query("set character_set_results=utf8");
?>