
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>


<body bgcolor="D9DFAA">
<form action ="" method= "post"><br><br>
<div align="center"><font face="��Բ" size="5" color="#008000"><b>�����γ���Ϣ</b></font></div>

<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">�γ̴���</td>
  <td><center><input type= "text" name ="id" ></center></td></tr>

<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC"> �γ���</td>
  <td><center><input type= "text" name ="Name" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">ѧ�� </td>
  <td><center><input type= "text" name ="XF" ></center></td></tr>
<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">����</td>
 <td><center><input type ="submit" name= "Submit" value ="�ύ" ></center></td></tr>
<br>
</form>
<?php
if (isset ($_POST[ 'Submit']))
{
$id=$_POST[ 'id'];$Name=$_POST[ 'Name' ];
$XF=$_POST[ 'XF'];

require "fun.php";
$sql= "insert into course values('$id','$Name','$XF')" ;
mysql_query($sql);

if (mysql_affected_rows()<0){
echo "<script language='javascript'>alert('���ʧ��');'</script>" ;
}
else {

echo "<script language='javascript'>alert('��ӳɹ�');location.href='ShowCourse.php''</script>" ;
}
}
?>
  


</body>
</html>