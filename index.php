<html>
<head>
<title>外部变量演示</title>
</head>
<body>
<!-- 产生POST外部变量的HTML表单form1 -->
<form action="" method="post">
    学号:<input type="text" name="XH"><br>
    姓名:<input type="text" name="XM"><br>
   <input type="submit" name="postmethod" value="POST方法提交">
</form>
<!-- 产生GET外部变量的HTML表单form2 -->
<form action="" method="get">
    性别:<input name="SEX" type="radio" value="男">男
        <input name="SEX" type="radio" value="女">女<br>
    专业:<select name="ZY">
          <option>计算机</option>
          <option>软件工程</option>
          <option>信息管理</option>
        </select><br>
   <input type="submit" name="getmethod" value="GET方法提交">
</form>
</body>
</html>
<?php
//使用isset()函数判断是否是POST方法提交
if(isset($_POST['postmethod']))
{
		$XH=$_POST['XH'];						//获取学号值
		$XM=$_POST['XM'];						//获取姓名值
		echo "接收POST变量：<br>";
		echo "学号：".$XH."<br>";
		echo "姓名：".$XM."<br>";
}
//使用isset()函数判断是否是GET方法提交
if(isset($_GET['getmethod']))
{
		$SEX=$_GET['SEX'];						//GET方法获取性别值
		$ZY=$_GET['ZY'];						//GET方法获取专业值
		echo "<br>接收GET变量：<br>";
		echo "性别：".$SEX."<br>";
		echo "专业：".$ZY."<br>";
}
	echo "<br>接收REQUEST变量：<br>";			//将REQUEST方法获取的变量列在最后
	echo "学号：".@$_REQUEST['XH']."<br>";			//使用REQUEST方法获取学号
	echo "姓名：".@$_REQUEST['XM']."<br>";			//使用REQUEST方法获取姓名
	echo "性别：".@$_REQUEST['SEX']."<br>";			//使用REQUEST方法获取性别
	echo "专业：".@$_REQUEST['ZY']."<br>";			//使用REQUEST方法获取专业
?>
