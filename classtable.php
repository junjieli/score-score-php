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
echo "<td>ѧ������</td>";
echo "<td>�Ա�</td>";
echo "<td>����</td>";
echo "<td width=160>��ѧ��</td></tr>";

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
		$timeTemp=strtotime($Birth);     		//����ʱ�����ΪUNIXʱ���
		$time=date("Y-n-j",$timeTemp); 			//��date������ʱ��ת��
		echo "<td>$time</td>";				//��������
		echo "<td>$Zxf</td></tr>";
			
	}
	
}



?>