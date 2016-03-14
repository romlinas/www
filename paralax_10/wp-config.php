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
define('DB_NAME', 'paralax_10');

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
define('AUTH_KEY',         'P0Db*nMS9W^j{gP4bbZt87KO{6p33cUwQ}-J.v[Ia.f9N`gUtxtg+/?c6]6iy$si');
define('SECURE_AUTH_KEY',  'K-0$-YK.ns/>Is*kt`6$0C@$Mp-pm8QU1;efJux5x#X&Cbvz04ob2pwc8L3Hswa3');
define('LOGGED_IN_KEY',    '=`G~d%Uq%|F9y-.U:s$5q!{JgzBIa[g6a7MAfIYC(KK{]ht1h0AZi`=L+pUqK-.t');
define('NONCE_KEY',        '[/&M|!M:5v&@XhU[h~9e&:Jd`8b$Bt7j##CJ$}@kE(!GTH{H3ZcakksKRFv=hfRb');
define('AUTH_SALT',        'X{GbX>PO5<K0`uXynEx5r?nCp/axfC!$28iO~a=f>d),%CG7sAx=8jrhH+aSGV:5');
define('SECURE_AUTH_SALT', '|izXJ:,DYNs.+, MG+K$S0zMnsaVggU|f}NhbuQJAFG!,Q.n:Nc*)5UX3+U6Q>RL');
define('LOGGED_IN_SALT',   'WaoaRqSeF@|cd[_M%|%MH7ymQFv(UniDeISI4SQ9X%;S)H+s++r:9|Qt[RM:`&-O');
define('NONCE_SALT',       'Brb?k)|2;Tv@nV}PR4+}EvRI.W$[Niu4*m00Uo]<8+Qt/5}UL^`m~HT<Ai!WO`!|');

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
