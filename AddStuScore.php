<html>
<head>
<title>ѧ����Ϣ��ѯ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
.STYLE2 {font-size: 22px; font-family: "����_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<div align="center"><br><font face="��Բ" size="5" color="#008000"><b>�ɼ���Ϣ¼��</b></font></div><br>
<form action="AddStuScore.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="60" class="STYLE1" bgcolor="#CCCCCC">�γ���:</td>
	<td width=50><select name="KCName" class="STYLE1" >
				<option value="��ѡ��">��ѡ��</option>
			
	<?php
	require "fun.php";
	$kc_sql="select distinct Name from course";				//���ҿγ���
	$kc_result=mysql_query($kc_sql);
	while($kc_row=mysql_fetch_array($kc_result))
	{
		echo "<option>".$kc_row['Name']."</option>"; 		//����γ�������������
	}
	?>
			</select></td>	
		  <td width="60" class="STYLE1" bgcolor="#CCCCCC">רҵ:</td>
    <td width=50><select name="ZYName" class="STYLE1" >
                  <option value="��ѡ��">��ѡ��</option>
     <?php
    $zy_sql= "select distinct class.Name FROM class,student WHERE class.id=student.cid";   
    $zy_result=mysql_query($zy_sql);
     while( $zy_row=mysql_fetch_array($zy_result))
    {
          echo "<option>".$zy_row[ 'Name' ]."</option>" ;               //���רҵ������������
    }
     ?>
    </select></td>         						
<td width="60" align="center">
	<input type="submit" name="Query" class="STYLE1" value="���"></td></tr>
</table>
</form>
<?php
@include "InsertScore.php";								//����InsertScore.phpҳ��
?>			
</body>
</html>
