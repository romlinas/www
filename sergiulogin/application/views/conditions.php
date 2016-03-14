<section  id="calc">
  
 <div id="middle_t">
  <?php for ($i=1; $i<4; $i++) { ?>

    <div class="con-middle"> 
    <div class="conditii_left">

  <div> <font><?= $i ?></font></div>

     <p><?= lang('conditii_'.$i) ?> </p>
</div>

<div class="conditii_right">
    <div><font> <?= $i+3?> </font></div>

    <p> <?= lang('conditii_'.($i+3)); ?> </p>
</div>

 </div>

    <?php  } ?>
 </div>

</section>
