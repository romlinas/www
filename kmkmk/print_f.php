<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>printf</title>
	
</head>
<body>

<?php

$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("SELECT * FROM firma ORDER BY name",$db);
$myrow = mysql_fetch_array($result);

do{
printf ("Сотрудник Nr- %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['dol']); 
}
while($myrow = mysql_fetch_array($result));
 
?>
</body>
</html>