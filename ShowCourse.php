<html>
<head>
<title>ѧ���ɼ���ѯ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
-->
</style>
</head>
<body bgcolor="D9DFAA"><br>
<div align="center"><font face="��Բ" size="5" color="#008000">
			   <b>�γ���Ϣ��ѯ</b></font></div><br>
			   
<form name="frm1" method="post" action="ShowCourse.php" style="margin:0">
<table width="500" align="center">
<tr><td width="100"><span class="STYLE1">�γ̴���:</span></td>
	<td width="160"><input name="Num" type="text" size="20"></td>
	<td width="100"><span class="STYLE1">�γ���:</span></td>
	<td width="160"><input name="Name" type="text" size="20"></td>
	<td><input type="submit" name="query" class="STYLE1" value="��ѯ"></td>
	<td>&nbsp;</td></tr>
</table>
</form><br>
<center><a href=addCourse.php>��Ҫ��ӿγ���Ϣ?����</a></center>
<br>
<?php
include "SearchCourse.php";							//����SearchScore.phpҳ��
?>



<br>
</body>
</html>


