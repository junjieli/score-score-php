<?php

function collect_data()
{
	require "fun.php";
	$sql="select * from admin";
	$result=mysql_query($sql);
	$colum=mysql_fetch_array($result);
	return  $colum;
}
?>

