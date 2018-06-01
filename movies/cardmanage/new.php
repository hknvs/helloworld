<html>
<head>
<title>添加借阅证</title>
</head>
<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>
<p>&nbsp;</p>
<p>&nbsp;</p>

<body>
<center>
<form method=POST action="addnew.php">

  <p><font size="5">请输入个人信息</font><br/>
      <br/>
      <br/>
      <b><font color="black" size="3">姓名:</font>
    <input type="text" name="name">
    <b><font color="red" size="3">*</font>
      <br/>
      <b><font color="black" size="3">工作单位:</font>
    <input type="text" name="comp">
    <b><font color="red" size="3">*</font>
      <br/>
      <b><font color="black" size="3">类别:</font>
    <input type="text" name="class">
      <b><font color="red" size="3">*</font>
	  <br/>（S为学生,T为教师）
      <br/>
      <input type=submit value="确认添加">
      <br/>
      <br/>
      <br/>
      <a href="menu.php">返回</a>    </p>
  </form>
</center>
</body>
</html>