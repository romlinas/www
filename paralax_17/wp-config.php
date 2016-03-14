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
define('DB_NAME', 'paralax_17');

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
define('AUTH_KEY',         'pPn<<c?}@DOpjZ1+Xw[lL0B(m#!rd*/RTH1EZDK~xMeCM1FNK?cX`R1WBXJdl>_1');
define('SECURE_AUTH_KEY',  'E-w]r2V9=h[|zKV~*RJ9%;Xy8P>8Y)IxOv9VZNc<g#=umO=jmgi$O8]AiK8r(QFu');
define('LOGGED_IN_KEY',    'l=4m8=bzMr{w-lZHe-.bUH.JNJ.>~E@xb>j2zezxEXR%T!02_W;a#k.V?^5PZ>hH');
define('NONCE_KEY',        '_a<wJ0$gyR~C8VK#j@0tz%`6yV`Xu|Iyn;+t,+L/}V!nI6-3LVWtr#6%8jB|OS1o');
define('AUTH_SALT',        'b8nA Dr{~`yaY+TOD-I|y|/|:T{fR+ABb6$sHUx*DM-88aO^t2)8Km9+U4b&%*]2');
define('SECURE_AUTH_SALT', 'v-Yw~apMdn#.L2ugslFsjt` @r|JPWhjFZe|GhUZ3-%[C)@2(1|[.Imr4]@vkzW4');
define('LOGGED_IN_SALT',   '7-lu+|0uU2!yBu0VTWO=X{Sy*@px}-+Op 7G-_;TDXG49#>pP}Qap=se4T*SEsZ4');
define('NONCE_SALT',       '?=PPpRueYQDw,iV=z!ST]:oF^:Cg2uPbL3yM5 7c2P{qccRP6X0XF46~{N?Zp!E)');

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
