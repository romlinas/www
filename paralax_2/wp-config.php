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
define('DB_NAME', 'paralax_2');

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
define('AUTH_KEY',         'j6h|BxCn IT1|$1E<~8~urs,j2+{f_6S|f+<d $emk=!w[5ftygg_l_q1nRtFk9Q');
define('SECURE_AUTH_KEY',  '*uIe_|kmCyIj<y&Ed5O@5Q<F9B*aZ&qr:5EYS_<] k&4SziN>^4Sd2oiL+V29+&D');
define('LOGGED_IN_KEY',    '-hjZ<qF=> p:OE*Jq3*|8=4nn]OgL.0Vo5kbL|Imf?R{xm%L~.%ql1M0Gx[Fq,SI');
define('NONCE_KEY',        '0Szep/q;t(5@Jw]K9/+B=WBTqU-QL$-~G;]GI,BV@k&*-=(`%/_^{i<,XN00/`?p');
define('AUTH_SALT',        '4yn:u&M`w[b?:)0&LznqbK%yQla){d|oyaxo|+a<9#X bc%AB!}CCib%LVf0bI0o');
define('SECURE_AUTH_SALT', 'q^i>+9xB<R,Oh/UUfuoG{0mdmZL_VqIox>F*1>6a|f9wpmAk1CR{M.YP+D?xAk==');
define('LOGGED_IN_SALT',   'du 0c<`sd?0{>L H*!6=Sx)31,e7)p>S/~D+{^l#K]Z,m,J)WG@289]EWorba`P2');
define('NONCE_SALT',       'U3#7T]~]=={Nf#9yfG#3RSpC$:|UE-mGJo G:dXr2%wx7a!rcH<>:+abvD%86`>{');

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
