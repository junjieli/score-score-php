<html>
<head>
<title>学生成绩查询</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
-->
</style>
</head>
<body bgcolor="D9DFAA"><br>
<div align="center"><font face="幼圆" size="5" color="#008000">
			   <b>学生成绩查询</b></font></div><br>
<form name="frm1" method="post" action="ShowStuKC.php" style="margin:0">
<table width="500" align="center">
<tr><td width="60"><span class="STYLE1">学号:</span></td>
	<td width="160"><input name="StuNum" type="text" size="20"></td>
	<td width="60"><span class="STYLE1">姓名:</span></td>
	<td width="160"><input name="StuName" type="text" size="20"></td>
	<td><input type="submit" name="query" class="STYLE1" value="查询"></td>
	<td>&nbsp;</td></tr>
</table>
</form>
<?php
include "SearchScore.php";							//包含SearchScore.php页面
?>
</body>
</html>









