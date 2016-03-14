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
define('DB_NAME', 'paralax_7');

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
define('AUTH_KEY',         'GCKpr^L,w;3;R<-Q2oovc+mK]QA#2uaS!+^(6Q<`n)AT^-rB<+DpUiaESbHH3DE2');
define('SECURE_AUTH_KEY',  't}lo?|+jUB#Opm$eUlb4Yg&>W0[%K}`qZ}|f=~4SA9oi-5jo>TGQ2+3]lH6s+qs=');
define('LOGGED_IN_KEY',    'Mv:B* n^GIOLO$8Czm(+Tc|*fFd>FSf~VO}3&H/_+t~CvR}.vP_OScl-K>vsU8vp');
define('NONCE_KEY',        'kcYbH!{za}_Uq{e^Y>=AbYN}!~J+ws MfsyL)?(a^&V^^/1!.Xjg;3N3YyrFWTm&');
define('AUTH_SALT',        'M8N4o=sqg>q@l*He(6ez&62|JXiHBE}3_iWiLvwm+ahmka>^9~Vz-P4uevl(6}O ');
define('SECURE_AUTH_SALT', '[J[XslgnsY@!T{]z!}zqaTyn6E+^CSt|%eZ2m}wf-@adF*5+l~}]uL`oXj5K:b(k');
define('LOGGED_IN_SALT',   '&sK0<)F-aWaB!qM|(6G#@OV#^cy{D0<as+Z]_bL[$oAiq5rZSa[>0lu, 2L*2yEf');
define('NONCE_SALT',       'eV |#$Oey3Qdkus=|%a*3fm:?]o>% v@<$-kjN!W$X}}++U94[J97r&m#)!7TML]');

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
