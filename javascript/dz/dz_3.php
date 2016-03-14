<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
	var fruit = new Array('Апрельсин', 'Банан', 'Груша');
    var count = fruit.length;
    document.write(fruit + ' - ' + count); 

    fruit.push('яблоко', 'ананас'); 
    document.write('<br>' + fruit);

    fruit.unshift('грейпфрут');
    document.write('<br>' + fruit);

    var count2 = fruit.length;
    document.write('<br>' + count2);
    
    fruit.pop();
    document.write('<br>' + fruit);

    fruit.shift();
    document.write('<br>' + fruit);

</script>

</body>
</html>

<!--1. Создайте массив с фруктами: апельсин, банан, груша.
2. Выведите на экран, сколько на данный момент у вас фруктов в массиве.
3. С помощью методов, изученных в предыдущем уроке, добавьте в конец массива два фрукта - яблоко и ананас, а в начало массива - грейпфрут.
4. Выведите на экран, сколько на данный момент у вас фруктов в массиве.
5. С помощью методов, изученных в предыдущем уроке, удалите из массива последний и первый элемент.
6. Выведите на экран, сколько на данный момент у вас фруктов в массиве.-->