<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>insert</title>
	
</head>
<body>

<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['lastname'])){
    $lastname = $_POST['lastname'];
}
if(isset($_POST['dol'])){
    $dol = $_POST['dol'];
}

$db = mysql_connect("localhost","Алекс","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("INSERT INTO firma (name,lastname,dol) VALUES('$name','$lastname','$dol')",$db);

if($result == 'true'){
    echo "Информация добавлена успешно!";
}

else{
    echo "Информация не добавлена(";
}
?>
</body>
</html>
