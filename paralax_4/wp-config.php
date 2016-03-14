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
define('DB_NAME', 'paralax_4');

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
define('AUTH_KEY',         '@b.%vDJ S+]9XU|?GmjT`{gxHQVVTuac7V)ZTqZ{<!TQ)1NZTt4et@njW,=-^J`,');
define('SECURE_AUTH_KEY',  'xR!FBlMw;J?1M|8)3[r=emU}$BH^l[l8^R.-sUvh+Z $z)eXF3f%|;v($.)!+PpT');
define('LOGGED_IN_KEY',    'wcq6@7B_r!GqVJJjANG9NGWrwFp|f+~bIpK`8ev<k,D;F7Y7732nzAHfnR/?R7KT');
define('NONCE_KEY',        'Mn&e|&C>hSy2]1--D0:=OC/KqZr}.}VS@Z[MC&|(G{Mw[:N-|6K)ELiVl*Q%m{D(');
define('AUTH_SALT',        'eG%4nUBuQuV+CvcpV>uQMF7JK1mUr-3_m8|ody*_2DD@-K:17oI336i7,^zsu2}X');
define('SECURE_AUTH_SALT', '%W%o}<]=q+EL}<,Qkg}05^B+rT^bbV6uGc/9n~b tQ7d<&QJ%$S+jCGJ)V[(aDUy');
define('LOGGED_IN_SALT',   'oS%d;*VG<n3B@%fVS(IOz]1lv+Z`7$x0)iQ|QWg$>U;jJkg *~zn6YyiK+Zx`J2]');
define('NONCE_SALT',       '$,~i5;,+ 8d#LgHORG- q=!tTe5`Arn0EB8!1<kQIsMOd+;>)*D)<6~Y-pC:5`22');

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
