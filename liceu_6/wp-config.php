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
define('DB_NAME', 'liceu_6');

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
define('AUTH_KEY',         ':kD 4#7-NH73Qq9(d^j-9t[*u?SM@j5fREN8o/-k{IW%{k3C,uHMO?clCS.PQgA>');
define('SECURE_AUTH_KEY',  'Kw*m7?q_it! ~%h=1{}jhjC,!7A3*!WaAC_TP[2bmqa_l&B,~04@yGv*8EpMY|Fi');
define('LOGGED_IN_KEY',    'Zr&CVFJe#qAWZ@miAd+@?,Q36ED[i</wA}68T{3e5Rft.aQpQbnZk@^7n:kb-V%2');
define('NONCE_KEY',        '||})GnjkC!OLLnpy/|#+d[a|r<btRECw?kyT<l@bZRU>}DgOy!V{Q-@o-IRDV,0-');
define('AUTH_SALT',        'E/|A-+2)-e1`cmq|$7eaR+aaGg!oVHxUfac|pw,1$-5O1Nl-F[Ok==qn%~_Y1O>G');
define('SECURE_AUTH_SALT', '3;n7ObGb3;U1T^~1#^ #7@ejnl&Dj+=mzlg@?:xgvf`Q`Jh`KwM+)U|&0YY-d a9');
define('LOGGED_IN_SALT',   'pie0(D?5T5Y+C_#9R|V&i-_|H}f(|c~>-ozI{eRbQz0tYvYc~&&2xh;,<e8^o9D/');
define('NONCE_SALT',       'a;[Lr|m|Q9 V+XC3Q$=UeK}8Spvi^[<rKk3q<FI&BN+TjaL32wr1}/A/]O&^?d@U');

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
