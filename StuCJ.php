<?php
require "fun.php";
header("Content-Type:text/html;charset=gb2312");	//使用GB2312编码，防止输出中文时出现乱码
$id=$_GET['id'];							//单击超链接得到的id值
$kcname=$_GET['kcname'];
$points=$_GET['points'];
$array=explode("-", $id);					//将字符串$id分解成数组
$action=$array[0];						//数组第一个值为单击的超链接的动作，keep或delete
$number=$array[1];						//第二个值为当前行的学号


$kc_sql="select id from course where Name='$kcname'";
$kc_result=mysql_query($kc_sql);
$kc_row=mysql_fetch_array($kc_result);
$kcnumber=$kc_row['id'];

if($action=="keep")						//如果单击了保存超链接
{
	$sql="select Score from score  where Sid='$number' and Crid='$kcnumber'";
	$result=mysql_num_rows(mysql_query($sql));
	if($result!=0)
  {   
			
		$cj_sql="update score set score.Score=$points where Sid='$number' and Crid='$kcnumber' ";
		$cj_result=mysql_query($cj_sql);
		if($cj_result)
		{echo '保存成功!';	}	
		else
		{echo "保存失败！";}
	}
	else 
	{    
		$cj_sql1="insert into score values($number,$kcnumber,$points)";
		$cj_result1=mysql_query($cj_sql1);
		if($cj_result1)
			echo '保存成功!';
		else
			echo "保存失败！";
	
	}
}


if($action=="delete")						//如果单击了删除链接
{
		$cj_sql="delete from score where Sid='$number' and Score='$points' and Crid='$kcnumber'";	
		$cj_result=mysql_query($cj_sql);
		if(mysql_affected_rows($conn)!=0)
			echo "删除成功！";
		else
			echo "删除失败！";
}
?>
