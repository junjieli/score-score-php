<html>
<head>
<title>Ժϵ����</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
.STYLE2 {font-size: 22px; font-family: "����_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="��Բ" size="5" color="#008000"><b>Ժϵ����</b></font></div>
<form action="dep.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="60" class="STYLE1" bgcolor="#CCCCCC">Ժϵ����:</td>
	<td width=50><select name="DEPName" class="STYLE1" >
				<option value="��ѡ��">��ѡ��</option>
<?php
	require "fun.php";
	$dep_sql="select distinct Name from dep";				//���ҿγ���
	$dep_result=mysql_query($dep_sql);
	while($dep_row=mysql_fetch_array($dep_result))
	{
		echo "<option>".$dep_row['Name']."</option>"; 		//����γ�������������
	}
	?>
</select></td>	
<td width="60" align="center">
	<input type="submit" name="dep" class="STYLE1" value="����"></td></tr>
</table>
<?php
@include "deptable.php";						
?>	
</form>

<center><a href=addDep.php>��Ҫ���Ժϵ������Ϣ?����</a></center>
<br>
</body>
</html>











