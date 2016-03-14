<div class="fix">
 <section id="calc">

<div class="uk-grid">


    <div class="uk-width-1-2">



  <div class="calc-left">

 <!--<form name="cl_form">-->

<?php $attributes = array('name' => 'cl_form'); ?>
<?= form_open('', $attributes); ?>

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
  <label for="amount"><?= lang('suma'); ?></label>
  <input name='amount' type="text" id="amount" onchange="calc(this.value);" style="border:0; background-color:#25282a; color:#fff; text-align:center; border-radius:5px; font-weight:bold; width:50px; float:right;" >
  <br><font style="float:left; display:block; padding-top:10px; color:#888888; font-size:10px;" >1000 lei</font> <font style="float:right; display:block; padding-top:10px; color:#888888; font-size:10px">200000 lei</font> </input>
  
  
</p>
<div id="slider-range-max"></div>
<br>
<p>
  <label for="amount2" ><?= lang('termen');?></label>
  <input name='termen' type="text" id="amount2" onchange="calc(this.value);" style="border:0; background-color:#25282a; color:#fff; text-align:center; border-radius:5px; font-weight:bold; width:50px; float:right;" >
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
    color: white; height: 30px; width:400px;">
  <label for="summ" style="width:390px; margin:auto; display:block; padding-top:6px;">Rata lunara:
  <input value="0" name="summ" readonly="readonly" maxlength="10" size="10" type="text" style="background:none !important; float:right; text-align:right; border:none; color:#fff;"></label>
</p>







</div>



      </div>





<!--********************************************************************************** -->





    <div class="uk-width-1-2">


<div class="calc-right">

<center><?= validation_errors(); ?></center>
<div class="aplica">
<div> 
<div>

<label><?= lang('nume'); ?></label><br>
<input name='nume' placeholder='<?= lang('introduce_nume'); ?>'>
</div>

<div>
<label><?= lang('prenume'); ?></label><br>
<input name='prenume' placeholder='<?= lang('introduce_prenume') ?>'>
</div>

<div>
<label><?= lang('cnp'); ?></label><br>
<input name='cnp' placeholder='<?= lang('introduce_cnp'); ?>'>
</div>

<div>
<label><?= lang('telefon'); ?></label><br>
<input name='telefon' placeholder='<?= lang('introduce_telefon'); ?>'>
</div>

<div id="button">
<input name='submit' type="submit" value="<?= lang('aplica'); ?>">
</div>
</div>
</form>


<?php
/*


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

*/

?>


<!--
<table class="calc">
    <tr>
        <td style="user-select: none;" colspan="4">


           
           


        </td>
    </tr>
</table>
-->





 </div>






      </div>







</div>









</section>
</div>