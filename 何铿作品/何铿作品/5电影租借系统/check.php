<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$s1=$_POST['name'];

if($_POST['name'] == null)
	header('Location:lackname.php');
else if($_POST['password'] == null)
	header('Location:lackpassword.php');
else
{
	$sql="select * from admin where AdminID ='$s1'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result);

	if($row['password']==$_POST['password'])
	{
		header('Location:succeed.php');
	}
	else
	{
		header('Location:failed.php');
	}
}

?>