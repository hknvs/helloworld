<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db = mysqli_connect("localhost","root","123456");
mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$s1=$_POST['id'];

$sql1="select * from cards where CardID='$s1'";
$result=mysqli_query($db,$sql1);
$row=mysqli_fetch_array($result);

if($_POST['id']==null||$_POST['name']==null)
{
	header('Location:dlack.php');
}
else
{
	if($row['CardName']==$_POST['name'])
	{
		$sql2="delete from cards where CardID='$s1'";
		mysqli_query($db,$sql2);
		header('Location:dsucceed.php');
	}
	else
	{
		header('Location:dfailed.php');
	}
}

?>