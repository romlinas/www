<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>HTML5</title>
  <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="style.css">

  
  
  
  
  
  
    <link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <meta charset="utf-8">

  <script>
  $(function() {
    $( "#slider-range-max" ).slider({
      range: "max",
      min: 1000,
      max: 200000,
      value: 120000,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
        calc();
      }
    });
    $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
  });
  $(function() {
    $( "#slider-range-max2" ).slider({
      range: "max",
      min: 1,
      max: 12,
      value: 3,
      slide: function( event, ui ) {
        $( "#amount2" ).val( ui.value );
        calc();
      }
    });
    $( "#amount2" ).val( $( "#slider-range-max2" ).slider( "value" ) );
  });
 
  function calc(par){
  type = document.cl_form.type.value;
  amount = document.cl_form.amount.value;
  amount2 = document.cl_form.amount2.value;
 
  //var summ;
  var lei ="lei";
  summ = ( Number(amount) / Number(amount2) );
  document.cl_form.summ.value=summ;
  document.getElementById("typetd").innerHTML=type;
  document.getElementById("amounttd").innerHTML=amount;
  document.getElementById("amount2td").innerHTML=amount2;
  document.getElementById("summ").innerHTML=summ.lei;
  return false; 
  }
  </script>
  
  
 

  
 </head>

 
 <body>



<header>
<div name="contacts">    
<div name="center">





<div>
<div>
<img src="images/phone.png"> 
</div>
<h4>TELEFON</h4>
<h5>+373 60 188 439</h5>
</div>

<div>
<div>
<img src="images/mail.png" name="mail"> 
</div>
<h4>EMAIL</h4>
<h5>unitedcapital@mail.ru</h5>
</div>


<div>
<div>
<img src="images/ru.png"> 
</div>
</div>

<div>
<div>
<img src="images/ro.png"> 
</div>

</div>

<div class="logo">

<img src="images/united_foto.png"> 
 

</div>



</div>




</div>


<nav>

<ul>

<li>Principala</li>
<li>Credite</li>
<li>Cerere Online</li>
<li>Conditii</li>
<li>Contacte</li>

</ul>

</nav>
 <div class="backgrond2"></div>
</header>







 <section id="price">
<div>

  
 
 <div>

<div>
<img src="images/1.png"> 
</div>
<h4>1000 - 10000 LEI</h4>
<h5>Vis semper posidonium efficiantur at. 
Eu harum tation delenit has ad has.</h5>
</div>
 
  
 <div>

<div>
<img src="images/car.png"> 
</div>
<h4>20000 - 100000 lei</h4>
<h5>Est ne dicant tritani efficiendi. Ei aliquid 
repudiare vel, ea pro discere eos.</h5>
<button>CREDIT ACUM</button>
</div>



 <div>
<div>
<img src="images/house.png"> 
</div>
<h4>200000 - 1000000 lei</h4>
<h5>Est ne dicant tritani efficiendi. 
Ei aliquid repudiare vel, ea pro discere eos.</h5>
</div>

  
 </div>
 
 </section>


 <section id="calc">
  <div class="calc-left">
 <form name="cl_form">  
<div class="demo">
<p style="display:none">
  <label for="type">Type of rooms:</label>
  <select name="type" id="type" onchange="calc(this.value);"  
  <option selected="selected" value="0">Select...</option>
  <option value="1">Luxe (*1)</option>
  <option value="2">Extra (*2)</option>
  <option value="3">Comfort (*3)</option>
  </select>
</p>
<p>
  <label for="amount">Summa:</label>
  <input type="text" id="amount" onchange="calc(this.value);" style="border:0; background-color:#25282a; color:#fff; text-align:center; border-radius:5px; font-weight:bold; width:50px; float:right;" >
  <br><font style="float:left; display:block; padding-top:10px; color:#888888; font-size:10px;" >1000 lei</font> <font style="float:right; display:block; padding-top:10px; color:#888888; font-size:10px">200000 lei</font> </input>
  
  
</p>
<div id="slider-range-max"></div>
<br>
<p>
  <label for="amount2" >Termen:</label>
  <input type="text" id="amount2" onchange="calc(this.value);" style="border:0; background-color:#25282a; color:#fff; text-align:center; border-radius:5px; font-weight:bold; width:50px; float:right;" >
  <br>
  <font style="float:left; display:block; padding-top:10px; color:#888888; font-size:10px">1 luni</font> <font style="float:right; display:block; padding-top:10px; color:#888888; font-size:10px">12 luni</font> </input>
</p>
<div id="slider-range-max2"></div><br>

<br>
<p >
  <table border="1" cellpadding="3" style="border-collapse: collapse; display:none;">
    <tr>
      <td>
        type: <p id="typetd">0</p>
      </td>
      <td>
        Summa: <p id="amounttd">0</p>
      </td>
      <td>
        Luni: <p id="amount2td">0</p>
      </td>
      <td >
        Rata lunara: <p id="summ">0</p>
      </td>
    <tr>
  </table>
</p>


</div>

<p style="background: #222222;
    color: white; height: 30px; width:100%;">
  <label for="summ" style="width:400px; margin:auto; display:block; padding-top:6px;">Rata lunara:
  <input value="0" name="summ" readonly="readonly" maxlength="10" size="5" type="text" style="background:none !important; float:right; text-align:right; border:none; color:#fff;"></label>
</p>
</form>

<form class="aplica">
<div>
<div>
<label>Nume</label><br>
<input>
</div>

<div>
<label>Prenume</label><br>
<input>
</div>

