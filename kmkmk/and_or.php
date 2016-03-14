<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>and_or</title>
	
</head>
<body>

<?php


$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

/* применяем  условия AND, OR*/
$result = mysql_query("SELECT  *  FROM  firma WHERE id='2'  AND name='Иван' ",$db);
$myrow = mysql_fetch_array($result);

do{
	/* 1-й способ*/
    echo "Сотрудник N -".$myrow['id']."<br>";
	echo  $myrow['name']."<br>";
	echo  $myrow['lastname']."<br>";
	echo  $myrow['dol']."<br><br>";
    
}
while($myrow = mysql_fetch_array($result));



?>
</body>
</html>