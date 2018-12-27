<html>
<head>
<title>借阅图书一览表</title>
</head>
<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">



<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><font color="black" size="5">借阅记录</font>

<center>
  <form method=POST action="borrowlist.php">
  <font color="black" size="3">借阅证卡号:<input type="text" name="id">
  <b>
  <input type=submit value="查询">
  </form>
</center>
<center>

<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_query($db,'SET NAMES UTF8');
mysqli_select_db($db,"movies");
$s1=$_POST['id'];
$sqlp="select * from cards where CardID='$s1'";
$result=mysqli_query($db,$sqlp);
$row=mysqli_fetch_array($result);
$i = 1;


if($_POST['id'] == null)
	header('Location:slack.php');
else if($row['CardID'] != $s1)
	header('Location:Kwrong.php');
else
{
	$sql="select * from borrow, Films where CardID='$s1' and Films.FilmID = borrow.FilmID";
	$result=mysqli_query($db,$sql);
	
	echo "<table>";
while($row=mysqli_fetch_array($result))
{
	if($i == 1)
	{
		echo "<tr>";
		echo "<td>电影编号</td><td>电影名</td><td>类别</td><td>国家</td><td>上映时间</td><td>演员</td><td>租金</td><td>租借时间</td><td>还片期限</td><td>经手管理员ID</td>";
		echo "</tr>";
		$i = 0;
	}
	echo "<tr>";	
	echo '<td>'.$row['FilmID'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['FilmName'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['FilmCategory'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['country'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['year'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['actor'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['price'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['BorrowTime'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['ReturnTime'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['AdminID'].'&nbsp&nbsp&nbsp'.'</td>';
	echo "<tr/>";
}
echo "</table>";

}


?>

<br/>
<br/>
<a href="menu.php">返回</a>

</center>
</html>