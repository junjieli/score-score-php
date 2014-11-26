
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>


<body bgcolor="D9DFAA">
<form action ="" method= "post"><br><br>
<div align="center"><font face="幼圆" size="5" color="#008000"><b>新增院系信息</b></font></div>

<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">班级编号</td>
  <td><center><input type= "text" name ="id" ></center></td></tr>
 <tr> 
<td width="80" class="STYLE1" bgcolor="#CCCCCC">班级名称</td>
<td><center><input type= "text" name ="name" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">
班主任编号</td><td><center> <input type= "text" name ="Tid" ></center></td></tr>
<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">班主任名称	</td>
 <td><center><input type= "text" name ="Tname" ></center></td></tr>
<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">提交	</td>
 <td><center><input type ="submit" name= "Submit" value ="提交" ></center></td></tr>

</table>
</form>


<?php
if (isset ($_POST[ 'Submit']))
{
$id=$_POST[ 'id'];
$name=$_POST[ 'name'];
$Tid=$_POST[ 'Tid'];
$Tname=$_POST[ 'Tname'];

require "fun.php";
$sql= "insert into class values('$id','$name',null,null)" ;
$sql1="insert into teacher values('$Tid','$Tname',null,null)";
mysql_query($sql);
if(mysql_affected_rows()<0)
{
	echo "<script language='javascript'>alert('添加失败');</script>";
}
else{
mysql_query($sql1);
if(mysql_affected_rows()<0)
	echo "<script language='javascript'>alert('添加失败');</script>";
else
	echo "<script language='javascript'>alert('添加成功');location.href='dep.php'</script>";
}
}
?>
</body>
</html>
