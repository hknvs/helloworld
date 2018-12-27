<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$s1=$_POST['B_id'];
$s2=$_POST['C_id'];


if($_POST['B_id'] == null)
	header('Location:bnlack.php');
else if($_POST['C_id'] == null)
	header('Location:clack.php');
else
{
	$sql="select * from borrow where FilmID = '$s1' and CardID = '$s2'";
	$result=mysqli_query($db,$sql);
	$i=1;
	while($row=mysqli_fetch_array($result))
	{	
		$i=0;
		mysqli_query($db,"delete from borrow where FilmID = '$s1' and CardID = '$s2'");
		mysqli_query($db,"update Films set Inventory = Inventory + 1 where FilmID = '$s1'");
		header('Location:returnsucceed.php');
	}

}
if($i ==1)
	header('Location:returnfailed.php');

?>