<html>
<head>
<title>借阅证一览表</title>
</head>
<center>
<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<font color="black" size="5"> 借书证</font><br/>
<?php
header("content-type:text/html;charset=utf-8");         //设置编码
$db=mysqli_connect("localhost","root","123456");
mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$sql="select * from cards";
$result=mysqli_query($db,$sql);
$i = 1;

echo "<table>";
while($row=mysqli_fetch_array($result))
{
	if($i == 1)
	{
		echo "<tr>";
		echo "<td>借阅证号码</td><td>姓名</td><td>工作单位</td><td>职业</td>";
		echo "</tr>";
		$i = 0;
	}
	echo "<tr>";	
	echo '<td>'.$row['CardID'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['CardName'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['department'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['job'].'&nbsp&nbsp&nbsp'.'</td>';
	echo "<tr/>";
}
echo "</table>";


?>

<br/>
<br/>
<a href="menu.php">返回</a>

</center>
</html>