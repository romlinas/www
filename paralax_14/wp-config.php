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
define('DB_NAME', 'paralax_14');

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
define('AUTH_KEY',         'ktW{+__8PlD]Dxh1tdhpjN]j6Oaog/</io&-?4j2<.xNc^,g!GsirZ?5USdM:)`3');
define('SECURE_AUTH_KEY',  '1ln!xr%hf~|+~-(cmoro#[lQjO-/!6-jf[N>;k|e0($z1ZXG4@JD+}%SU/]3e+*r');
define('LOGGED_IN_KEY',    '34|T${Eg9-Qc]e)<=zSfP4M-21DF3UC.aDr^@xjg9_^FP`3IJV|*[*v=|*YVp_uE');
define('NONCE_KEY',        '*p5dU@REEaJ(4|+l:}R*Afn(D-NE{4=0X=~.{rf{}+[wN&.MlWIl+{Y5+Lt7haO1');
define('AUTH_SALT',        'qqvyrFcsx/nZg?mxe}#`x$RuM vUKX!,^|/*w_xfHQSZUb/?AQX%+<J7QC2-1M<o');
define('SECURE_AUTH_SALT', 'zyDpJS,V^$k0syMv#K2*1d+3+E0HH)0fY[vA2L30jc<{D!!jmb{i__eUq[h>j)xS');
define('LOGGED_IN_SALT',   '5sD07$E. Tn[JCV5)OqqUL{S!*q5{`-mvKVlLOE;+E#ou,IPB^{Vi|s)tO`:pp32');
define('NONCE_SALT',       'CNi!+<S=n:-B5HNXt7e#3WIGP`}O2kV]jXrm0+4tnf`j;;Yc)#DD|&u~eN+K}M-5');

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
