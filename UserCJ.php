<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//ʹ��GB2312���룬��ֹ�������ʱ��������

$userid=$_GET['userid'];
$points=$_GET['points'];

	if($points)
	{
		$cj_sql="update admin set password=$points where userid='$userid'";
		$cj_result=mysql_query($cj_sql);
		if($cj_result)
			echo '����ɹ�!';
		else
			//echo "����ʧ�ܣ�";
			echo $points;
	}
	else
		echo "����������";

?>
