<style type="text/css">
<!--
body {
	background-color: #00CCFF;
}
-->
</style>
<a href="../index.php">管理员登陆</a>
<div align="center">
  <h1>电影查询</h1>
</div>
<form action="list2.php" method="post"> 
  <div align="center">关键字：
    <input type="text" name="keyword" /> 
	    <select name="select">
        <option value="1">类别</option>
        <option value="2">书名</option>
        <option value="3">出版社</option>
        <option value="4">年份</option>
        <option value="5">作者</option>
        <option value="6">价格</option>
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
$i = 1;


$result=mysqli_query($db,"select * from Films where 
(FilmCategory='{$_POST['classss']}' or '{$_POST['classss']}'='') and 
(FilmName like '%{$_POST['namess']}%' or '{$_POST['namess']}'='') and 
(country like '%{$_POST['pub']}%' or '{$_POST['pub']}'='') and 
(year>='{$_POST['year1']}' or '{$_POST['year1']}'='') and 
(year<='{$_POST['year2']}' or '{$_POST['year2']}'='') and 
(author like '%{$_POST['authorss']}%' or '{$_POST['authorss']}'='') and 
(price>='{$_POST['price1']}' or '{$_POST['price1']}'='') and 
(price<='{$_POST['price2']}' or '{$_POST['price2']}'='')");

echo "<table>";
while($row=mysqli_fetch_array($result))
{
	if($i == 1)
	{
		echo "<tr>";
		echo "<td>书号</td><td>书名</td><td>类别</td><td>出版社</td><td>年份</td><td>作者</td><td>价格</td><td>总藏书量</td><td>库存</td>";
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
