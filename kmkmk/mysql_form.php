<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>mysql_form</title>
	
</head>
<body>

<form action="insert.php" method="post" name="form">
<p>Введите имя сотрудника:<br><input name="name" type="text" size="20" maxlength="40"></p>
<p>Введите фамилию:<br><input name="lastname" type="text" size="20" maxlength="40"></p>
<p>Должность:<br><input name="dol" type="text" size="20" maxlength="40"></p>
<p><input name="submit" type="submit" value="Занести нового сотрудника в базу"></p>

</body>
</html>