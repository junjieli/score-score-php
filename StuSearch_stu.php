<html>
<head>
<title>ѧ����Ϣ��ѯ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
.STYLE2 {font-size: 15px; font-family: "��Բ";color:"#800080";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align=center><br><font face="��Բ" size="5" color="#008000"><b>ѧ����Ϣ��ѯ</b></font></div></br>

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
	//���в�ѯ��������Ա����ʽ���ѧ����Ϣ
	echo "<table width=480 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
	echo "<tr bgcolor=#CCCCCC><td>ѧ��</td>";
	echo "<td>רҵ����</td>";
	echo "<td>����</td>";
	echo "<td>�Ա�</td>";
	echo "<td>����ʱ��</td>";
	echo "<td>��ѧ��</td>";	
	do
	{
		list($id,$cid,$Sname,$Sex,$Birth,$Zxf)=$new_row;
		//����ѧ�ų�����
		echo "<tr><td>$id</td>";
		echo "<td>$cid</td>";//���רҵ
		echo "<td>$Sname</td>";
		  	echo "<td>$Sex</td>";
		  	$timeTemp=strtotime($Birth);     		//������ʱ�����ΪUNIXʱ���
		  	$time=date("Y-n-j",$timeTemp); 			//��date������ʱ��ת��Ϊ����-��-�ա���ʽ
		  	echo "<td>$time</td>";				//�����������				
		  	echo "<td>$Zxf</td>";				//�����ѧ��
		
		  	echo "</tr>";
	}while($new_row=mysql_fetch_array($result));
	echo "</table>";

}
      else
      echo "<script>alert('�޼�¼!');location.href='StuSearch.php';</script>";
     
      
      ?>
<br>
</body>
</html>
