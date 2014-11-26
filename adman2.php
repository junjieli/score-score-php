

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<?php
//连接数据库
$link_id = mysql_connect("localhost","root","123") or die("连接失败");
if($link_id)
{
 //选择数据库
 mysql_select_db("stu");
 //以上为头部数据库连接部分，为以下公用的部分。
 if(!$_get[id]){
  //显示用户列表
  $sql = "select * from admin";
  $result=mysql_query($sql);
  
  echo "<div align='center'><br><br><font face='幼圆 ' size='5' color='#008000'> <b>用户管理</b></font></div>";
  
  echo "<br><table  width=450 border=1 align=center cellpadding=0 cellspacing=0  >
    <tr  bgcolor=#CCCCCC height=25 align=center>
     <td>用户编号</td>
     <td>用户名称</td>
     <td>密码</td>
     <td>操作</td>
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
	 <a href=# onclick=\"run('$uid')\">保存</a>&nbsp;&nbsp;
	 
	 <a href=delete.php?id=".$row[username].">删除</a></center></td>
    </tr>";
  }
  echo "</table><br><br>";
 }
}
?>
			
<script>
//使用AJAX无刷新技术
var xmlHttp;      				//定义一个XMLHTTP变量
function GetXmlHttpObject()    	 	//XMLHTTP的实例化函数，用于创建一个XMLHTTP对象
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
//run()函数的参数str是超链接
function run(str)
{ 
	
	xmlHttp=GetXmlHttpObject();   //调用GetXmlHttpObject()创建一个XMLHTTP对象			
	var userid=document.getElementById(str).value;		
	var points=document.getElementById("points-"+str).value;	
	var url="UserCJ.php";        				

	url=url+"?userid="+str+"&points="+points;
	//添加一个随机数，以防服务器使用缓存的文件
	url=url+"&sid="+Math.random();  						
	//通过给定的URL打开XMLHTTP对象
	xmlHttp.open("GET",url,true);    						
	xmlHttp.send(null);       							//向服务器发送HTTP请求
	xmlHttp.onreadystatechange = function()
		{
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") 
			{ 
				alert(xmlHttp.responseText);				
				if(xmlHttp.responseText=='删除成功！')		
					document.getElementById("points-"+uid).value="";
			}        
		}
}
</script>		
		
		
<center><a href="addUser.php">  需要添加新学生用户吗？      </a></center>


</body>
</html>
