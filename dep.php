<html>
<head>
<title>院系管理</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
.STYLE2 {font-size: 22px; font-family: "楷体_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="幼圆" size="5" color="#008000"><b>院系管理</b></font></div>
<form action="dep.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="60" class="STYLE1" bgcolor="#CCCCCC">院系名称:</td>
	<td width=50><select name="DEPName" class="STYLE1" >
				<option value="请选择">请选择</option>
<?php
	require "fun.php";
	$dep_sql="select distinct Name from dep";				//查找课程名
	$dep_result=mysql_query($dep_sql);
	while($dep_row=mysql_fetch_array($dep_result))
	{
		echo "<option>".$dep_row['Name']."</option>"; 		//输出课程名到下拉框中
	}
	?>
</select></td>	
<td width="60" align="center">
	<input type="submit" name="dep" class="STYLE1" value="查找"></td></tr>
</table>
<?php
@include "deptable.php";						
?>	
</form>

<center><a href=addDep.php>需要添加院系基本信息?请点击</a></center>
<br>
</body>
</html>











