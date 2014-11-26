<?php
require "fun.php";
$StuNumber=@$_GET['StuNumber'];   		  		
$StuName=@$_GET['StuName'];       		

//生成sql语句的getsql函数
function getsql($StuNum,$StuNa,$Pro)
{
	$sql="select * from student where ";
	$note=0;
	if($StuNum)
	{
		$sql.="id like '%$StuNum%'";
		$note=1;
	}
	if($StuNa)
	{
		if($note==1)
			$sql=" and Sname like '%$StuNa%'";
		else
			$sql.="Sname like '%$StuNa%'";
		$note=1;
	}

	if($note==0)
	{
		$sql="select * from student";
	}
	return $sql;
}

$sql=getsql($StuNumber, $StuName);		//得到查询语句

$result=mysql_query($sql);
$total=mysql_num_rows($result);
$page=isset($_GET['page'])?intval($_GET['page']):1;	//获取地址栏中page的值，不存在则设为1
$num=12;                                     	//每页显示12条记录
$url='StuSearch.php';							//本页URL
//页码计算
$pagenum=ceil($total/$num);					//获得总页数，也是最后一页
$page=min($pagenum,$page);					//获得首页
$prepg=$page-1;								//上一页
$nextpg=($page==$pagenum? 0: $page+1);		 	//下一页
$new_sql=$sql." limit ".($page-1)*$num.",".$num;		//按每页记录数生成查询语句
$new_result=mysql_query($new_sql);
if($new_row=mysql_fetch_array($new_result))
{
	//若有查询结果，则以表格形式输出学生信息
	echo "<br><center><font size=5 face=楷体_GB2312 color=#0000FF>
			学生信息查询结果</font></center><br>";
	echo "<table width=480 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
	echo "<tr bgcolor=#CCCCCC><td>学号</td>";
	echo "<td>专业代号</td>";
	echo "<td>姓名</td>";
	echo "<td>性别</td>";
	echo "<td>出生时间</td>";
	echo "<td>总学分</td>";
	echo "<td>操作</td></tr>";
			
	do
	{
		list($id,$cid,$Sname,$Sex,$Birth,$Zxf)=$new_row;
		//设置学号超链接
		echo "<tr><td>$id</td>";
		echo "<td>$cid</td>";//输出专业
		echo "<td>$Sname</td>";
		  	echo "<td>$Sex</td>";
		  	$timeTemp=strtotime($Birth);     		//将日期时间解析为UNIX时间戳
		  	$time=date("Y-n-j",$timeTemp); 			//用date函数将时间转换为“年-月-日”形式
		  	echo "<td>$time</td>";				//输出出生日期				
		  	echo "<td>$Zxf</td>";				//输出总学分
		  	echo "<td><a href=deleteBasic.php?id='$id'>删除</a></td>";
		  	echo "</tr>";
	}while($new_row=mysql_fetch_array($new_result));
	echo "</table>";
	//开始分页导航条代码
	$pagenav="";
		  	if($prepg)
		  	/*此处代码应处于同一行，为了美观分为两行，实际编写时不能分开，下同*/
		  	$pagenav.="<a href='$url?page=$prepg&StuNumber=$StuNumber
					&StuName=$StuName&select=$Project'>上一页</a> ";
					for($i=1;$i<=$pagenum;$i++)
					{
						if($page==$i) 	$pagenav.=$i." ";
						else
						$pagenav.=" <a href='$url?page=$i&StuNumber=$StuNumber
						&StuName=$StuName&select=$Project'>$i</a>";
						}
						if($nextpg)
							$pagenav.=" <a href='$url?page=$nextpg&StuNumber=$StuNumber
							&StuName=$StuName&select=$Project'>下一页</a>";
							$pagenav.="共(".$pagenum.")页";
						//输出分页导航
	echo "<br><div align=center class=STYLE1><b>".$pagenav."</b></div>";
}
						else
      echo "<script>alert('无记录!');location.href='StuSearch.php';</script>";
      ?>




