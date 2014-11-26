<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//使用GB2312编码，防止输出中文时出现乱码

$userid=$_GET['userid'];
$points=$_GET['points'];

	if($points)
	{
		$cj_sql="update admin set password=$points where userid='$userid'";
		$cj_result=mysql_query($cj_sql);
		if($cj_result)
			echo '保存成功!';
		else
			//echo "保存失败！";
			echo $points;
	}
	else
		echo "请输入密码";

?>
