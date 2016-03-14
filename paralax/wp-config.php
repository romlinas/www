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
define('DB_NAME', 'paralax');

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
define('AUTH_KEY',         'F1F39V{+j+N$:?Vx@jZ^R}DpxF>/Y:u<SW|G}^}/&}9rn3_NykJD0fJcF95;C!n|');
define('SECURE_AUTH_KEY',  '.@fx bz~-]AuW+a/o=E,=`GxF9#Y2^6@-R,f=WZi&Oug}$&Rj-x7)W2Uhk=q@V-t');
define('LOGGED_IN_KEY',    'a}V1La|$H@:BVR4?SY&%^;t4h5}$a $>VkW7WmL^q3KcVkpkJo;V>J{uW.)ux.B=');
define('NONCE_KEY',        ' O#j^2B~9*i|;x[NqkK1^X|}<eKFJxAG5+<;W=[C-4BcNDnQrj(,K5<g/wGxJRIV');
define('AUTH_SALT',        'I9*,2kV=#:e,8cO7wxlXR~`>>#!5(-H*}BC!#RpsGiB?DP4B|=!`Wx-FpsWy]9w5');
define('SECURE_AUTH_SALT', '-g4<QeR-lmK&TL8@BwJ0x&b0?^0JU=c[DKh=kxGlrxEGzXV>2A<a}ZYt]K&jPyk4');
define('LOGGED_IN_SALT',   ')||x5XwYK0qKn]9-Q{5RH<;4op+p%l wq^4JIxv mO?w/i-ClAr-(4&o:R@M*J4q');
define('NONCE_SALT',       '}a>x>B[/6_8!]<xPKy0RGZs.X!)LM#M:e:>h]/v]r)%+pH(kV-aZBIP[^Y93. =j');

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
