<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//ʹ��GB2312���룬��ֹ�������ʱ��������
$Tid=($_GET['id']);						//���������ӵõ���idֵ

$Tname=$_GET['points'];
$Tname1=(string)($Tname);

	if($points)
	{
	$cj_sql="update teacher set teacher.TName='$Tname1' where  teacher.Tid=$Tid";
	$cj_result=mysql_query($cj_sql);
if($cj_result)
			echo "$Tname.$Tid.$Tname1";
		else
			echo "����ʧ��";
		}
		else
			echo "�ɼ�ֵΪ�գ�������ɼ���";
		
?>