<?php
require "fun.php";
$DEPName=$_GET['DEPName'];

echo "<br><div align=center class=STYLE2>$DEPName</div></br>";
echo "<table width=450 border=1 align=center cellpadding=0 cellspacing=0 class=STYLE1>";
echo "<tr bgcolor=#CCCCCC height=25 align=center><td>�༶���</td>";
echo "<td>�༶����</td>";
echo "<td>�����α��</td>";
echo "<td>����������</td>";
echo "<td width=160>����</td></tr>";


if(!$DEPName)						
{
	for($i=0;$i<10;$i++)
	{
		echo "<tr height=28><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
	}
}

else
{
	if($DEPName=="��ѡ��")						//���δѡ�γ��������Ӧ��ʾ
	{	echo "<script>alert('��ѡ��Ժϵ');location.href='dep.php'</script>";}
	else
	{
		//$total=0;								//��ʼ���ܼ�¼����ֵΪ0		
        $depsql="select class.id,class.Name,class.Tid,teacher.TName from class,teacher,dep where dep.Name='$DEPName' and class.did=dep.id AND teacher.Tid=class.Tid";    
	
        $dep_result=mysql_query($depsql);
        $total=mysql_num_rows($XS_result);			//�����ܼ�¼��
        while ($row=mysql_fetch_row($dep_result)){
        	
        	list($id,$name,$Tid,$Tname)=$row;
        	//����һ�����ؿؼ����ڴ��dep��
        	echo "<input type=hidden value=$DEPName id='course'>";
        	echo "<tr class=STYLE1 align=center><td width=90>$id</td>";
        	echo "<td width=90>$name</td>";
        	echo "<td width=90>$Tid</td>";
        	echo "<td width=90>$Tname</td>";
        	                                       
        	echo "<td><a href=alterDep.php?id=$id+&name=+$name+&Tid=+$Tid+&Tname=+$Tname>�༭</a>&nbsp;";
        	echo "<a href=deleteDep.php?id=$id+&Tid=+$Tid>ɾ��</a></td>";
      
}  echo "</tr></table>";  
}}
?>















