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
define('DB_NAME', 'liceu_3');

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
define('AUTH_KEY',         'A]|]nP*:hAAC4ye|1uqG[i(qy,9reuD/g%r!GZ#/~>ui?=pdzzB=c+Bt {G/;2R*');
define('SECURE_AUTH_KEY',  'yh|`{NqPtwPigg=b,EC&G9FiaR(TJ{[`NY24[R,b&O]L%JtDd=&uXRr>S)BS}rk+');
define('LOGGED_IN_KEY',    '/ZRNaGgZ+-FvM0XZ{)i*n:LK-|^>uMGyBOe+&X%nI/*o??<C%z&PNIuYHzmUvep.');
define('NONCE_KEY',        'XJCR?5R>@tcF989`_-Z-ZMv/ZAnMa!xH(wt^i[+oCO5L=*4Z{aa`dsYF6@PCoXWD');
define('AUTH_SALT',        '>_u#;bZ-~P}8_WlP+(~#T|+cTsw,+@^gMT9)]#l(9u&9oi4j)]6{dV!.H|wl(|wa');
define('SECURE_AUTH_SALT', '$~$t,v+~WgyR!ZJL;T_f~J@p%|>hsxGtI,lQ&A+6Yu:@4*+|vIkQ-GFYLRX4uaf.');
define('LOGGED_IN_SALT',   'D h2K{(fc-VSDtT1[eHr*@?wN:pHOrQY#/$KJf%m&K<7v%sfAC0bLN}|@P@Nz=+K');
define('NONCE_SALT',       '#%Jo}|85yp?t:+)$!?Xzv^QTYa,ccnE2z&doJ~GeksLN`1fa<I=}rRb?cW$RgI00');

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
