<html>
<head>
<title>�༶����</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
.STYLE2 {font-size: 22px; font-family: "����_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">

</head>
<body bgcolor="D9DFAA">
<div align="center"><font face="��Բ" size="5" color="#008000"><b>�༶����</b></font></div><br>

<form action="class.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="100" class="STYLE1" bgcolor="#CCCCCC">�༶����:</td>
	<td width=50><select name="cName" class="STYLE1" >
				<option value="��ѡ��">��ѡ��</option>
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
	<input type="submit" name="class1" class="STYLE1" value="����"></td>
</td>	
</tr></table>
<?php
@include "classtable.php";						
?>	
</form>
</body>
</html>
