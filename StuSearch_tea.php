<html>
<head>
<title>学生信息查询</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
.STYLE2 {font-size: 15px; font-family: "幼圆";color:"#800080";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align=center><br><font face="幼圆" size="5" color="#008000"><b>学生信息查询</b></font></div></br>

<form action="StuSearch_tea.php" method="get" style="margin:0">
<table width="480" border="1" align="center" cellpadding=0 cellspacing=0>
<tr>
	<td height="10" class="STYLE1" bgcolor="#CCCCCC">学号:</td>
	<td><input name="StuNumber" size="13" type="text"></td>
	<td class="STYLE1" bgcolor="#CCCCCC">姓名:</td>
	<td><input type="text" size="13" name="StuName"></td>

	<td bgcolor="#CCCCCC" align="center">
	<input type="submit" name="Query" class="STYLE1" value="查询"></td>
</tr>
</table>
</form>



<?php
@include "StuQuery1.php";							//包含StuQuery.php页面
?>
<br>

</body>
</html>
