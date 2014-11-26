<html>
<head>
<title>班级管理</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
.STYLE2 {font-size: 22px; font-family: "楷体_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">

</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="幼圆" size="5" color="#008000"><b>班级管理</b></font></div><br>

<form action="class.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="100" class="STYLE1" bgcolor="#CCCCCC">班级名称:</td>
	<td width=50><select name="cName" class="STYLE1" >
				<option value="请选择">请选择</option>
<?php
	require "fun.php";
	$class_sql="select distinct Name from class";			
	$class_result=mysql_query($class_sql);
	while($c_row=mysql_fetch_array($class_result))
	{
		echo "<option>".$c_row['Name']."</option>"; 		
	}
?>
	</select></td>	
	<td>
	<input type="submit" name="class1" class="STYLE1" value="查找"></td>
</td>	
</tr></table>
<?php
@include "classtable.php";						
?>	
</form>
</body>
</html>
