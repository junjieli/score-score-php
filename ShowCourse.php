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
			   <b>课程信息查询</b></font></div><br>
			   
<form name="frm1" method="post" action="ShowCourse.php" style="margin:0">
<table width="500" align="center">
<tr><td width="100"><span class="STYLE1">课程代码:</span></td>
	<td width="160"><input name="Num" type="text" size="20"></td>
	<td width="100"><span class="STYLE1">课程名:</span></td>
	<td width="160"><input name="Name" type="text" size="20"></td>
	<td><input type="submit" name="query" class="STYLE1" value="查询"></td>
	<td>&nbsp;</td></tr>
</table>
</form><br>
<center><a href=addCourse.php>需要添加课程信息?请点击</a></center>
<br>
<?php
include "SearchCourse.php";							//包含SearchScore.php页面
?>



<br>
</body>
</html>


