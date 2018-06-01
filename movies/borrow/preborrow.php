<html>
<head>
<title>租借影片</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>


<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br/><font color="red" size="5">信息错误</font>
<br/>
<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_query($db,'SET NAMES UTF8');
mysqli_select_db($db,"movies");
$s1=$_POST['B_id'];
$s2=$_POST['C_id'];
$s3=$_POST['A_id'];
$s4=$_POST['password'];
$sqlp1="select * from cards where CardID='$s2'";
$result1=mysqli_query($db,$sqlp1);
$row1=mysqli_fetch_array($result1);

$sqlp2="select * from admin where AdminID='$s3'";
$result2=mysqli_query($db,$sqlp2);
$row2=mysqli_fetch_array($result2);

if($_POST['B_id'] == null)
	header('Location:bidlack.php');
else if($_POST['C_id'] == null)
	header('Location:cidlack.php');
else if($_POST['A_id']==null || $_POST['password']==null)
	header('Location:aidlack.php');
else if($row1['CardID'] != $s2)
	header('Location:KKwrong.php');
else if($row2['password'] != $s4)
	header('Location:Awrong.php');
else
{
	$sql="select * from Films where FilmID = '$s1'";
	$result=mysqli_query($db,$sql);

	$i=1;

	while($row=mysqli_fetch_array($result))
	{
		$i=0;
		if($row['Inventory'] != 0)
		{
			$Date = date("Y-m-d");
			$Date1 = date("Y-m-d", strtotime("$Date"));
			$Date2 = date("Y-m-d", strtotime("$Date+30days"));
			mysqli_query($db,"insert into borrow values('$s1', '$s2', '$Date1', '$Date2', '$s3')");
			mysqli_query($db,"update books set Inventory = Inventory - 1 where FilmID = '$s1'");
			header('Location:borrowsucceed.php');
		}
		else
			$sqlg="select min(ReturnTime) from borrow where FilmID = '$s1'";
			$resultg=mysqli_query($db,$sqlg);
			$rowg=mysqli_fetch_array($resultg);
			
			
			echo "影片无库存，借片失败!";
			echo "<br/>";
			echo "最近还书时间为:";
			echo $rowg['min(ReturnTime)'];
			echo "<br/>";
			echo "<br/>";
	}

}
if($i == 1)
	header('Location:borrowfailed.php');

?>

<br/>
<a href="menu.php">返回</a>

</center>
</body>
</html>