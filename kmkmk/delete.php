<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>delete</title>
	
</head>
<body>

<?php

$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("DELETE FROM firma WHERE id='3'");

if ($result == 'true'){
    echo "Всё нормально";
}    
else{
    "Не хорошо(";
}

?>
</body>
</html>
