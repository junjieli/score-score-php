<?php
require "fun.php";
$DEPName=$_GET['DEPName'];

echo "<br><div align=center class=STYLE2>$DEPName</div></br>";
echo "<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
echo "<tr bgcolor=#CCCCCC height=25 align=center><td>班级编号</td>";
echo "<td>班级名称</td>";
echo "<td>班主任编号</td>";
echo "<td>班主任名称</td>";
echo "<td width=160>操作</td></tr>";


if(!$DEPName)						
{
	for($i=0;$i<10;$i++)
	{
		echo "<tr height=28><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	}
}

else
{
	if($DEPName=="请选择")						//如果未选课程则进行相应提示
	{	echo "<script>alert('请选择院系');location.href='dep.php'</script>";}
	else
	{
		//$total=0;								//初始化总记录数的值为0		
        $depsql="select class.id,class.Name,class.Tid,teacher.TName from class,teacher,dep where dep.Name='$DEPName' and class.did=dep.id AND teacher.Tid=class.Tid";    
	
        $dep_result=mysql_query($depsql);
        $total=mysql_num_rows($XS_result);			//计算总记录数
        while ($row=mysql_fetch_row($dep_result)){
        	
        	list($id,$name,$Tid,$Tname)=$row;
        	//设置一个隐藏控件用于存放dep名
        	echo "<input type=hidden value=$DEPName id='course'>";
        	echo "<tr class=STYLE1 align=center><td width=90>$id</td>";
        	echo "<td width=90>$name</td>";
        	echo "<td width=90>$Tid</td>";
        	echo "<td width=90>$Tname</td>";
        	                                       
        	echo "<td><a href=alterDep.php?id=$id+&name=+$name+&Tid=+$Tid+&Tname=+$Tname>编辑</a>&nbsp;";
        	echo "<a href=deleteDep.php?id=$id+&Tid=+$Tid>删除</a></td>";
      
}  echo "</tr></table>";  
}}
?>















