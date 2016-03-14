<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
   
   var students = new Array('john', 'ron', 'golf', 'rian', 'angela');

   //чтобы удалить несколько эл-ов массива, использ-ся метод splice. 
   //указыв-ся с какого эл-та удалять и сколько начиная с него

   students.splice(1,1);
   document.write(students + '<br>');

   //добавление эл-ов в массив - при помощи той же фун-ции, указ-ся номер эл-та
   //после кот-го будет добавлен новый, затем запятая(и -0- говорящий о том, что ничего удалять не нужно, затем эл-ты кот-е нужно добавить) 

  students.splice(2,0,'pupkin','petrov');
  document.write(students + '<br>'); 

  //ещё один вариант испол-я - замена 
  students.splice(0,1,'scarlet'); 
  document.write(students);

  
</script>

</body>
</html>