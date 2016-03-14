<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Conect_mysql</title>
	
</head>
<body>

<?php

$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("SELECT * FROM firma ORDER BY name LIMIT 2",$db);
$myrow = mysql_fetch_array($result);



?>