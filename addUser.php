
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
<div align="center"><font face="��Բ" size="5" color="#008000"><b>�����û���Ϣ</b></font></div>
<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">�û�id </td>
 <td><center><input type="text" name="id"></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">�û���</td>
 <td><center><input type="text" name="name"></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">����</td>
<td><center><input type="text" name="pw"></center></td></tr>
<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">����	</td>
 <td><center><input type ="submit" name= "Submit" value ="�ύ" ></center></td></tr>
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
	
		echo "<script language='javascript'>alert('���ʧ��');'</script>";
	}
	else{
		echo "<script language='javascript'>alert('��ӳɹ�');location.href='adman2.php'</script>";
	}
}
?>

