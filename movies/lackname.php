<html>
<head>
<title>DVD影片租借管理系统</title>
<style type="text/css">
body {
	background-image: url(index.jpg);
}
.STYLE1 {
	font-size: 50px;
	color: #000000;
}
.STYLE5 {font-size: 24px}
-->
</style></head>

<body> 
<p>&nbsp;</p>
<p align="center" class="STYLE1">欢迎使用DVD影片租借管理系统</p>
<p align="center">&nbsp;</p>
<form action="check.php" method="post">
<table width="289" border="2" align="center">
							<tr>
								<td width="59" height="52"><span id="Label1">用户名</span></td>
							    <td width="138"><input type="text" style="width:130px;" name="name"/></td>
						      <td width="68" rowspan="2">
						         <div align="center">
						           <p>
						             <input type="submit" name="Submit" value="登陆" />
					               </p>
					            </div>
   						      </td>
							</tr>
							<tr>
								<td height="56"><span id="Label2">密  码</span></td>
								<td><input name="password" type="password"  style="width:130px;" /></td>
							</tr>
</table>
</form>
<div align="center"><a href="search/search2.php" class="STYLE5">影片查询</a></div>
</body>
</html>
