
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body bgcolor="D9DFAA">
<div align="center"><font face="��Բ" size="5" color="#008000"><b>�༭�༶��Ϣ</b></font></div>
<?php
require "fun.php";
$id=$_GET['id'];
$name=$_GET['name'];
$Tid=$_GET['Tid'];
$Tname=$_GET['Tname'];
?>
<form action="alterDep.php" method="post"><br><br><br>
<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>
<tr bgcolor=#CCCCCC height=25 align=center><td>�༶���</td>
<td valign="top"><?php echo $id ?></td></tr>
<tr bgcolor=#CCCCCC height=25 align=center><td>�༶����</td>
<td valign="top"><input type="text" name="name"  value="<?php echo $name?>"></td></tr>
<tr bgcolor=#CCCCCC height=25 align=center><td>�����α��</td>
<td valign='top'><?php echo $Tid ?></td></tr>
<tr bgcolor=#CCCCCC height=25 align=center><td>����������</td>
<td valign='top'><input type="text" name="Tname" value="<?php echo $Tname?>"></td></tr>
<tr ><td colspan="2"><center><input type="Submit" name="Submit" value="�༭">
<input type="reset" value="����">
<input type="hidden" name="id" value="<?php echo $id?>">
<input type="hidden" name="Tid" value="<?php echo $Tid?>">
</center></td></tr>
</table>
</form>
</body>
</html>

<?php
require "fun.php";
if (isset ($_POST[ 'Submit']))
{
	$id=$_POST['id'];
	$Tid=$_POST['Tid'];	
	$name1=$_POST['name'];
	$name2=strval($name1);
	$Tname1=$_POST['Tname'];
	$Tname2=strval($Tname1);
	$sql1= "update class set Name='$name1' where id=$id";
	$sql2="update teacher set teacher.Tname='$Tname1' where teacher.Tid=$Tid";

	$update_result=mysql_query($sql1);
	if(mysql_affected_rows()!=0)
	{
		$update_result=mysql_query($sql2);
		if(mysql_affected_rows()!=0)
		echo "<script language='javascript'>alert('�༭�ɹ�');location.href='dep.php'</script>";
		else echo "<script language='javascript'>alert('�༭ʧ��');</script>";
	}
	else 
	{
		echo "<script language='javascript'>alert('�༭ʧ��');</script>";
	}
	
}
?>