<?php
require "fun.php";
$ClassName=$_GET['cName'];

echo "<table width=450 align=center>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>������Ϣ:</td>";
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>$ClassName</td>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>����������:</td>";

$tname="select teacher.TName from class,teacher where class.Name='$ClassName' and class.Tid=teacher.Tid";
$re=mysql_query($tname);
$row=mysql_fetch_array($re);
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>".$row['TName']."</td>";
echo "<tr><td width=100 class=STYLE1 bgcolor=#CCCCCC>�༶����:</td>";
$count="select count(*) as abc from student,class where student.cid=class.id and class.Name='$ClassName'";
$re1=mysql_query($count);   $row1=mysql_fetch_assoc($re1);
echo "<td width=100 class=STYLE1 bgcolor=#CCCCCC>".$row1['abc']."</td>";
echo "</tr></table>";


echo "<br><div align=center class=STYLE2>$DEPName</div>";
echo "<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
echo "<tr bgcolor=#CCCCCC height=25 align=center><td>ѧ��ѧ��</td>";
echo "<td>ѧ����</td>";
echo "<td width=160>ѧҵƽ����</td>";
echo "<td >����</td></tr>";

$jishu=1;
if(!$ClassName)
{
	for($i=0;$i<10;$i++)
	{
		echo "<tr height=28><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	}
}
else
{
	$sql="select student.id ,student.Sname,avg(score) as tol FROM   score,student,class where student.cid=class.id and class.Name='$ClassName' and student.id=score.Sid GROUP BY  score.Sid ORDER BY tol DESC";
	$result=mysql_query($sql);
	while($row2=mysql_fetch_row($result))
	{
		list($id,$Sname,$tol)=$row2;
		echo "<tr bgcolor=#CCCCCC height=25 align=center><td>$id</td>";
		echo "<td>$Sname</td>";
		echo "<td>$tol</td>";
		echo "<td>$jishu</td></tr>";
		$jishu=$jishu+1;
	}
}
?>