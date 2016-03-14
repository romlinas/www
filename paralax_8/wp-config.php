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
define('DB_NAME', 'paralax_8');

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
define('AUTH_KEY',         'y]6D=itwk?R}}Q7j+q^E??g)Eer>5xZ+1m0!4!&IAyR7c3djxy-+Uql;@SKs]bFG');
define('SECURE_AUTH_KEY',  'W(.n_ykt#CXc5H#RLOCI]Q >~${VQ?9Ll5%n?}-vGiDzYpxGdG!nSs0kLpcIJYd6');
define('LOGGED_IN_KEY',    'k3ZJu|eA*pDoP@q|5|wM%&;M5cIo`nCz`MM|e%12+SinWH~|A4fDRP/|}v0][T1X');
define('NONCE_KEY',        ':X{r-+s[y={#pP^?=JR!%jypn2fya)&44q-OO(&KHs{bynC4/+rQy*wC#wf-IUiK');
define('AUTH_SALT',        'Q>.G|!#1$/pvbl&AGTc[rqw/d~SF Y.8pI1HnF2T[0)dyxGW/<--+oVQI6Q1y|F/');
define('SECURE_AUTH_SALT', ' k&@[6YRi8L6OUV<)*TS-!ezh9UAIGc`;8<F6B<#u20*TTm5&{|woi0E:!B<8.D!');
define('LOGGED_IN_SALT',   'cfbfA<HK5g3:k@oh+s7?t-U{qc1-8M`7Y0f]:ik8TVteB!vSfqD@GB6pT`F8xGoM');
define('NONCE_SALT',       '- TS?dg-)c,@K284l/)|rM@ ?%mZI+dX>qe^Dtf0AVRTbxGP9|$Zt1k8j+Zn1p~&');

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
