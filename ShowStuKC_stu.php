<html>
<head>
<title>ѧ���ɼ���ѯ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
-->
</style>
</head>
<body bgcolor="D9DFAA"> 
<div align="center"> <br> <br> <font face="��Բ" size="5" color="#008000">
			   <b>ѧ���ɼ���ѯ</b></font></div><br>
<form name="frm1" method="post" action="ShowStuKC_stu.php" style="margin:0">
<?php
session_start();
$username=@$_SESSION['username'];
?>
</form>

<?php
//ѧ���ɼ���ѯ����
require "fun.php";
$number=$username; 

$sql1="select course.id,course.Name,score.Score from course,score where score.Sid='$number'  AND course.id=score.Crid";
$sql2="select Sname,Zxf from student where id='$number'"; //����ѧ����������ѧ��

$result1=mysql_query($sql1);
$result2=mysql_query($sql2);

echo "<table width=500 height=350 align=center>";				//������
echo "<tr><td>";
echo "<table width=350 height=340 border=1 cellpadding=0 cellspacing=0>";
echo "<tr bgcolor=#CCCCCC class=STYLE1>";
echo "<td width=100>�γ̺�</td>";
echo "<td width=150>�γ���</td>";
echo "<td width=100>�ɼ�</td></tr>";


if(!$result1) 										//���û�н�������һ�ſձ�
{
	for($i=0;$i<12;$i++)
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
else
{
	$count=0;										//���ü�����
	while($row1=mysql_fetch_array($result1))
	{
		list($KCH,$KCM,$CJ)=$row1;					//ȡ�ý��ֵ
		echo "<tr class=STYLE1><td>$KCH&nbsp;</td>";		//���������������
		echo "<td>$KCM&nbsp;</td>";
		echo "<td>$CJ&nbsp;</td></tr>";
		$count++;									//��ý��������
	}
	for($i=0;$i<12-$count;$i++)							//��ʣ��Ľ�����Ŀ��д���
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
echo "</table></td>";
$row2=mysql_fetch_array($result2);
list($XM,$ZXF)=$row2;
if($number&&(!$XM))
	echo "<script>alert('��ѧ�Ų�����!');location.href='ShowStuKC.php';</script>";
else
{
	//����������Ϣ���������һ�������
	echo "<td><table width=150 height=340 border=1 cellpadding=0 cellspacing=0>";
	echo "<tr class=STYLE1><td height=35 bgcolor=#CCCCCC>����:</td></tr>";
	echo "<tr><td class=STYLE1 height=135 align=center>$XM&nbsp;</td></tr>";
	echo "<tr><td class=STYLE1 height=35 bgcolor=#CCCCCC>��ѧ�֣�</td></tr>";
	echo "<tr><td class=STYLE1 height=135 align=center>$ZXF&nbsp;</td></tr>";
	
    echo "<tr><td align=center>";

  	echo "</table></td>";
}
echo "</tr></table>";
?>

</body>
</html>
