<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="">
	
	var contry = ["Italy", "France", "Brazil", "USA", "Mongolia"];
	var people = [10000, 20000, 30000, 40000, 50000];

	document.write(contry[1] + ' - ' + people[1] + '<br>');

	document.write(contry[0] + ' - '+ people[0] + ';' + '<br>' + contry[1] + ' - '+ people[2] + ';' + '<br>' 
	               + contry[3] + ' - '+ people[3] + ';' + '<br>' + contry[4] + ' - '+ people[4] + ';' + '<br>'
	               + contry[5] + ' - '+ people[5] + ';' + '<br>');

	people.pop();
	contry.shift();

	document.write(people);

	people.unshift(5);
	contry.push("Roma");

	document.write('<br>' + people + ' - ' + contry);


</script>

</body>
</html>