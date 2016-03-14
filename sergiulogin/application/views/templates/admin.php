<div style="background-color:;">

<center><?= validation_errors(); ?></center>
<div class="admin-form">
<div style="max-width:450px;">
<form action="#" class="uk-form login-form" method="post">  
                <input type="hidden" name="login-submited" value="1" />
                <div class="form-row uk-margin-top uk-text-center">
                    <h2 class="uk-text-success"><i class="uk-icon-lock uk-margin-small-right"></i> <b>AUTHORISATION</b></h2>
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
</div>
</div>
</div>  

