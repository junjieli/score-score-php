

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<?php
//�������ݿ�
$link_id = mysql_connect("localhost","root","123") or die("����ʧ��");
if($link_id)
{
 //ѡ�����ݿ�
 mysql_select_db("stu");
 //����Ϊͷ�����ݿ����Ӳ��֣�Ϊ���¹��õĲ��֡�
 if(!$_get[id]){
  //��ʾ�û��б�
  $sql = "select * from admin";
  $result=mysql_query($sql);
  
  echo "<div align='center'><br><br><font face='��Բ ' size='5' color='#008000'> <b>�û�����</b></font></div>";
  
  echo "<br><table  width=450 border=1 align=center cellpadding=0 cellspacing=0  >
    <tr  bgcolor=#CCCCCC height=25 align=center>
     <td>�û����</td>
     <td>�û�����</td>
     <td>����</td>
     <td>����</td>
    </tr>";
 
  while($row=mysql_fetch_array($result)){
	  $uid=$row[userid];
   echo "<tr>
     <td><center>".$row[userid]."</center>
     <td><center>".$row[username]."</center></td> 
	 <td><center><input id='points-$uid' type=text size=12 value=".$row[password].">
	 <input type='hidden' id='$uid' value=".$row[userid].">
	 </center></td>	 
     <td><center>
	 <a href=# onclick=\"run('$uid')\">����</a>&nbsp;&nbsp;
	 
	 <a href=delete.php?id=".$row[username].">ɾ��</a></center></td>
    </tr>";
  }
  echo "</table><br><br>";
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
//run()�����Ĳ���str�ǳ�����
function run(str)
{ 
	
	xmlHttp=GetXmlHttpObject();   //����GetXmlHttpObject()����һ��XMLHTTP����			
	var userid=document.getElementById(str).value;		
	var points=document.getElementById("points-"+str).value;	
	var url="UserCJ.php";        				

	url=url+"?userid="+str+"&points="+points;
	//���һ����������Է�������ʹ�û�����ļ�
	url=url+"&sid="+Math.random();  						
	//ͨ��������URL��XMLHTTP����
	xmlHttp.open("GET",url,true);    						
	xmlHttp.send(null);       							//�����������HTTP����
	xmlHttp.onreadystatechange = function()
		{
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") 
			{ 
				alert(xmlHttp.responseText);				
				if(xmlHttp.responseText=='ɾ���ɹ���')		
					document.getElementById("points-"+uid).value="";
			}        
		}
}
</script>		
		
		
<center><a href="addUser.php">  ��Ҫ�����ѧ���û���      </a></center>


</body>
</html>
