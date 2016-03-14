<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Unicapital</title>
  <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?= site_url('css/style.css'); ?>">
  <link rel="stylesheet" href="<?= site_url('css/uikit.min.css'); ?>">
  <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="<?= site_url('js/uikit.min.js'); ?>"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

  <meta charset="utf-8">






  
 </head>

 
 <body>



<header>
<div name="contacts">    
<div name="center">





<!-- <div>
<div>
<img src="images/phone.png"> 
</div>
<h4><?= lang('telefon_header'); ?> </h4>
<h5>+373 60 188 439</h5>
</div>

<div>
<div>
<img src="images/mail.png" name="mail"> 
</div>
<h4><?= lang('email_header'); ?></h4>
<h5>unitedcapital@mail.ru</h5>
</div>


<div>
<div>
<a href='?lang=ru'><img src="images/ru.png"></a>
</div>
</div>

<div>
<div>
<a href='?lang=ro'><img src="images/ro.png"></a>
</div>
 -->
</div>





</div>




</div>


<nav>

<?php  /*
$languages = simplexml_load_file("http://bnm.md/ro/official_exchange_rates?get_xml=1&date=".date("d.m.Y"));
$euro = $languages->Valute[0]->Value; */
?>
<center><span style='float:left; display:block-inline; margin-left:30px; margin-top:30px;'><?=  !empty($this->session->userdata('login')) ? 'HELLO ADMINISTRATOR !' : ''; ?> <span style="padding-left: 20px; color:white;"> </span><span style="padding-left: 20px; color:white;"><a href='<?= site_url('admin/logout'); ?>'>Logout</a> </span></span></center>  
<!-- <ul>

<li><a href='<?= site_url(''); ?>'><?= lang('principala_header'); ?></a></li>
<li><a href='<?= site_url('credite'); ?>'><?= lang('credite_header'); ?></a></li>
<li><a href='<?= site_url('conditii'); ?>'><?= lang('conditii_header'); ?></a></li>
<li><a href='<?= site_url('contacte'); ?>'><?= lang('contacte_header'); ?></a></li>

</ul>
 -->
</nav>
 <div class="backgrond2"> <img src="<?= site_url('images/header2.png'); ?>"> </div>
</header>
