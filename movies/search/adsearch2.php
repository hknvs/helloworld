<style type="text/css">
<!--
body {
	background-color: #00CCFF;
}
.STYLE1 {font-size: xx-small}
-->
</style>
<a href="../index.php">管理员登陆</a>
<div align="center">
  <h1>电影查询</h1>
</div>
<form method=POST action="adlist2.php">


  <div align="center">
    <p><br/>
      <br/>
类别：
<input type="text" name="classss">
    </p>
    <p>书电影名：
      <input type="text" name="namess">
    </p>
    <p>国家：
      <input type="text" name="country">
    </p>
    <p>年份：
      <input type="text" name="year1">
    </p>
    <p>至
      <input type="text" name="year2">
    </p>
    <p>演员：
      <input type="text" name="actor">
    </p>
    <p>租金：
      <input type="text" name="price1">
    </p>
    <p>至
      <input type="text" name="price2">
    </p>
    <p>
      <input type=submit value="查询">
      <br/>
      <br/>
      <a href="search2.php">返回</a> </p>
  </div>
</form>

