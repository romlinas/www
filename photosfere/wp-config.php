<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'photosfere');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L{,{=9*X:=l8R4d99e8lp(>^/lkf@)osxQF;_ bf>{vQk=Tw~|e~MbX>mYgbt)q4');
define('SECURE_AUTH_KEY',  'i,_qk,z+iaMhk%(~vy`+{h _(}lu~FX&#Lv#F49Plki6f!,1|M][?A2RM@ZaL!H]');
define('LOGGED_IN_KEY',    'b =ju>eUR<Z#msEPH+)A^Dr?g(a0:pm(YL-:_i,7p6LWW=H+ `|N^%F[DZXUHQl|');
define('NONCE_KEY',        'iI`7Q1sr`c+Z|JO7lc8v2nP-)3RpL&LZyPO-oR}Lc%t.9xZ>6%|zJ0nT0qEV3AK&');
define('AUTH_SALT',        'kS&f|(dUP]|~a[L:+UbB,qr3P{OB+~`2obl>4J+rQ6O:W QLe:<ADSrL8{W^4*6x');
define('SECURE_AUTH_SALT', '[E7V)&_-Vw3]n&^EAIK-^0$5|&<;^){LikZ&,->]C+G6L%UeM1L-6_NPjws,Kzc&');
define('LOGGED_IN_SALT',   ':]EKR$-u:eT1A,E/I<][OK>1rw$R~#yIw5f~|QhWAIH*d-dI_+~|+}+*lul4r2@>');
define('NONCE_SALT',       '=d3~erZe))Jqa}=5y9So/cIq0f@f+po{d?Fa`sxrkq02VHsGUlX!dM;8)7%VjqP5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
