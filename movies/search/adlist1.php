<html>
<head>
<title>电影查询</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>


<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>

<div align="center">
  <h1>电影查询</h1>
</div>
<form action="list1.php" method="post"> 
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
   <a href="adsearch1.php">高级查询</a>
  </div>
</form>
<div align="center">

  <?php
	header("content-type:text/html;charset=utf-8");         //设置编码

$db=mysqli_connect("localhost","root","123456");
mysqli_query($db,'SET NAMES UTF8');
mysqli_select_db($db,"movies");
$i = 1;


$result=mysqli_query($db,"select * from Films where 
(FilmCategory='{$_POST['classss']}' or '{$_POST['classss']}'='') and 
(FilmName like '%{$_POST['name']}%' or '{$_POST['name']}'='') and 
(country like '%{$_POST['country']}%' or '{$_POST['country']}'='') and 
(year>='{$_POST['year1']}' or '{$_POST['year1']}'='') and 
(year<='{$_POST['year2']}' or '{$_POST['year2']}'='') and 
(actor like '%{$_POST['actor']}%' or '{$_POST['actor']}'='') and 
(price>='{$_POST['price1']}' or '{$_POST['price1']}'='') and 
(price<='{$_POST['price2']}' or '{$_POST['price2']}'='')");

echo "<table>";
while($row=mysqli_fetch_array($result))
{
	if($i == 1)
	{
		echo "<tr>";
		echo "<td>电影编号</td><td>电影名</td><td>类别</td><td>国家</td><td>上映年份</td><td>演员</td><td>租金</td><td>总藏片量</td><td>库存</td>";
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
  
 <div align="center"><a href="../menu.php">返回</a></div>
  <br/>
</div>
