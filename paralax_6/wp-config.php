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
define('DB_NAME', 'paralax_6');

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
define('AUTH_KEY',         'fk_TIp^>}38/->P>Bmi/u[b6B].Rs!Y>a~qd4@L3i!RGv5o._3JEJsXrWDrTt|+/');
define('SECURE_AUTH_KEY',  'HQxb9^Sa~m^wb!Zp8L64Zvk_D9a,NXzwpnFWP4K0w:H;b8+RyJ](8sp{FO2vjI,1');
define('LOGGED_IN_KEY',    'g3&izJ^CU~ei^t;By=vAOx4$|7Q3.erEllD(%$69Al[uiN;Wj:Afj#+U6PsXu[sU');
define('NONCE_KEY',        '2B.B)bAQS:3nwDU.{{L#nvu]9FiSFK(Qx7j{R>22q`0Jz`!AbdA,O:%DwU35v3#:');
define('AUTH_SALT',        ')DWbrL$OyP7.^f:_p2]gEXT`!`?y 7/J(|*I>PopK*j]A3n~hj%gWedXIO BkFOW');
define('SECURE_AUTH_SALT', '$<ql%q88<f`D!?(KpGm7#=:pxIEnRTOK,-?rYpO7{iNy@Pl)8H,s-|Z.,~G?Y}Wq');
define('LOGGED_IN_SALT',   '^|t|YcX=?9@-Cd(pYyCsIR%UYIflq8mE1hrxhlgYH+?EcW:Ub{}sjqb|:V8jn2ue');
define('NONCE_SALT',       'Xz/p+0{75A7b</#1R[~Apg!B%AX%3oQ>n3_J}Hdz+d5FK(?Qo1~0F:lL r7OD+Cx');

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
