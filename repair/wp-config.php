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
define('DB_NAME', 'repair');

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
define('AUTH_KEY',         '{-=:!UQ21=<BO`/veU25}A+g|Cr+A-Q}R3>6}F&w9M7Dt6`CeW!1M{Yg^]39D,<g');
define('SECURE_AUTH_KEY',  'l:rtm@9oL0rob||mUaz2*DxNzYFvqOu6Qd#hysp0s(v1Xx&6B48/k>xkgWTY+m6,');
define('LOGGED_IN_KEY',    'qm %P2Mk>mFHJ^50*>HT(^-Y>WqkS$<F>T>[./oL2=CbBgcmzwEY.|P oXyZS_JC');
define('NONCE_KEY',        'i8H_g:T%_8FX!]L{=bE4m/Ek5x5VHJ6V67@Q:A<MHfBLI8XuRv[Q2,kA@I|* KI-');
define('AUTH_SALT',        'k2f.NZnKu!DRO&eWzo@8XB+{b|Lh#6.(Qk(ItEC?Mg LMp,8#tLz@)[|j6?|n7#`');
define('SECURE_AUTH_SALT', 'TYky2-D,3&Sf}EgGBu& 5Fd)|ZI3e.:SmB9+Y/]rLSpoyB1I;|`k,)3+N{s`?>gd');
define('LOGGED_IN_SALT',   'sN`5dQ{G11#29d+~,3{^cG]XcSZBO{gdw_o`=g_L+|#S)3ZdaJ5|T6x!oHC[=zv{');
define('NONCE_SALT',       '[GtuLX`2;@k)cq-@*0l#1r>nU58BfL+uR;x;xkm2iseA[ p&%vzy7w,= 2/Ap+PR');

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
