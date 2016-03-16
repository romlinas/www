<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
//св-ва и методы массивов

//узнаем кол-во эл-ов в этом массиве
var days = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];

//за это отвечает св-во length(длина)
var count = days.length;
document.write("колличество эл-в в массиве - " + count + "<br>");
document.write("последний в массиве - " + days[days.length - 1] + "<br>");



//метод добавления нового эл-та в массив
var students = [ "George","John", "Wiliam"];

//можно добавить либо в конец масс. либо в начало
//в конец push
students.push("Jack");

// в начало
students.unshift("Loky");

//методы удаления эл-ов из мас-ва
//удаляет последний эл-т
students.pop();

document.write(students + "<br>");

var count2 = students.length;
document.write(count2 + "<br>");

//вывести последний эл-т
document.write("Last student - " + students[students.length - 1] + "<br>");

//метод кот-й удаляет эл-т из начала массива
students.shift();//первый уд-ся по умолч.
students.shift();
students.shift();
document.write(students + "<br>");
document.write(students[0]);
   
   var students = new Array('john', 'ron', 'golf', 'rian', 'angela');

   //чтобы удалить несколько эл-ов массива, использ-ся метод splice. 
   //указыв-ся с какого эл-та удалять и сколько начиная с него

   students.splice(1,1);
   document.write(students + '<br>');

   // добавление эл-ов в массив - при помощи той же фун-ции, указ-ся номер эл-та, после кот-го будет добавлен новый, затем запятая(и -0- говорящий о том, что ничего удалять не нужно, затем эл-ты кот-е нужно добавить) 

  students.splice(2,0,'pupkin','petrov');
  document.write(students + '<br>'); 

  //ещё один вариант испол-я - замена 
  students.splice(0,1,'scarlet'); 
  document.write(students);

  
</script>

</body>
</html>