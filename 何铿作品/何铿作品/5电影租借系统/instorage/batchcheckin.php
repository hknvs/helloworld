<html>
<head>
<title>单本入库</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>


<body bgcolor="#CCCCCC" background="../书架.jpg" tracingsrc="../书架.jpg" tracingopacity="100">


<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1><font color="black" size="5">批量入库</h1>
<meta http-equiv="Refresh" content="2;URL=batchin.php"/>

</head>





<?php

$db=mysqli_connect("localhost","root","123456");

mysqli_select_db($db,"movies");
mysqli_query($db,'SET NAMES UTF8');
$s1=$_POST['filepath'];


$sql="LOAD DATA LOCAL INFILE '$s1' INTO TABLE `Films` FIELDS TERMINATED BY ';'  ESCAPED BY '\\' LINES TERMINATED BY '\r\n' " ;



if(mysqli_query($db,$sql)) 
	echo "录入成功！";
	
else echo "录入失败,请重新选择文件";



?>



</center>


</html>