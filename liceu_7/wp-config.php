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
define('DB_NAME', 'liceu_7');

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
define('AUTH_KEY',         '-0@-@k)tU]zTrtBXl(-D+bl.@!C(e7-quz(n6;N||{!Y^fKs0{zc%2X>=n ]%FU$');
define('SECURE_AUTH_KEY',  '_&rAuV=MlH?_ZQs4G)c`7XTE#_D;zPwR<n:fGimT<n8><(Q9r+,Gq&Dp@7.`V9NG');
define('LOGGED_IN_KEY',    '_E=|!rj`|QKCbgTG`V?Hs1/v&iVQQ|R674g}r.-))cIg2GHtIy|${>*Z^}:b8M>9');
define('NONCE_KEY',        ';U)_H;3$P2d  PvY/Izkx(?J[bF09AMgJM3^|!4*[)2T/]4H{JvE}&[&}C=]fN0`');
define('AUTH_SALT',        'domUog43JTN,`Lb=fTO$wX+83]61,)!1EAT/|>6u+O[c?$zItwwr#jxz4oZ%.|rg');
define('SECURE_AUTH_SALT', '>rBbrrS>p32+ACB4IU<O8qExQIq+ngEk}vqTq|u]KQkI[s z|]zC@i$6Y<$B^$%~');
define('LOGGED_IN_SALT',   'a&]#N>?x|xfM|-hO>Ur?+wR#WtVEHaUatdb^cEk[E+}8+J)-xIZsoY|n7-c<`GGI');
define('NONCE_SALT',       'bVOszNw~Q%?AL@<+d-&l!9O*kl/?F2nHm-%[?BUU4&t{rQ )U}MNaDH3pa!?N3+4');

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
