<html>
<head>
<title>学生信息查询</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
.STYLE2 {font-size: 22px; font-family: "楷体_GB2312";color:"#0000FF";}
-->
</style>
<meta http-equiv="Content-type" content="text/html; charset=gb2312">
</head>
<body bgcolor="D9DFAA">
<div align="center"><br><font face="幼圆" size="5" color="#008000"><b>成绩信息录入</b></font></div><br>
<form action="AddStuScore.php" method="get" style="margin:0">
<table width="450" align="center">
<tr><td width="60" class="STYLE1" bgcolor="#CCCCCC">课程名:</td>
	<td width=50><select name="KCName" class="STYLE1" >
				<option value="请选择">请选择</option>
			
	<?php
	require "fun.php";
	$kc_sql="select distinct Name from course";				//查找课程名
	$kc_result=mysql_query($kc_sql);
	while($kc_row=mysql_fetch_array($kc_result))
	{
		echo "<option>".$kc_row['Name']."</option>"; 		//输出课程名到下拉框中
	}
	?>
			</select></td>	
		  <td width="60" class="STYLE1" bgcolor="#CCCCCC">专业:</td>
    <td width=50><select name="ZYName" class="STYLE1" >
                  <option value="请选择">请选择</option>
     <?php
    $zy_sql= "select distinct class.Name FROM class,student WHERE class.id=student.cid";   
    $zy_result=mysql_query($zy_sql);
     while( $zy_row=mysql_fetch_array($zy_result))
    {
          echo "<option>".$zy_row[ 'Name' ]."</option>" ;               //输出专业名到下拉框中
    }
     ?>
    </select></td>         						
<td width="60" align="center">
	<input type="submit" name="Query" class="STYLE1" value="添加"></td></tr>
</table>
</form>
<?php
@include "InsertScore.php";								//包含InsertScore.php页面
?>			
</body>
</html>
