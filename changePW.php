


<html>
<head>
<title>修改密码</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="幼圆" size="5" color="#008000">
			   <b>修改密码</b></font></div>
          <center>      <div>
<form name="frm1" method="post" action="changePW.php" style="margin:0">
<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];
?><br><br>
当前密码如下: <br>
<input type="text" name="old" value="<?php echo "$password";?>"   />
<br>
请输入新密码: <br><br><br>
<input type="text" name="new"   />
<br> <br><br>  <input type ="submit" name= "Submit" value ="提交" >
<br><br>   成功修改密码后需重新登录
</form>  </div></center>
<?php
if (isset ($_POST[ 'Submit']))
{
$username=@$_SESSION['username'];	
$old=$_POST[ 'old'];
$new=$_POST[ 'new'];
require "fun.php";

$sql= "update admin set password=$new where username=$username " ;
mysql_query($sql);

if(mysql_affected_rows()<0)
{
	echo "<script language='javascript'>alert('修改失败');</script>";
}
else{
	echo "<script language='javascript'>alert('添加成功');location.href='login.php'</script>";
}


}
?>


</body>
</html>
