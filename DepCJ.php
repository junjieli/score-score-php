<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//使用GB2312编码，防止输出中文时出现乱码
$Tid=($_GET['id']);						//单击超链接得到的id值

$Tname=$_GET['points'];
$Tname1=(string)($Tname);

	if($points)
	{
	$cj_sql="update teacher set teacher.TName='$Tname1' where  teacher.Tid=$Tid";
	$cj_result=mysql_query($cj_sql);
if($cj_result)
			echo "$Tname.$Tid.$Tname1";
		else
			echo "保存失败";
		}
		else
			echo "成绩值为空，请输入成绩！";
		
?>