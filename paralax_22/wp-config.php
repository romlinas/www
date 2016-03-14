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
define('DB_NAME', 'paralax_22');

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
define('AUTH_KEY',         '{27W]NP|qD;b{&Lq,YkEyTB:K-) Ol~AB%>#!e@ SaelJ0eMlDFLk,&w{y7]-ULM');
define('SECURE_AUTH_KEY',  'edQ&g..2*0Nr@C3b_{O0s+5=J<;+$_8E_sLgz#p ELgLp??HHKaI,(Hr1)R/Q9o6');
define('LOGGED_IN_KEY',    ')s_hINYNAAl)7Da|-|ka 7rAKTJ}?o`62iUM)O{>L-Sh5<DM3z9zIP |&{dKqx%$');
define('NONCE_KEY',        'jTZPMv}hU?mEKmm|e[r#Zyh/YRx}BL$W}k: $!Yp$M(4]#I?I)f:|0B/+L Jxp:q');
define('AUTH_SALT',        'P+|NfZ#B(-kvE bQU7M#U ?Zr@umr1{b=5>-6i1Z .|+(|&S/fQ;4T :cVUFq/FQ');
define('SECURE_AUTH_SALT', '*IZ6tSk]u?HGC-SrXC$gGB:qwdQ+`z}F>0q!Ng-mYQ64A67Fo)+y4ade?7+[+4-7');
define('LOGGED_IN_SALT',   '@dJi||D3pux1&ka!h UxOWhE>UE?rrZ+]kcSop>,gB2,r+&|1+W&b`F}_m3*WsMm');
define('NONCE_SALT',       's9<-~@x@bo#-SC4LZBfYa1,ByHX-7%MtIO_5#y<xrT5aFt+hr,A6w!^kR36 g3wL');

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
