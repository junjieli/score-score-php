


<html>
<head>
<title>�޸�����</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="��Բ" size="5" color="#008000">
			   <b>�޸�����</b></font></div>
          <center>      <div>
<form name="frm1" method="post" action="changePW.php" style="margin:0">
<?php
session_start();
$username=@$_SESSION['username'];
$password=@$_SESSION['password'];
?><br><br>
��ǰ��������: <br>
<input type="text" name="old" value="<?php echo "$password";?>"   />
<br>
������������: <br><br><br>
<input type="text" name="new"   />
<br> <br><br>  <input type ="submit" name= "Submit" value ="�ύ" >
<br><br>   �ɹ��޸�����������µ�¼
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
	echo "<script language='javascript'>alert('�޸�ʧ��');</script>";
}
else{
	echo "<script language='javascript'>alert('��ӳɹ�');location.href='login.php'</script>";
}


}
?>


</body>
</html>
