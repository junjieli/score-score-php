<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//ʹ��GB2312���룬��ֹ�������ʱ��������
$id=$_GET['id'];							//���������ӵõ���idֵ
$kcname=$_GET['kcname'];
$points=$_GET['points'];
$array=explode("-", $id);					//���ַ���$id�ֽ������
$action=$array[0];						//�����һ��ֵΪ�����ĳ����ӵĶ�����keep��delete
$number=$array[1];						//�ڶ���ֵΪ��ǰ�е�ѧ��


$kc_sql="select id from course where Name='$kcname'";
$kc_result=mysql_query($kc_sql);
$kc_row=mysql_fetch_array($kc_result);
$kcnumber=$kc_row['id'];

if($action=="keep")						//��������˱��泬����
{
	$sql="select Score from score  where Sid='$number' and Crid='$kcnumber'";
	$result=mysql_num_rows(mysql_query($sql));
	if($result!=0)
  {   
			
		$cj_sql="update score set score.Score=$points where Sid='$number' and Crid='$kcnumber' ";
		$cj_result=mysql_query($cj_sql);
		if($cj_result)
		{echo '����ɹ�!';	}	
		else
		{echo "����ʧ�ܣ�";}
	}
	else 
	{    
		$cj_sql1="insert into score values($number,$kcnumber,$points)";
		$cj_result1=mysql_query($cj_sql1);
		if($cj_result1)
			echo '����ɹ�!';
		else
			echo "����ʧ�ܣ�";
	
	}
}


if($action=="delete")						//���������ɾ������
{
		$cj_sql="delete from score where Sid='$number' and Score='$points' and Crid='$kcnumber'";	
		$cj_result=mysql_query($cj_sql);
		if(mysql_affected_rows($conn)!=0)
			echo "ɾ���ɹ���";
		else
			echo "ɾ��ʧ�ܣ�";
}
?>
