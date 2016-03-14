 <section id="calc">



<div class="uk-grid">

    <div class="uk-width-1-2">
  <div class="calc-left">

<?php $attributes = array('name' => 'cl_form'); ?>
<?= form_open('', $attributes); ?>

<div class='aplica'>

<center><?= validation_errors(); ?></center>

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

</div>
</div>

</div>

    <div class="uk-width-1-2">

<div class="calc-right1">


<div class="aplica">
<div> 
<div>

<label><?= lang('suma'); ?></label><br>
<input name='amount' placeholder='<?= lang('introduce_suma'); ?>'>
</div>

<div>
<label><?= lang('introduce_termen'); ?></label><br>
<input name='termen' placeholder='<?= lang('introduce_termen') ?>'>
</div>

<div>
<label><?= lang('introduce_garant'); ?></label><br>
<input name='garant' style='width:400px' placeholder='<?= lang('introduce_garant'); ?>'>
</div>


<div id="button1">
<input name='submit' type="submit" value="<?= lang('aplica'); ?>">
</div>
</div>
</form>

 </div>
    	</div>



</div>








</section>

