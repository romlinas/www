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
define('DB_NAME', 'paralax_19');

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
define('AUTH_KEY',         'k6ybR.sV9[_9,}z.vs}Uxi8t?:n:u_9DO!gsNuR?rj_?p B=y<u-+b+4PumuWWf+');
define('SECURE_AUTH_KEY',  '0z:DDQP;>teeue7O3ge`<ATl15R306{cWJsugj^CxNt+k:/bS,<w!N%Q~Q!WM[ML');
define('LOGGED_IN_KEY',    '.``[lKd`[Mddh?#mams+8Ei/zIGxJ30g*8b:V+?#X~`Z}5os QLnpN5u+{H2Fw]y');
define('NONCE_KEY',        '2kUXt$aGT*g&/*-beU7}t~vp9pvHE4*!fpk$Ib$HNIXUHhLKqYy1+7W[PWCgKQ16');
define('AUTH_SALT',        '5LW,u31`J P?)-]ZP`|x6s^iH$O*a#g{G?R++BIQG{kQK84%XB<G&{!H%}y@#+I$');
define('SECURE_AUTH_SALT', 'l%E,XD(Z _E;egdPMJ#vq:,yV4+87XYt*`L6y?k^!bKBhM+_dmZe;gV*tH|>XukP');
define('LOGGED_IN_SALT',   'Dt<RRW-cJ+R7^Lu:onuE&Rwh,pZU6l,Hyu@crR_c)KgcM+2`wb(QzIL_ih!6+Nsi');
define('NONCE_SALT',       '-q_|$@}_XXO7Y|(lv}+mh2sgvocb{A-+PAG9,#|q?`]Y07i-u>C*|,AzRiI@G/&D');

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
