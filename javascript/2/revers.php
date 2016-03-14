<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
var cars = ['audi', 'bmw', 'opel'];
//массив выведится в обратном порядке
cars.reverse();
document.write(cars  + '<br>');

// сортировка массива
var cars = ['audi','opel', 'bmw'];
document.write(cars.sort() + '<br>');

//этот метод позв-т уст-ть необх-й разд-ль между эл-ми мас-а
var cars = ['audi','opel', 'bmw'];
document.write(cars.join("-") + '<br>');

//этот м-д объединяет массивы(добавляет запятую между ними)
var cars = ['audi','opel', 'bmw'];
var cars2 = ['volvo','mazda', 'mercedes', 'reno'];
document.write(cars.concat(cars2) + '<br>');

//также этот м-д позв-т вырезать опр-е эл-ты из мас.(от к-о и до к-го)
document.write(cars2.slice(0,1));

</script>


</body>
</html>