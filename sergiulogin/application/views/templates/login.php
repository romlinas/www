<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Администрирование</title>
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <style>
            html, body {
                font-family: 'Didact Gothic', sans-serif;
                margin: 0;
                height: 100%;
            }

            a {
                text-decoration: none;
            }

            .error {
                display: inline-block;
                height: 110px;
            }

            p {
                color: red;
                text-align: center;
            }

            form {
                display: table;
                margin: auto;
                width: 200px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                padding-bottom: 110px;
            }

            fieldset {
                background-color: #c5c5c5;
                box-shadow: 10px 10px 10px #fff inset, -10px -10px 10px #fff inset;
                border: 1px solid #c5c5c5;
                padding: 20px;
            }

            td:first-child {
                text-align: right;				
            }

            td:nth-last-child {
                width: 200px;
            }

            #login, #pswd {
                border: 1px solid #aaa;
                font-size: 13px;
                color: #777;
                margin: 5px;
                padding: 3px;
                width: 150px;
            }

            #btn {
                color: #000;
                font-size: 13px;
                font-weight: 100;
                height: 25px;
                margin: 5px;
                padding: 3px;
                width: 80px;
            }
        </style>
    </head>
    <body>
        <?php echo form_open('admin /login') ?>
        <div class="error">&nbsp;
            <?php
            if (!empty($text)):
                echo '<p>' . $text . '</p>';
            endif;
            ?>
            <?php echo validation_errors(); ?></div>
        <fieldset>
            <table>
                <tr>
                    <td>
                        Логин
                    </td>
                    <td>
                        <input id="login" type="input" name="login" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Пароль
                    </td>
                    <td>
                        <input id="pswd" type="password" name="password" /><br />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input id="btn" type="submit" name="submit" value="Войти" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>