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
define('DB_NAME', 'liceu_2');

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
define('AUTH_KEY',         'H?P_{_n]:T/-k=[CQm^J5X+VoYD/[<DlH#f^9}y[~6oD*UuJv0:k^|$5c$h%LVAh');
define('SECURE_AUTH_KEY',  'n5T4+:U+TdALz2iw:x.,BjO@JS;e 8=!%K`b&uwTj+=V9$CSd6&gRN|H*pz&*O*p');
define('LOGGED_IN_KEY',    ';U_Z+I(B/S<+?1Xk9<QpO@u<7+C*=2|x*fgUVulM20q>pK*RX~g )BD.u(8YB+R^');
define('NONCE_KEY',        'S|z+LWq9F[t+^WFlDtV2>5AH/00K-]QQh_.iot8`$&~#rmN32+=>. KEp85:y-1D');
define('AUTH_SALT',        '3ZD(P(:mjO]p,*-|M|~W2S}ggy~b>A*L`O86H.BgB4N5a*-p?_nx@z{~t)6&d(0T');
define('SECURE_AUTH_SALT', '!^)Y0 H3f[:[oH)9axJru9+(4m-y*y+?5t5PQd})m<42+mc3-[%a|/<[sbz(d[_+');
define('LOGGED_IN_SALT',   '2nF0Uo<f.W[1Ymw=4!b@ GAhyRG-&nn>EeZ~At0foL(p*8zMRKS ]3ZNc4d.`:P`');
define('NONCE_SALT',       '#h:YF%|R/&Ve(w7 Ef^N1fp0AF6^}9epQoTFl9l[qh<{=/gzIp0~XK&_P`T-Ig?x');

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
