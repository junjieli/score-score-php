<html>
<head>
<title>�ⲿ������ʾ</title>
</head>
<body>
<!-- ����POST�ⲿ������HTML��form1 -->
<form action="" method="post">
    ѧ��:<input type="text" name="XH"><br>
    ����:<input type="text" name="XM"><br>
   <input type="submit" name="postmethod" value="POST�����ύ">
</form>
<!-- ����GET�ⲿ������HTML��form2 -->
<form action="" method="get">
    �Ա�:<input name="SEX" type="radio" value="��">��
        <input name="SEX" type="radio" value="Ů">Ů<br>
    רҵ:<select name="ZY">
          <option>�����</option>
          <option>�������</option>
          <option>��Ϣ����</option>
        </select><br>
   <input type="submit" name="getmethod" value="GET�����ύ">
</form>
</body>
</html>
<?php
//ʹ��isset()�����ж��Ƿ���POST�����ύ
if(isset($_POST['postmethod']))
{
		$XH=$_POST['XH'];						//��ȡѧ��ֵ
		$XM=$_POST['XM'];						//��ȡ����ֵ
		echo "����POST������<br>";
		echo "ѧ�ţ�".$XH."<br>";
		echo "������".$XM."<br>";
}
//ʹ��isset()�����ж��Ƿ���GET�����ύ
if(isset($_GET['getmethod']))
{
		$SEX=$_GET['SEX'];						//GET������ȡ�Ա�ֵ
		$ZY=$_GET['ZY'];						//GET������ȡרҵֵ
		echo "<br>����GET������<br>";
		echo "�Ա�".$SEX."<br>";
		echo "רҵ��".$ZY."<br>";
}
	echo "<br>����REQUEST������<br>";			//��REQUEST������ȡ�ı����������
	echo "ѧ�ţ�".@$_REQUEST['XH']."<br>";			//ʹ��REQUEST������ȡѧ��
	echo "������".@$_REQUEST['XM']."<br>";			//ʹ��REQUEST������ȡ����
	echo "�Ա�".@$_REQUEST['SEX']."<br>";			//ʹ��REQUEST������ȡ�Ա�
	echo "רҵ��".@$_REQUEST['ZY']."<br>";			//ʹ��REQUEST������ȡרҵ
?>
