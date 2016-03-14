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
define('DB_NAME', 'paralax_13');

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
define('AUTH_KEY',         '{h/Fi_WTG4P $Tw,n#=9_N49%z+DR=i{06W:`4w;ixC5ax&H?gH0_@Sc|--[>X>#');
define('SECURE_AUTH_KEY',  '$IVdvT^ic(Cji:;T|uM~Wicm9l)aHi>%A0wHq|w7E9oi.!yf|wiJ#Lc3{>68g{xB');
define('LOGGED_IN_KEY',    '#&T Q1;AS$TKjl`y_+2gEQ~5##2iD+0WHyhQY-zjYl]1gnRi:qPB7IAKo4|J=?.9');
define('NONCE_KEY',        '_<V=ev!QTfGOu:,}D@^k9GU^uU/:;&-`hvZ)I-6r|WUV|zwNieo#;%8cI/JXJQc0');
define('AUTH_SALT',        'KbYa<Sz?PehN/#{uIo%Y}5F`]O1n%Te7;wqxZk`j,8+MN,iVNCF`JMm:Q!Qe%GcR');
define('SECURE_AUTH_SALT', 'BIKN;xG5LYawgmS/hf:LihRX+93OmGD{0Z>QQZ&%cv%n%2B2S_[K3lxDW-%cU.)-');
define('LOGGED_IN_SALT',   'Pt`bt.RM;irppmu/?mN`--;A^forpjjQ].++o[Try<NnN+dkzl+N[1DD>E4uyAra');
define('NONCE_SALT',       'AUy8+|@A%!a#F=?FT^-EX}z!X+ss=T3m:A`Xm6`MgdzU]||);U6}B=_:/|W~!s_I');

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
