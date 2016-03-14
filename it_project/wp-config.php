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
define('DB_NAME', 'it_project');

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
define('AUTH_KEY',         ' a)%h| !U|XVSK|_3n,ZYO8FTUk}/hVh{3C|g1:D9C[AhKr7rcUj&)#lvIup!_$%');
define('SECURE_AUTH_KEY',  'u|{,mvAz6K-V5LU ig F+C]AqUFb?Ln-+(B?/wBb]F-FV{.C0xV7CzSlMP9PKlTu');
define('LOGGED_IN_KEY',    ')P$4]er*mh>?9$:H#XXUUZ<r:dr`6-FY$$foHpF=}1&y0V?16~db0AL3rN%0)}?/');
define('NONCE_KEY',        'L`1g<d?)k/YU(,%#[>&XG<xf0,y%+?2Zze3a4{}m{Q$8Jf1WF?nC<&DNHi>aNEn^');
define('AUTH_SALT',        'q2Qu`-r|<oH+-eeAaY}]d0y+Rn_R?l|Omr `X/T|;?_j M,bAeA5~*]+MQL~!ymQ');
define('SECURE_AUTH_SALT', 'wV8#Y5sZ-cA1+$/vJBf8I/!(sRPk+>yj.c@R+1aWO%u:#C,Gcuma50~V|OlvUfS!');
define('LOGGED_IN_SALT',   'zqmKNyeG7G8oeHh)<PM%qcGtN05#`%7Hog^E$._<IS)15?tnENpH 5;+h@D);]/O');
define('NONCE_SALT',       '6vUScr#8/ =_Ikp%H[gQJ>}G7vmkG;PgU0TCKPBoc|b+<OFce+95DqtbF%Z+y3u=');

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
