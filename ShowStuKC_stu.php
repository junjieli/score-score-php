<html>
<head>
<title>学生成绩查询</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
-->
</style>
</head>
<body bgcolor="D9DFAA"> 
<div align="center"> <br> <br> <font face="幼圆" size="5" color="#008000">
			   <b>学生成绩查询</b></font></div><br>
<form name="frm1" method="post" action="ShowStuKC_stu.php" style="margin:0">
<?php
session_start();
$username=@$_SESSION['username'];
?>
</form>

<?php
//学生成绩查询界面
require "fun.php";
$number=$username; 

$sql1="select course.id,course.Name,score.Score from course,score where score.Sid='$number'  AND course.id=score.Crid";
$sql2="select Sname,Zxf from student where id='$number'"; //查找学生姓名、总学分

$result1=mysql_query($sql1);
$result2=mysql_query($sql2);

echo "<table width=500 height=350 align=center>";				//输出表格
echo "<tr><td>";
echo "<table width=350 height=340 border=1 cellpadding=0 cellspacing=0>";
echo "<tr bgcolor=#CCCCCC class=STYLE1>";
echo "<td width=100>课程号</td>";
echo "<td width=150>课程名</td>";
echo "<td width=100>成绩</td></tr>";


if(!$result1) 										//如果没有结果则输出一张空表
{
	for($i=0;$i<12;$i++)
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
else
{
	$count=0;										//设置计数器
	while($row1=mysql_fetch_array($result1))
	{
		list($KCH,$KCM,$CJ)=$row1;					//取得结果值
		echo "<tr class=STYLE1><td>$KCH&nbsp;</td>";		//将结果输出到表格中
		echo "<td>$KCM&nbsp;</td>";
		echo "<td>$CJ&nbsp;</td></tr>";
		$count++;									//获得结果的行数
	}
	for($i=0;$i<12-$count;$i++)							//将剩余的结果表格的空行代替
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
echo "</table></td>";
$row2=mysql_fetch_array($result2);
list($XM,$ZXF)=$row2;
if($number&&(!$XM))
	echo "<script>alert('该学号不存在!');location.href='ShowStuKC.php';</script>";
else
{
	//将姓名等信息输出到另外一个表格中
	echo "<td><table width=150 height=340 border=1 cellpadding=0 cellspacing=0>";
	echo "<tr class=STYLE1><td height=35 bgcolor=#CCCCCC>姓名:</td></tr>";
	echo "<tr><td class=STYLE1 height=135 align=center>$XM&nbsp;</td></tr>";
	echo "<tr><td class=STYLE1 height=35 bgcolor=#CCCCCC>总学分：</td></tr>";
	echo "<tr><td class=STYLE1 height=135 align=center>$ZXF&nbsp;</td></tr>";
	
    echo "<tr><td align=center>";

  	echo "</table></td>";
}
echo "</tr></table>";
?>

</body>
</html>
