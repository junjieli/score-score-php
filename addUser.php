
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<?php 
//header("Content-type:text/html;charset=utf-8");
require "fun.php";

?>
<body bgcolor="D9DFAA">
<form action="" method="post"><br><br>
<div align="center"><font face="幼圆" size="5" color="#008000"><b>新增用户信息</b></font></div>
<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">用户id </td>
 <td><center><input type="text" name="id"></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">用户名</td>
 <td><center><input type="text" name="name"></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">密码</td>
<td><center><input type="text" name="pw"></center></td></tr>
<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">操作	</td>
 <td><center><input type ="submit" name= "Submit" value ="提交" ></center></td></tr>
<br>
</form>
</body>
</html>


<?php 
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$pw=$_POST['pw'];
	require "fun.php";
	$sql="insert into admin values('$id','$name','$pw')";
	mysql_query($sql);
	
	if(mysql_affected_rows()<0){
	
		echo "<script language='javascript'>alert('添加失败');'</script>";
	}
	else{
		echo "<script language='javascript'>alert('添加成功');location.href='adman2.php'</script>";
	}
}
?>

