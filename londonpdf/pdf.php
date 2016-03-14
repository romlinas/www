<?php define('FPDF_FONTPATH','font/'); 

require('fpdf.php'); 
require('pdf.newclass.php')

//форматы записи методов класса FPDF
// Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, int fill [, mixed link]]]]]]])

// Image(string file, float x, float y, float w [, float h [, string type [, mixed link]]])

$header = array("Наименование","Розн.","Опт.");
$price=new Price(); 
$price->Open(); 

//Создадим экземпляр класса 
// $price = new FPDF(); 

//Получим массив данных из файла в $data 
$data = $price->LoadData("pdf.csv"); 

$price->PrintTitle('Прайс-лист','logo.jpg','Компания "ALKO SELL"'); 

//Подключаем кириллический шрифт 
// SetFont(string family [, string style [, float size]])

//определяется 1-н раз в скрипте
$price-> AddFont('TimesNewRomanPSMT','','times.php'); 
//можно определять параметры текста в разныхастях скрипта
$price-> SetFont('TimesNewRomanPSMT','',12); 

//
 $price->AliasNbPages([string alias]);
//Добавляем страничку в документ 
$price->AddPage();

//Выводим заголовок, используя написанный нами метод в файле класса //price.class.php 
$price->PrintTitle('Прайс-лист','logo.jpg','Компания "ALKO SELL"'); 

//Нарисуем таблицу. Аргументами метода являются массив наименований 
// столбцов и массив данных из файла pdf.csv 
$price->ImprovedTable($header,$data); 

//Выводим документ в браузер 
// Output([string file [, boolean download]])
// file - имя файла,
// арг. download указ-т, что файл должен быть сохр на сервере (знач-е false) или у пользователя (при установке true выводится диалог "Сохранить как").
// 3 вар-та испол-я метода
$price->Output(); //открыть в окне браузера
$price->Output("AlkoPrice.pdf", true);//выведет "сохранить как",сохр-ся у польз-ля
$price->Output("AlkoPrice.pdf", false);//сохран-ся на местном сервере

//также нухно установить расширение (extension), чтобы происходило сжатие полученных файлов, изначально происходит попытка



?>