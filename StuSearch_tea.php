<html>
<head>
<title>ѧ����Ϣ��ѯ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
.STYLE2 {font-size: 15px; font-family: "��Բ";color:"#800080";}
-->
</style>
</head>
<body bgcolor="D9DFAA">
<div align=center><br><font face="��Բ" size="5" color="#008000"><b>ѧ����Ϣ��ѯ</b></font></div></br>

<form action="StuSearch_tea.php" method="get" style="margin:0">
<table width="480" border="1" align="center" cellpadding=0 cellspacing=0>
<tr>
	<td height="10" class="STYLE1" bgcolor="#CCCCCC">ѧ��:</td>
	<td><input name="StuNumber" size="13" type="text"></td>
	<td class="STYLE1" bgcolor="#CCCCCC">����:</td>
	<td><input type="text" size="13" name="StuName"></td>

	<td bgcolor="#CCCCCC" align="center">
	<input type="submit" name="Query" class="STYLE1" value="��ѯ"></td>
</tr>
</table>
</form>



<?php
@include "StuQuery1.php";							//����StuQuery.phpҳ��
?>
<br>

</body>
</html>
