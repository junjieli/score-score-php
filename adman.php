<?php
session_start();
@ $db = new mysqli("localhost","root","123","stu");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
}
$query = "select *  from admin ";
$result = $db ->query($query);
$num_result = $result->num_rows;
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>
<body >
<form name="form1" method="post">
<table width="767" height="324" border="1" align="center">
 
  <tr>
    <td width="110" height="28" >id	</td>
    <td width="136" >����</td>
   <td width="136" >����</td>
  </tr><?php for($i = 0; $i < $num_result; $i++)
	{
	$row = $result->fetch_assoc();
	?>
  <tr> 
    <td ><?php echo stripslashes($row['userid']);?></td>
    <td ><?php echo stripslashes($row['username']);?></td>
    <td ><?php echo stripslashes($row['password']);?></td>

	<td ><a href="delete.php">ɾ��</a></td>
    <td ><a href="change_grade.php">�޸�</a></td>
  </tr>
<?php
	}
	//$result->free();
	$db->close();
	?>
</table>
</form>
</body>
</html>
