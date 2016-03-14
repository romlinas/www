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
define('DB_NAME', 'paralax_21');

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
define('AUTH_KEY',         'T=vmEA0BNc55B-z|Z93UJ|`Sqg>Wwmv`vh`0NO:wD>j>5c=0o.G]J;9&!RBL *S3');
define('SECURE_AUTH_KEY',  'P{oX5dL#Qaa&OV4)S.`+3F@bgq*k,%wld-xaJ6-t$OJK,}o[$=q`^k3:ad*o8s.]');
define('LOGGED_IN_KEY',    '/_2Db`a0SmK>Zmk[+;<:gKLIA/g|i{Z@PF(h Z@i%0ma1Qj6TtdR(djh&s&&00|n');
define('NONCE_KEY',        '59d4|D(%xkG[;*|n;Gl*_G<-hM4d+o$Q~XW]EFZ4jDxl}-CCzyYC/zmKk;$B(&KU');
define('AUTH_SALT',        'QxF)I@*f2pHt-_bk!N!J-Zk`ub#jo Qt2=$qBkhH(D^=!.=-f7zHnqBa+Yb9XbA&');
define('SECURE_AUTH_SALT', '{_1d#HI+N*QninU711%-&TVhwR5Ad}5@5whAF+&I1)P5*A<MD~>Q@2t6MwbBAP:L');
define('LOGGED_IN_SALT',   '/+2(K$V6-|Ah3e{|-h}l+sTs+d7wa!)i6r9z`c#jiR}Pt`a*%bVBaT5ej,DSRnF$');
define('NONCE_SALT',       'z(4T/|uBn7tyJ1[J:J/Fv)ViN~Sdu<D+d&F!y|r+.UG*f0& ZU5enmA>F?eZ-MHc');

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
