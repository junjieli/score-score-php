
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>


<body bgcolor="D9DFAA">
<form action ="" method= "post"><br><br>
<div align="center"><font face="幼圆" size="5" color="#008000"><b>新增学生基本信息</b></font></div>

<br>
<table width=400 border=1 align=center cellpadding=0 cellspacing=0 >
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">ID</td>
  <td><center><input type= "text" name ="id" ></center></td></tr>

<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">专业id </td>
  <td><center><input type= "text" name ="cid" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">名字 </td>
  <td><center><input type= "text" name ="name" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">性别 </td>
  <td><center><input type= "text" name ="sex" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">出生日期</td>
   <td><center><input type= "text" name ="birth" ></center></td></tr>
<tr><td width="80" class="STYLE1" bgcolor="#CCCCCC">总学分</td>
  <td><center> <input type= "text" name ="zxf" ></center></td></tr>

<tr>
<td width="80" class="STYLE1" bgcolor="#CCCCCC">操作	</td>
 <td><center><input type ="submit" name= "Submit" value ="提交" ></center></td></tr>

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
echo "<script language='javascript'>alert('添加成功');location.href='StuSearch.php''</script>" ;
}
else {
echo "<script language='javascript'>alert('添加失败');'</script>" ;
}
}
?>
  


</body>
</html>