<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= "ADMINISTRATOR"; ?></title>
          <link rel="stylesheet" href="<?= site_url('css/style.css'); ?>">
          <link rel="stylesheet" href="<?= site_url('css/uikit.min.css'); ?>">
          <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>

   </head>
    <body> -->

    <!-- <form action="#" class="uk-form login-form" method="post">  
                <input type="hidden" name="login-submited" value="1" />
                <div class="form-row uk-margin-top uk-text-center">
                    <h2 class="uk-text-success"><i class="uk-icon-lock uk-margin-small-right"></i> <b>LOGIN FORM</b></h2>
                    <hr />
                </div>
                <div class="form-row uk-margin-top uk-text-center">
                    <input type="text" name="login" class="uk-form-large uk-width-1-1" value="" placeholder="Enter your login here" />
                </div>
                <div class="form-row uk-margin-top uk-text-center">
                    <input type="password" name="password" class="uk-form-large uk-width-1-1" value="" placeholder="Enter password" />
                </div>
                <div class="form-row uk-margin-top uk-text-center">
                    <button type="submit" class="uk-button uk-button-large uk-button-danger uk-width-1-1">Login</button>
                </div>
            </form>

 -->

        <div style="background-color:#2a2a2a">
        <?= $output ?>
            <img src="<?= site_url('') ?>" alt=""/>
            <span>AUTORIZARE<br /><b>UNICAPITAL</b></span>
            <div id="">
                <ul class="">
                    <li class=""><a href='<?= site_url('admin/conditii') ?>'>CONDIȚII</a></li>

                    <li><a href="<?= site_url('admin/text_1') ?>">TEXT 1</a></li> 
                    <li><a href="<?= site_url('admin/text_2') ?>">TEXT 2</a></li> 
                    <li><a href='<?= site_url('admin/text_3') ?>'>TEXT 3</a></li>
                    <li class="">
                        <a href="#">PAGES<span class=""></span></a>
                        <ul>
                           
                            <li class="has-submenu">
                                <a href="#">CONTACTE<span class="menu-expand"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="<?= site_url('admin/adresa') ?>">ADRESA</a></li>
                                    <li><a href="<?= site_url('admin/telefon') ?>">TELEFON</a></li>
                                    <li><a href="<?= site_url('admin/email') ?>">EMAIL</a></li>
                                    <li><a href="<?= site_url('admin/timp') ?>">TIMP</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">PRINCIPALA<span class=""></span></a>
                                <ul class="">
                                    <li><a href="<?= site_url('admin/text') ?>">Текст</a></li>
                                    <li><a href="<?= site_url('admin/foto_sus') ?>">FOTO SUS</a></li>
                                    <li><a href="<?= site_url('admin/foto_jos') ?>">FOTO JOS</a></li>
                                </ul>
                            
                    </li>
                    <li class="">
                        <a href="#">CREDITE<span class=""></span></a>
                        <ul class="">
                            <li><a href="<?= site_url('admin/credit_mic') ?>">MIC</a></li>
                            <li><a href="<?= site_url('admin/credit_mediu') ?>">MEDIU</a></li>
                            <li><a href="<?= site_url('admin/credit_mare') ?>">MARE</a></li>

                        </ul>
                    </li>


                    <li class="">
                        <a href="#">CURS VALUTAR<span class=""></span></a>
                        <ul class="">
                            <li><a href="<?= site_url('administrator/') ?>">EURO</a></li>
                            <li><a href="<?= site_url('administrator/') ?>">25.14</a></li>
                            <li><a href="<?= site_url('administrator/') ?>">24.14</a></li>
                        </ul>
                    </li>
                    <li><a href='<?= site_url('administrator/logout') ?>'>IEȘIRE</a></li>
                </ul>
            </div>
        </div>

