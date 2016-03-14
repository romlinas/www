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
define('DB_NAME', 'paralax_11');

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
define('AUTH_KEY',         'KWC7|^CRMYi|;|PX>^T<gYp7;Idb4)~C|n57pVx-C@8ts[H{e}F%l%aYp1o|:,iZ');
define('SECURE_AUTH_KEY',  '?h6uw%HCtc+Ch5zti+EP!E0< -}z2SzGvh.:gIoo!EBNO^XMiWrXy?z^j ~1KRVz');
define('LOGGED_IN_KEY',    '9SA{$;2Z{L`0,E+2hU9-%.yl^9RZ3F,m<{3}+[E>M<>rllH?5?L=aan&j7 DS3@;');
define('NONCE_KEY',        '{o{I#0l6s-GdFc~Yqhv?7(5|QmB${0oj]~:@SyKpgvmFR9h}/VaqoVvZI307?:?*');
define('AUTH_SALT',        'Z}gtWtrW$4 ]aldE;%fMt>hIP7{]p0RhWQV!`p,>*K;,zWLkaw]QT9]8*N;+[d+J');
define('SECURE_AUTH_SALT', '|L{r++gP+v6bNa;s&U+Rp{HxjYOtpp-VZCQK1xF/Bdv+b)-q<3lvGy|Rm0d)o1pI');
define('LOGGED_IN_SALT',   'QC+O!0nbRpR_1~}fPLbhIj/|w*sEh*z{+gXF/g`}4lo~YWZ+3*d+<|(9-BqM@KEq');
define('NONCE_SALT',       'SPY+DYR>&-eE,;~{q$o5bH*v$*[|%(ne:aBX5jQ2ix|+sSb`G(kSVJ1Jekkx//xL');

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
