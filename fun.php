<?php
$server="localhost";								//��������
$user="root";									//�û���
$password="123";								//����
$database="stu";								//Ҫ���ӵ����ݿ�
$conn=mysql_connect($server,$user,$password);			//���ӷ�����
mysql_select_db($database,$conn);					//�����ݿ�
mysql_query("SET NAMES gb2312");					//�����ַ���
?>
