<?php
require "fun.php";
$KCName=$_GET['KCName'];
$ZYName=$_GET['ZYName'];

echo "<br><div align=center class=STYLE2>$KCName</div>";//����γ���
echo "<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
echo "<tr bgcolor=#CCCCCC height=25 align=center><td>ѧ��</td>";
echo "<td>����</td>";
echo "<td>�ɼ�</td>";
echo "<td width=160>����</td></tr>";

if(!$KCName&&!$ZYName)						//�γ�����רҵ��Ϊ�������һ�ſձ�
{
	for($i=0;$i<10;$i++)
	{
		echo "<tr height=28><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	}
}

else
{
	if($KCName=="��ѡ��")						//���δѡ�γ��������Ӧ��ʾ
		echo "<script>alert('��ѡ��γ�');location.href='AddStuScore.php'</script>";
	else
	{
		$total=0;								//��ʼ���ܼ�¼����ֵΪ0
		if($ZYName=="��ѡ��")
		{
			//����ѧ�š����������ڵ�����
			$XS_sql="select id,Sname from student";
		}
		else
		{  
			$XS_sql="select distinct student.id,student.Sname from student,class where class.id=student.cid and class.Name='$ZYName'";
		}

		$XS_result=mysql_query($XS_sql);
		$total=mysql_num_rows($XS_result);			//�����ܼ�¼��

		//��ȡ��ַ����page��ֵ����������Ϊ1
		$page=isset($_GET['page'])?intval($_GET['page']):1;
		$url='AddStuScore.php';					//��ҳURL
		//ҳ�����
		$num=10;								//����ÿҳ��ʾ�ļ�¼��
		$pagenum=ceil($total/$num);                	//�����ҳ��,Ҳ�����һҳ
		$page=min($pagenum,$page);				//�����ҳ
		$prepg=$page-1;							//��һҳ
		$nextpg=($page==$pagenum? 0: $page+1);		//��һҳ
		$offset=($page-1)*$num;                    	//��ȡ��ҳ��¼������ʼֵ
		$endnum=$offset+$num;					//��ҳ��¼�������ֵ
		//���Ҵ�($offset+1)�е�$endnum�еļ�¼
		$new_sql=$XS_sql." limit ".($page-1)*$num.",".$num;
		$new_result=mysql_query($new_sql);			//ִ�в�ѯ���
		
		while($new_row=mysql_fetch_array($new_result))
		{
			list($number,$name)=$new_row;//�г����ֵ
			//���ҳɼ���SQL���
			$Cj_sql="SELECT Score FROM score WHERE score.Sid='$number' AND score.Crid=(SELECT course.id FROM course WHERE course.`Name`='$KCName')";
			$CJ_result=mysql_query($Cj_sql);
			$CJ_row=mysql_fetch_array($CJ_result);
			$points=$CJ_row['Score'];				//ȡ���ɼ�ֵ

			//����һ�����ؿؼ����ڴ�ſγ���
			echo "<input type=hidden value=$KCName id='course'>";
			//���ѧ��
			echo "<tr class=STYLE1 align=center><td width=110>$number</td>";
			echo "<td width=110>$name</td>";		//�������			
			//���ı���������ɼ�
			echo "<td width=110><input id='points-$number' type=text size=12 value=$points></td>";			//���ñ��泬���ӣ�����������ʱ����run()����
			echo "<td><a href=# onclick=\"run(this.id,'$number')\" id='keep-$number'>����</a>&nbsp;&nbsp;";
			//����ɾ��������
			echo "<a href=# onclick=\"run(this.id,'$number')\" id='delete-$number'>ɾ��</a></td></tr>";
			}
			echo "</table>";
			//��ʼ��ҳ����������
			$pagenav="";
			if($prepg)
				$pagenav.=" <a href='$url?page=$prepg&KCName=$KCName&ZYName=$ZYName'>��һҳ</a> ";
				for($i=1;$i<=$pagenum;$i++)
				{
				if($page==$i) $pagenav.=$i." ";
				else
					$pagenav.=" <a href='$url?page=$i&KCName=$KCName&ZYName=$ZYName'>$i</a> ";
				}
				if($nextpg)
				$pagenav.=" <a href='$url?page=$nextpg&KCName=$KCName&ZYName=$ZYName'>��һҳ</a> ";
				$pagenav.="��(".$pagenum.")ҳ";
				echo "<br><div align=center class=STYLE1><b>".$pagenav."</b></div>"; //�����ҳ����
	}
}
?>
				
<script>
//ʹ��AJAX��ˢ�¼���
var xmlHttp;      				//����һ��XMLHTTP����
function GetXmlHttpObject()    	 	//XMLHTTP��ʵ�������������ڴ���һ��XMLHTTP����
{
	var xmlHttp=null;
	try	 
	{ 	
		xmlHttp=new XMLHttpRequest();	   
	}
	catch(e)
	{   
		 try
		 {   
			ttp=new ActiveXObject("Msxml2.XMLHTTP");    
		 }
		 catch(e)
		 {
			mlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		 }
	}
	return xmlHttp;
}  
//run()�����Ĳ���str�ǳ����ӵ�id��num�ǳɼ��ı���id�ĺ�׺
function run(str,num)
{ 
	//����GetXmlHttpObject()����һ��XMLHTTP����
	xmlHttp=GetXmlHttpObject();   			
	var kcname=document.getElementById("course").value;		//�õ��γ���
	var points=document.getElementById("points-"+num).value;	//�õ��ı����еĳɼ�ֵ
	var url="StuCJ.php";        						//����������StuCJ.php�д���
	url=url+"?id="+str+"&points="+points+"&kcname="+kcname; //url��ַ����GET��ʽ����
	//���һ����������Է�������ʹ�û�����ļ�
	url=url+"&sid="+Math.random();  						
	//ͨ��������URL��XMLHTTP����
	xmlHttp.open("GET",url,true);    						
	xmlHttp.send(null);       							//�����������HTTP����
	xmlHttp.onreadystatechange = function()
		{
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") 
			{ 
				alert(xmlHttp.responseText);				//�����Ի�����ʾ�������
				//���ִ����ɾ�������ͽ��ɼ��ı����е�ֵ���
				if(xmlHttp.responseText=='ɾ���ɹ���')		
					document.getElementById("points-"+num).value="";
			}        
		}
}
</script>		
		
		
			