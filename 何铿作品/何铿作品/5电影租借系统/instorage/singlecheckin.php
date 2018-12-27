<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db = mysqli_connect("localhost","root","123456");
mysqli_query($db,'SET NAMES UTF8');
mysqli_select_db($db,"movies");

if($_POST['id']==null ||$_POST['name']==null ||  $_POST['class']==null || $_POST['year']==null || $_POST['actor']==null || $_POST['country']==null || $_POST['pricess']==null || $_POST['numberss']==null)
	header('Location:singleerror.php');
else
{
	$s1=$_POST['id'];
	$s2=$_POST['name'];
	$s3=$_POST['class'];
	$s4=$_POST['year'];
	$s5=$_POST['actor'];
	$s6=$_POST['country'];
	$s7=$_POST['pricess'];
	$s8=$_POST['numberss'];
	$s9=$_POST['language'];

	$sql1="select * from Films where FilmID = '$s1' ";
	//$sql1="select * from Films where FilmID = '$s1' and FilmName = '$s2' and FilmCategory = '$s3' and year = '$s4' and actor = '$s5'  and country = '$s6' and price = '$s7' and language = '$s9'";
	$result=mysqli_query($db,$sql1);
	$i=1;
	echo "123";
	while($row=mysqli_fetch_array($result))
	{
		
		if($row['FilmName'] == $_POST['name'])
		{
			mysqli_query($db,"update Films set Total=Total+$s7 where FilmID = '$s1' and FilmName = '$s2' and FilmCategory = '$s3' and year = '$s4' and actor = '$s5'");
			mysqli_query($db,"update Films set Inventory=Inventory+$s7 where FilmID = '$s1' and  FilmName = '$s2' and FilmCategory = '$s3'");
			$i=0;
		
		}
	}
	if($i==1)
	{
		
		mysqli_query($db,"insert into Films values ('$s1', '$s3', '$s2', '$s4', '$s5', '$s7', '$s8', '$s8', '$s6','$s9')");
	}

	header('Location:singlessucceed.php');
}

?>