<div>
<label>Cod Personal</label><br>
<input>
</div>

<div>
<label>Telefon</label><br>
<input>
</div>

<div id="button">
<input type="submit" value="APLICA ONLINE">
</div>
</div>
</form>





</div>


<div class="calc-right">

<?php



$languages = simplexml_load_file("http://bnm.md/ro/official_exchange_rates?get_xml=1&date=21.12.2015");
$euro = $languages->Valute[0]->Value;
$dolar = $languages->Valute[1]->Value;
$rubla = $languages->Valute[2]->Value ;
$lei_ro = $languages->Valute[4]->Value;
$ua = $languages->Valute[5]->Value;

?>

<script>
var curs = []; //js array that will have the format curs['valuta'] = curs;
curs['mdl'] = '1';
<?php

$curs = Array('eur','usd','rub','roh','uah');

$i=0;
foreach ($curs as $valute)
    {
      echo "curs['".$valute."'] = '".$languages->Valute[$i]->Value."'; ";
      $i++;
    }
?>



$(function() {
    $('#mdl,#usd,#eur,#rub,#uah,#roh').bind("input", function() { //on every input change
      
      changed_id = this.id;    //the id of the changed input
      changed_value = this.value;  //the current changed value

        $('.calc :input').each(function()  //change every input with reference to the altered one
        {

          if (changed_id != this.id) //so as not to change the value that was altered
              {                
                this.value = (curs[changed_id]/curs[this.id]*changed_value).toFixed(2); //curs of the changed field divided by curs of the current field multiplied by the value of the changed field
              }

        });

    });    
});


</script>






<table class="calc">
    <tr>
        <td colspan="4">
    <h1>Alegeti banca</h1>
    </td>
    </tr>
    <tr>
        <td colspan="4">
    <h2>Banca comerciala romana</h2>
    </td>
    </tr>
    <tr>
        <td>Calculator</td>
        <td>Valuta</td>
        <td>Cumpar</td>
        <td>Vind</td>
    </tr>
  
    <tr>
        <td><input id="mdl"></td>
        <td>MDL</td>
        <td>-</td>
        <td>-</td>
     
    </tr>
    <tr>
        <td><input id="usd" value=""></td>
        <td>USD</td>
        <td><?=$dolar?></td>
        <td>-</td>
     
    </tr>
    <tr>
        <td><input id="eur"  value=""></td>
        <td>EUR</td>
        <td><?=$euro?></td>
        <td>-</td>
    
    </tr>
    <tr>
        <td><input id="rub" value=""></td>
        <td>RUB</td>
        <td><?=$rubla?></td>
        <td>-</td>
    
    </tr>
    <tr>
        <td><input id="roh" value=""></td>
        <td>ROH</td>
        <td><?=$lei_ro?></td>
        <td>-</td>
    
    </tr>
    <tr>
        <td><input id="uah" value=""></td>
        <td>UAH</td>
        <td><?=$ua?></td>
        <td>-</td>
    </tr>
</table>






 </div>



</section>

 <div class="conditii">
 
 <h1>Conditii</h1>
 
 <div class="conditii-center">
 
 <div>
 
 <div>
 <img src="images/document.png" />
  
 </div>
  <p>Completeaza formularul on-line, telefoneaza-ne, sau viziteaza-ne pentru a perfecta cererea de credit.</p>

 </div>
 
 <hr>
 
  <div>
   <div>
 <img src="images/time.png" />
 
 </div>
 <p>Ramai in asteptarea deciziei de acordare a creditului. Va dura doar cateva ore.</p>
 
 </div>
 
 <hr>
 
  <div>
   <div>
 <img src="images/office.png" />

 </div>
    <p>Viziteaza-ne la oficiu pentru a semna actele necesare. Vino cu buletinul de identitate.</p>

 </div>
 
 </div>
 
 <div id="button">
<input type="submit" value="APLICA CONDITIILE">
</div>
 
 </div>
 
 <footer>
 
 <div class="footer-left">
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=BDHYb-6w9Cxe3ype1WbRQu8CSTmWnH-M&width=100%&height=488&lang=ru_RU&sourceType=constructor"></script>
 </div>
 
 <div class="footer-right">
 <div class="footer-center">
 <h1>Contacte </h1>

 <ul>
 <li>
<div class="block">
<div  class="fimg">
<img src="images/phone.png" name="phone"> 
</div>
<h4>TELEFON</h4>
<h5>+373 60 188 439</h5>
</div>
 </li>
 
  <li>
  <div class="block">
<div class="fimg">
<img src="images/mail.png" name="mail"> 
</div>
<h4>EMAIL</h4>
<h5>unitedcapital@mail.ru</h5>
</div class="block">
  </li>
  
   <li>
<div class="block">
<div  class="fimg">
<img src="images/mail.png" name="mail"> 
</div>
<h4>ADRESA</h4>
<h5>mun. Chișinău, str. Mitropolitul Varlaan, 84, of 12.</h5>
</div>
   </li>
   
    <li>
<div class="block">
<div  class="fimg">
<img src="images/mail.png" name="mail"> 
</div>
<h4>OFERTELE DE LUCRU</h4>
<h5>Luni - Vineri   08:00 - 18:00</h5>
</div>
  </li>
  
 </ul>
 
 </div>
 

 </div>
 </div>
  
 
 </footer>
 

<div class="bottom">
<div>2015 © Copyright <font>United Capital.</font> All rights Reserved.</div>
 </div>


 

<br><br><br><br><br><br><br>
 
 </body>
</html>