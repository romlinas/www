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
define('DB_NAME', 'paralax_16');

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
define('AUTH_KEY',         '}-g.c%-F4LSR[_%t0Z4uqePRF(#5}M;w@4N2HNwX&Of5|+?,>/ke*wP&bDba@2W7');
define('SECURE_AUTH_KEY',  '?*2SE+1@-%I-+3J@uN<v95MpT2A#MVF]0Ui+~q7M,3kG?_?.?FISwbdn-p^p:~|;');
define('LOGGED_IN_KEY',    'SN4EZhGGlDLj@DFY~0Gq#/qze4VRV_[lVjD&a&X-]8c|/dQL*zxF_8a@aZd>gY]b');
define('NONCE_KEY',        '_=sKs#iZ|#FrQt9Nc[2?u_]|@>$&,X&aeKbFVIz&&13gaT)6[_*fWD :v`]EaM[`');
define('AUTH_SALT',        'i|$E9.e/X91J<#x,cPt@|Ib2lw#wgpKQkyhX.pJen%b4tOWe`eK!?@M&)A&vQ{kx');
define('SECURE_AUTH_SALT', 'x9 R$UsTU#?;Jg@ayx6WX;^-q}|ykx~-q|*vZsI*c0*,x_q8{+~5~WTOr**4LBS>');
define('LOGGED_IN_SALT',   '~|k!-6)/F7X#BuxTM<N89%J2S!wE,0is?oa&aE;% MM>7d!B|s(_:=XT+(=>9w-&');
define('NONCE_SALT',       '$@YP%:L;#cl1CGe&|;N;})=|H/t6]#soEpd}rVIKKt&<6t--YcvO(uKsww6e;JeI');

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
