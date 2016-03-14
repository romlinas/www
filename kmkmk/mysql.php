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

/* применяем  условия AND, OR
$result = mysql_query("SELECT  *  FROM  firma WHERE id='2'  AND name='Иван' ",$db);
/*$result = mysql_query("SELECT * FROM firma",$db);*/

/* применяем ORDER BY-сортировка по алфавиту
$result = mysql_query("SELECT * FROM firma ORDER BY name",$db);*/

/* применяем DESC - сортировка в обратном порядке
$result = mysql_query("SELECT * FROM firma ORDER BY name DESC",$db);*/

/* применяем LIMIT- ограничение на кол-во выводимых записей  */
$result = mysql_query("SELECT * FROM firma",$db);


$myrow = mysql_fetch_array($result);

do{
	/* 1-й способ
    echo "Сотрудник N -".$myrow['id']."<br>";
	echo  $myrow['name']."<br>";
	echo  $myrow['lastname']."<br>";
	echo  $myrow['dol']."<br><br>";
    
   2-й способ*/

 printf ("Сотрудник Nr- %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['dol']);   
    
}
while($myrow = mysql_fetch_array($result));



/*echo $myrow["dol"];
echo $myrow["lastname"];*/

/*$myrow = mysql_fetch_array($result);
echo $myrow["name"]."<br>";

$myrow = mysql_fetch_array($result);
echo $myrow["name"];*/

?>

 
</body>
</html>