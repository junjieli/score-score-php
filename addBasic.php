
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>


<body bgcolor="D9DFAA">
<form action ="" method= "post"><br><br>
<div align="center"><font face="��Բ" size="5" color="#008000"><b>����ѧ��������Ϣ</b></font></div>

<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">ID</td>
  <td><center><input type= "text" name ="id" ></center></td></tr>

<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">רҵid </td>
  <td><center><input type= "text" name ="cid" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">���� </td>
  <td><center><input type= "text" name ="name" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">�Ա� </td>
  <td><center><input type= "text" name ="sex" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">��������</td>
   <td><center><input type= "text" name ="birth" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">��ѧ��</td>
  <td><center> <input type= "text" name ="zxf" ></center></td></tr>

<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">����	</td>
 <td><center><input type ="submit" name= "Submit" value ="�ύ" ></center></td></tr>

<br>


</form>

<?php
if (isset ($_POST[ 'Submit']))
{
$id=$_POST[ 'id'];$cid=$_POST[ 'cid' ];
$name=$_POST[ 'name'];
$sex=$_POST[ 'sex'];$birth=$_POST[ 'birth' ]; $zxf=$_POST['zxf' ];
require "fun.php";
$sql= "insert into student values('$id ','$cid ','$name ','$sex ','$birth ',' $zxf')" ;
mysql_query($sql);

if (mysql_affected_rows()>0){
echo "<script language='javascript'>alert('��ӳɹ�');location.href='StuSearch.php''</script>" ;
}
else {
echo "<script language='javascript'>alert('���ʧ��');'</script>" ;
}
}
?>
  


</body>
</html>