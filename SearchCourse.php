<?php
require "fun.php";
session_start();										//����session
$number=@$_POST['Num'];							//��ȡShowStuKC.phpҳ���ѧ��ֵ
$name=@$_POST['Name'];	                       //��ȡShowStuKC.phpҳ�������ֵ
$_SESSION['number']=$number;							//��ѧ�Ŵ�������ҳ��

$sql1= "select course.id,course.Name,course.XF from course where course.id='$number' or course.Name='$name'   ";
$result1=mysql_query($sql1);


echo "<table width=500 align=center height=180 border=1 cellpadding=0 cellspacing=0>";
echo "<tr bgcolor=#CCCCCC class=STYLE1>";
echo "<td width=70><center>�γ̴���</center></td>";
echo "<td width=100><center>�γ���</center></td>";
echo "<td width=100><center>ѧ��</center></td></tr>";


if(!$result1) 										//���û�н�������һ�ſձ�
{
	for($i=0;$i<2;$i++)
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
	for($i=0;$i<2-$count;$i++)							//��ʣ��Ľ�����Ŀ��д���
	{
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
}
echo "</table>";

?>
