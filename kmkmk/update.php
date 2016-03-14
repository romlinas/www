<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Update</title>
	
</head>
<body>

<?php

$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("UPDATE firma SET name='Егор',lastname='Егоров' WHERE id='6'");


if($result == 'true'){
    echo "Информация в базе  обнавлена успешно!";
}

else{
    echo "Информация не обнавлена(";
}


?>
</body>
</html>
