<html>
<head>

<style type="text/css">
body {
	margin: 0px; 
padding: 0px; 
background-attachment: fixed; 

	background-image: url(1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: left bottom; 
}
</style>
</head>
<body> 
<form action="login.php"    method="post">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<table width="450"  height="500" border="0" align="center" >
  <tr>
    <td colspan="2" align="center"><font face="΢���ź�" size="+4">ѧ���ɼ�����ϵͳ</font> </td>
    
  </tr>
  <tr>
    <td align="center"><font face="΢���ź�" size="+3">�û��� </font></td>
    <td><input name="username" type="text"></td>
  </tr>
  <tr>
    <td align="center"><font face="΢���ź�" size="+3">����</font></td>
    <td><input name="password" type="password"></td>
  </tr>
  <tr>
   <td colspan="2" align="center">
   <input type="submit"  style="background-color: #ddd;width: 95px;height: 32px;font-size: 14px; " value="     ��¼       "  name="Submit" />
   <!--  
  <td colspan="2" align="center"> <input type="image"  height="43" width="196" name="Submit" src="login.jpg" />-->
  
  
  </td>
  </tr>
</table>
<p>&nbsp;</p>

</form>
</body>
</html>
<?php
require "fun.php";
session_start();
if(isset($_POST['Submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select *from admin where username='$username' and password='$password'";
	$rs=mysql_query($sql);
	$recount=mysql_num_rows($rs);
	if($recount<>0){
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
	{
		header("location:mainbody2.php");}
	}
	if($username=="admin"&&$password=="123")          //�������Աҳ��
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		//header("location:adlogin.php");
		header("location:mainbody.php");
	}
	
    if($username=="teacher"&&$password=="123")        //�����ʦҳ��
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:mainbody1.php");
	}
	else
	{
		echo "<script>alert('��¼ʧ��');location.href='login.php';</script>";
	}
}
?>
