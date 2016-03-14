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
define('DB_NAME', 'paralax_3');

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
define('AUTH_KEY',         '*zUNcLmG`cK-%mzG`LP{~,4 o;d>RzI6<C9{%,HDD(_WUkem]&[!e79F11-x 691');
define('SECURE_AUTH_KEY',  'Z}*Nm[N{T@^s5a_NB@$C4k/W2lmA6V+C-o`sF}sr<QnCI8*WC},41VioW0ivo$*|');
define('LOGGED_IN_KEY',    ')-B(vQ6^+4XAw6t`s?+w/h*TkX/BtsL-9k~0^dZt:uU_ZQ{if~Yx:YXF;`y26xSh');
define('NONCE_KEY',        '_Z0 J*61p}5rA#e 82GDdt@{&%bL{]y-xa2%XmdI.Th-vb!>m^2ug:Y=#Ka-]G_Q');
define('AUTH_SALT',        '$*K_b6-5h3qyxEMr&:zSm8;8jrPQwR^fv7rSs>xU]CM_yjZ=}-B],{A,g+G4LZ]Z');
define('SECURE_AUTH_SALT', '`<e{Y{`x}W$ti-2 A)F|FwOk!|#WmFkf/js|~;+83_RMws1Hi45r$:fXt:_Uz$^6');
define('LOGGED_IN_SALT',   'aI?%l,&bD!A`eaOY!2sE~$}[HU|puVf0k{9$.a9kkmqthxO/np#$G5WF-i-3(4B/');
define('NONCE_SALT',       'E*J<HcWO|A;:pB|7S?GhaSwge8d*Rj2^[y@,D+?=mIHimNz9ef:R-=Lxbjm[/C&R');

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
