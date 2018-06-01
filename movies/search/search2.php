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
        <option value="2">电影名</option>
        <option value="3">国家</option>
        <option value="4">年份</option>
        <option value="5">演员</option>
        <option value="6">租金</option>
    </select>
	<input type="submit" value="查询"/>
   <a href="adsearch2.php">高级查询</a>
  </div>
</form>
