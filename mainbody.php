<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];
if($username=="admin")
{
//echo"��ӭ��¼";
}
else{
	//echo "С����û��½�������";
//exit();
	echo "<script>alert('С����û��½�������');location.href='login.php';</script>";
}
?>

<html>
<head>
<title>ѧ������ϵͳ</title>
</head>

<body topMargin="0" leftMargin="0" bottomMargin="0" rightMargin="0">
<form action="mainbody.php"    method="post">
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<div style="height:=194;width=850; background-image:url(images/ban1.jpg);background-size:100% 100%;"><br> <br>  <br> <br>
<br>
<input type="submit" height="43" width="196"   value="ע���˳� "  name="logout"  style=" margin-left:16.5cm" />
 <br><br><br><br> 

</div>
</td></tr>
<tr><td><iframe src="stu_frame.html" width="850" height="500"></iframe></td></tr>
<tr><td><div style="background-color:D9DFAA; height:45; width:850">
<p align="right">��Ȩ���м�����֧�֣�����������ѧУ</p>

</div></td></tr>
</table>


<?php
if(isset($_POST['logout']))
{
unset($_SESSION['password']);
unset($_SESSION['username']);
//echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
echo "<script>alert('�Ѿ�ע��');location.href='login.php';</script>";
}
?>
</form>
</body>
</html>