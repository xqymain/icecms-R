<?php
header('content-type:text/html;charset=utf-8');
echo 'ICECMS程序安装';
echo '<form action="install.php"  method="post">';
echo '数据库地址:<input name="ip" type="txt" value="localhost">(一般不需要修改)<br/>';
echo '数据库登录名:<input name="user_name" type="txt"><br/>';
echo '数据库登录密码:<input name="pwd" type="txt"><br/>';
echo '数据库名:<input name="db" type="txt"><br/>';
echo '<input name="data" type="submit" value="安装"><br/>
	</form>';
?>
