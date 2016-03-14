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
define('DB_NAME', 'paralax_5');

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
define('AUTH_KEY',         '<?SQ&s|V(+UOn|:ReLW9Mb+A`|iJf9{s{JXHQ9^1/_fvD)nhs@USAnJH=CapJenz');
define('SECURE_AUTH_KEY',  '}bvoH!g2I77)i}3B2*oL?N2x.s^*RvX`<uEErcwJ[>i&|1g}-6@*D%W@h)sa0=4v');
define('LOGGED_IN_KEY',    '1d;Dg3bus a+<XiN D:zaqrK(*M<hd5K57BdQ7GUh|C=OmFHoAcOr36-6}u,UxKD');
define('NONCE_KEY',        'X$UZbN[?QqSXU-)o>9Hd2{K3[whv<Mo2Ju.&!+U?E>O*&j4t}!}4-u@FY$vydwON');
define('AUTH_SALT',        'Dppg$sNS-J>6c}p~=HWqWt)4`cSv|2{^7b(a]|`|>8jUGWf2GYQxo@E%G8D-,FFm');
define('SECURE_AUTH_SALT', 'B]+_j46.+@vUS1U;v-u^TpiiN)q+9])wGa4k:@Y>e7y&hw$,w0oQunUlKs|i-EY}');
define('LOGGED_IN_SALT',   ',Vg-w4*Gaw=]({hRBO6,A1n(muFO2{zMdn?F;mQ@exwA;z[`-p#TWRY2_nt= 5PH');
define('NONCE_SALT',       '?[7pr,Aoj)]aRko}vBWkHnvVP+#cWLa>fR`M5%C~WGGQli}=jP2RgwS({i3}VOw^');

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
