<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];
if($username)
{
//echo"欢迎登录";
}
else{	
	echo "<script>alert('小样，没登陆想进来？');location.href='login.php';</script>";
}
?>

<html>
<head>
<title>学生管理系统</title>
</head>

<body topMargin="0" leftMargin="0" bottomMargin="0" rightMargin="0">
<form action="mainbody2.php"    method="post">
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">

<tr><td>
<div style="height:=194;width=850; background-image:url(images/ban1.jpg);background-size:100% 100%;"><br> <br><br><br><br><br>
<input type="submit" height="43" width="196"   value="修改密码 "  name="password"  style=" margin-left:16.5cm" />
<br>
<input type="submit" height="43" width="196"   value="注销退出 "  name="logout"  style=" margin-left:16.5cm" />
 <br><br><br><br> 
</div>
</td></tr>

<tr><td><iframe src="stu_frame2.html" width="850" height="500"></iframe></td></tr>
<tr><td><div style="background-color:D9DFAA; height:45; width:850">
<p align="right">版权所有及技术支持：广州市启迪学校</p></div></td></tr>
</table>

<?php
if(isset($_POST['logout']))
{
unset($_SESSION['password']);
unset($_SESSION['username']);
//echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
echo "<script>alert('已经注销');location.href='login.php';</script>";
}
if(isset($_POST['password']))
{

	echo "<script>location.href='changePW.php';</script>";
}
?>
</form>
</body>
</html>