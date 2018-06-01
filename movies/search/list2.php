<style type="text/css">
<!--
body {
	background-color: #00CCFF;
}
-->
</style>
<a href="../index.php">管理员登陆</a>
<div align="center">
  <h1>图书查询</h1>
</div>
<form action="list2.php" method="post"> 
  <div align="center">关键字：
    <input type="text" name="keyword" /> 
	    <select name="select">
        <option value="1">类别</option>
        <option value="2">电影名</option>
        <option value="3">国家</option>
        <option value="4">上映年份</option>
        <option value="5">演员</option>
        <option value="6">租金</option>
    </select>
	<input type="submit" value="查询"/>
   <a href="adsearch2.php">高级查询</a>
  </div>
</form>
<div align="center">

<?php
header("content-type:text/html;charset=utf-8");         //设置编码

$db=mysqli_connect("localhost","root","123456");
mysqli_query($db,'SET NAMES UTF8');
mysqli_select_db($db,"movies");
$s1 = $_POST['keyword'];
$i = 1;

switch($_POST['select'])
{
case 1:
$result=mysqli_query($db,"select * from Films where 
(FilmCategory='$s1' or '$s1'='') ");
break;
case 2:
$result=mysqli_query($db,"select * from Films where 
(FilmName='$s1' or '$s1'='')");
break;
case 3:
$result=mysqli_query("select * from Films where 
(country='$s1' or '$s1'='')");
break;
case 4:
$result=mysqli_query($db,"select * from Films where 
(year>='$s1' or '$s1'='') and 
(year<='$s1' or '$s1'='')");
break;
case 5:
$result=mysqli_query($db,"select * from Films where 
(actor='$s1' or '$s1'='')");
break;
case 6:
$result=mysqli_query($db,"select * from Films where 
(price>='$s1' or '$s1'='') and 
(price<='$s1' or '$s1'='')");
break;
}

echo "<table>";
while($row=mysqli_fetch_array($result))
{
	if($i == 1)
	{
		echo "<tr>";
		echo "<td>电影编号</td><td>电影名</td><td>类别</td><td>国家</td><td>年份</td><td>演员</td><td>租金</td><td>总藏片量</td><td>库存</td>";
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
	echo '<td>'.$row['Total'].'&nbsp&nbsp&nbsp'.'</td>';
	echo '<td>'.$row['Inventory'].'&nbsp&nbsp&nbsp'.'</td>';
	echo "<tr/>";
}
echo "</table>";

?>

<br/>
<br/>
