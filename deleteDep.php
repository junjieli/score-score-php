
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<?php 
//header("Content-type:text/html;charset=utf-8");
require "fun.php";
$id=$_GET['id'];
$Tid=$_GET['Tid'];

$sql="delete from class where id=$id";
$sql1="delete from teacher where Tid=$Tid";
mysql_query($sql);

if(mysql_affected_rows()<0){
	
	echo "<script language='javascript'>alert('删除失败');window.location='dep.php'</script>";	
}
else{	

    mysql_query($sql1);
    if(mysql_affected_rows()<0)
	echo "<script language='javascript'>alert('删除失败');window.location='dep.php'</script>";
else
	echo "<script language='javascript'>alert('删除成功');window.location='dep.php'</script>";

}
?>


<body>
</body>
</html>