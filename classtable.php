<?php
require "fun.php";
$ClassName=$_GET['cName'];

echo "<table width=450 align=center>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>基本信息:</td>";
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>$ClassName</td>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>班主任姓名:</td>";

$tname="select teacher.TName from class,teacher where class.Name='$ClassName' and class.Tid=teacher.Tid";
$re=mysql_query($tname);
$row=mysql_fetch_array($re);
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>".$row['TName']."</td>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>班级人数:</td>";
$count="select count(*) as abc from student,class where student.cid=class.id and class.Name='$ClassName'";
$re1=mysql_query($count);   $row1=mysql_fetch_assoc($re1);      
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>".$row1['abc']."</td>";
echo "</tr></table>";


echo "<br><div align=center class=STYLE2>$DEPName</div>";
echo "<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
echo "<tr bgcolor=#CCCCCC height=25 align=center><td>学生学号</td>";
echo "<td>学生名称</td>";
echo "<td>性别</td>";
echo "<td>生日</td>";
echo "<td width=160>总学分</td></tr>";

if(!$ClassName)
{
	for($i=0;$i<10;$i++)
	{
		echo "<tr height=28><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	}
}
else 
{
	$stusql="select student.id,student.Sname,student.Sex,student.Birth,student.Zxf from student,class where student.cid=class.id and class.Name='$ClassName'";
	$result=mysql_query($stusql);
	while($row2=mysql_fetch_row($result))
	{
		list($id,$Sname,$Sex,$Birth,$Zxf)=$row2;
		echo "<tr bgcolor=#CCCCCC height=25 align=center><td>$id</td>";
		echo "<td>$Sname</td>";
		echo "<td>$Sex</td>";
		$timeTemp=strtotime($Birth);     		//日期时间解析为UNIX时间戳
		$time=date("Y-n-j",$timeTemp); 			//用date函数将时间转换
		echo "<td>$time</td>";				//出生日期
		echo "<td>$Zxf</td></tr>";
			
	}
	
}



?>