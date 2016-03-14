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
define('DB_NAME', 'paralax_9');

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
define('AUTH_KEY',         'A%{>3+:asq7-F,M?{3,8-A#+I*HpPsYa;+(g~e&,Sv$7|CYi,DFyWe!@Vg*-x#]+');
define('SECURE_AUTH_KEY',  '+B+Z.*zcY1!u!brJ+H6I2AQ~}k,W??+msgV<ZuPBiF EA|)x2[T00*[0rEOw);L%');
define('LOGGED_IN_KEY',    '/tY{?lovmAdm||)+| 7uQZx&vYPZ4m)8okQjnt}}KZ/nCx=f*U0vosEdy:d3z-aV');
define('NONCE_KEY',        'Z+7YFpe+o1BvE:-pr4jc6@|-C@dgHrR&_%ry$wb2M2$V<!/~D-DJf&::(cb?7x}[');
define('AUTH_SALT',        'P|JhG:J( @8yUFl,qb0`U1X]4ZEv-gvc%pe0{jM{}B+Jssq)@P5QGob090s|)dF{');
define('SECURE_AUTH_SALT', '|)|A9]5SbH$|6.c{-o=dHVg]x$yH+e+|:kB_-!y0ZFZs_Z@[*DZU(ZFfhf(}D.i^');
define('LOGGED_IN_SALT',   '^k,$C}kdqN[]4H;q)7~01+Le#mp5DD$5u,>Z0Lar6%|rhwyCm0IA))Bq0k!Bdr#p');
define('NONCE_SALT',       '}(RH[k%IypG@=.69_cYt.Cn&~^g??8{hN+7R60UTZe5eT.QBL&T?-(}5eUBij3JA');

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
