<?php
require "fun.php";
$StuNumber=@$_GET['StuNumber'];   		  		
$StuName=@$_GET['StuName'];       		

//����sql����getsql����
function getsql($StuNum,$StuNa,$Pro)
{
	$sql="select * from student where ";
	$note=0;
	if($StuNum)
	{
		$sql.="id like '%$StuNum%'";
		$note=1;
	}
	if($StuNa)
	{
		if($note==1)
			$sql=" and Sname like '%$StuNa%'";
		else
			$sql.="Sname like '%$StuNa%'";
		$note=1;
	}

	if($note==0)
	{
		$sql="select * from student";
	}
	return $sql;
}

$sql=getsql($StuNumber, $StuName);		//�õ���ѯ���

$result=mysql_query($sql);
$total=mysql_num_rows($result);
$page=isset($_GET['page'])?intval($_GET['page']):1;	//��ȡ��ַ����page��ֵ������������Ϊ1
$num=12;                                     	//ÿҳ��ʾ12����¼
$url='StuSearch.php';							//��ҳURL
//ҳ�����
$pagenum=ceil($total/$num);					//�����ҳ����Ҳ�����һҳ
$page=min($pagenum,$page);					//�����ҳ
$prepg=$page-1;								//��һҳ
$nextpg=($page==$pagenum? 0: $page+1);		 	//��һҳ
$new_sql=$sql." limit ".($page-1)*$num.",".$num;		//��ÿҳ��¼�����ɲ�ѯ���
$new_result=mysql_query($new_sql);
if($new_row=mysql_fetch_array($new_result))
{
	//���в�ѯ��������Ա����ʽ���ѧ����Ϣ
	echo "<br><center><font size=5 face=����_GB2312 color=#0000FF>
			ѧ����Ϣ��ѯ���</font></center><br>";
	echo "<table width=480 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
	echo "<tr bgcolor=#CCCCCC><td>ѧ��</td>";
	echo "<td>רҵ����</td>";
	echo "<td>����</td>";
	echo "<td>�Ա�</td>";
	echo "<td>����ʱ��</td>";
	echo "<td>��ѧ��</td>";
	echo "<td>����</td></tr>";
			
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
		  	echo "<td><a href=deleteBasic.php?id='$id'>ɾ��</a></td>";
		  	echo "</tr>";
	}while($new_row=mysql_fetch_array($new_result));
	echo "</table>";
	//��ʼ��ҳ����������
	$pagenav="";
		  	if($prepg)
		  	/*�˴�����Ӧ����ͬһ�У�Ϊ�����۷�Ϊ���У�ʵ�ʱ�дʱ���ֿܷ�����ͬ*/
		  	$pagenav.="<a href='$url?page=$prepg&StuNumber=$StuNumber
					&StuName=$StuName&select=$Project'>��һҳ</a> ";
					for($i=1;$i<=$pagenum;$i++)
					{
						if($page==$i) 	$pagenav.=$i." ";
						else
						$pagenav.=" <a href='$url?page=$i&StuNumber=$StuNumber
						&StuName=$StuName&select=$Project'>$i</a>";
						}
						if($nextpg)
							$pagenav.=" <a href='$url?page=$nextpg&StuNumber=$StuNumber
							&StuName=$StuName&select=$Project'>��һҳ</a>";
							$pagenav.="��(".$pagenum.")ҳ";
						//�����ҳ����
	echo "<br><div align=center class=STYLE1><b>".$pagenav."</b></div>";
}
						else
      echo "<script>alert('�޼�¼!');location.href='StuSearch.php';</script>";
      ?>




