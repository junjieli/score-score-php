<html>
<head>
<title>学生信息查询</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
.STYLE2 {font-size: 15px; font-family: "幼圆";color:"#800080";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align=center><br><font face="幼圆" size="5" color="#008000"><b>学生信息查询</b></font></div></br>

<form action="StuSearch_stu.php" method="get" style="margin:0">
<?php
session_start();
$username=@$_SESSION['username'];
?>
</form>
<?php
require "fun.php";

$sql="select * from student where id='$username'";
$result=mysql_query($sql);
if($new_row=mysql_fetch_array($result))
{
	//若有查询结果，则以表格形式输出学生信息
	echo "<table width=480 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
	echo "<tr bgcolor=#CCCCCC><td>学号</td>";
	echo "<td>专业代号</td>";
	echo "<td>姓名</td>";
	echo "<td>性别</td>";
	echo "<td>出生时间</td>";
	echo "<td>总学分</td>";	
	do
	{
		list($id,$cid,$Sname,$Sex,$Birth,$Zxf)=$new_row;
		//设置学号超链接
		echo "<tr><td>$id</td>";
		echo "<td>$cid</td>";//输出专业
		echo "<td>$Sname</td>";
		  	echo "<td>$Sex</td>";
		  	$timeTemp=strtotime($Birth);     		//将日期时间解析为UNIX时间戳
		  	$time=date("Y-n-j",$timeTemp); 			//用date函数将时间转换为“年-月-日”形式
		  	echo "<td>$time</td>";				//输出出生日期				
		  	echo "<td>$Zxf</td>";				//输出总学分
		
		  	echo "</tr>";
	}while($new_row=mysql_fetch_array($result));
	echo "</table>";

}
      else
      echo "<script>alert('无记录!');location.href='StuSearch.php';</script>";
     
      
      ?>
<br>
</body>
</html>
