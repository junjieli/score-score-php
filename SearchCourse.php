<?php
require "fun.php";
session_start();										//开启session
$number=@$_POST['Num'];							//获取ShowStuKC.php页面的学号值
$name=@$_POST['Name'];	                       //获取ShowStuKC.php页面的姓名值
$_SESSION['number']=$number;							//将学号传到其他页面

$sql1= "select course.id,course.Name,course.XF from course where course.id='$number' or course.Name='$name'   ";
$result1=mysql_query($sql1);


echo "<table width=500 align=center height=180 border=1 cellpadding=0 cellspacing=0>";
echo "<tr bgcolor=#CCCCCC class=STYLE1>";
echo "<td width=70><center>课程代码</center></td>";
echo "<td width=100><center>课程名</center></td>";
echo "<td width=100><center>学分</center></td></tr>";


if(!$result1) 										//如果没有结果则输出一张空表
{
	for($i=0;$i<2;$i++)
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
	for($i=0;$i<2-$count;$i++)							//将剩余的结果表格的空行代替
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
echo "</table>";

?>
