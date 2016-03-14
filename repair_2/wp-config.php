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
define('DB_NAME', 'repair_2');

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
define('AUTH_KEY',         '/w0~i;Q< ew)*0gb8A@-xX3}*9&%mu&]b}p46RBE,8AR^O6!.}E}2.|P+M@5n-D;');
define('SECURE_AUTH_KEY',  'Sa|x:6+E]](B}n=?;(5=5H;9~Gf|!Ew]XwMzF<tlVagk)xjP|k(g8>GM^%QeAId!');
define('LOGGED_IN_KEY',    '63;zS:Cgf&@uaRjg:hR+0;bzilmHgE++&}j+,|5_7=sx{oT=>DljprZf8MEEbHuP');
define('NONCE_KEY',        'BVH+#2-qo9<3MS7SSCo]#>jA,Yg*@AY}Cr*WHNLXTXrecl?=Q^~E1%`)9jCx|yjA');
define('AUTH_SALT',        '5ZPWR%XXOvws,@E^)5$E.w:F(<CEeF[YC c`a` %/Th8MBb&UAo@+JI|Y)=;846N');
define('SECURE_AUTH_SALT', '-LWY +5)7/@+F#t+xH|{g+%ryJW}&m*1i[+xWVA-a_cA+gL%.Ar=j(%OG$t;(C#[');
define('LOGGED_IN_SALT',   'kG51z[sY7O5,YKf=5~B<2[/7$?b} 9w$)JifLdjpm{Wp)9<:xxNAI`@_B2XkU9VC');
define('NONCE_SALT',       '!EL}T6w<;n[+9)5|l]#|Q9plQFq;|v0.^G+.}dP5*mkR|<4HSEl|v-.^i-mBU1Qf');

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
