<?php
$server="localhost";								//服务器名
$user="root";									//用户名
$password="123";								//密码
$database="stu";								//要连接的数据库
$conn=mysql_connect($server,$user,$password);			//连接服务器
mysql_select_db($database,$conn);					//打开数据库
mysql_query("SET NAMES gb2312");					//设置字符集
?>
