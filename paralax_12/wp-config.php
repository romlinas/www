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
define('DB_NAME', 'paralax_12');

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
define('AUTH_KEY',         '7LPmZzPuEj!!,Y#UO+wQ_-jI|ExOJ$mwO9s&G*TC~1Ab-%_3_%lm;|dNNu(LP2aN');
define('SECURE_AUTH_KEY',  '>-^Gi[?(wZ{+Fi:3B!FMGYPU.VxZ&V4>R]5%O<YT1?J1ci7w;SZ@p9 PCPu3Uc|A');
define('LOGGED_IN_KEY',    'abuzOiZ(:>kg1gVxyb8d!(1RYC{?x9-}`_IaxAo=}--^YRL:-c:2b?8%|Al-2Bsx');
define('NONCE_KEY',        'x?TI@%.EBG[IY~8:{uF+NtS02lOO)-j1#Eupa~-mT?a:2y]9(&l`g97W+g3Mwq8W');
define('AUTH_SALT',        'Qa K-n[d1q@l[P-5pf+VBlo$oKGT:+XK1yNZ2iNmcz[a RVC-VEnd>^i@F2Y.q3,');
define('SECURE_AUTH_SALT', '|)j}/+d7%--hwX{[D/i6`Io^{fHruZN`?#(VWQ;5|#gmpseFf@z`S@o1-p<-a|=p');
define('LOGGED_IN_SALT',   '$E4L|$}b^w%uQ+OdsyWn4^9P4[ P:f;=a| t.IT&+@o.@-cfa~eJw#+$,7bO;zIm');
define('NONCE_SALT',       '8hTp-ik*/ 3[]>.l?}$B(bwBM$b6|#]jZ]wBk$,{;VqTRkppm24k[N,+fLk*eqKJ');

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
