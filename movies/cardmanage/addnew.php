<html>
<head>
<title>新证信息</title>
</head>

<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<font color="black" size="5">新证信息</font>
<br/>

<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$s1=$_POST['name'];
$s2=$_POST['comp'];
$s3=$_POST['class'];
$sql="insert into cards(CardName,department,job) values('$s1','$s2','$s3')";

if($_POST['name']==null||$_POST['comp']==null||$_POST['class']==null)
{
	header('Location:alack.php');
}
else
{
	if(mysqli_query($db,$sql))
	{
		
//		header('Location:asucceed.php');
		echo "添加成功!";
		echo "<br/>";
		echo "您的借片卡号为:";
		$sql1="select max(CardID) from cards";
		$result=mysqli_query($db,$sql1);
		$row=mysqli_fetch_array($result);
		echo $row['max(CardID)'];
		echo "<br/>";
		echo "<br/>";
	}

	else
	{
		header('Location:addfailed.php');
	}
}

?>
<br/>
<a href="menu.php">返回</a>

</center>
</body>
</html>