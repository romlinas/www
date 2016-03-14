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
define('DB_NAME', 'paralax_15');

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
define('AUTH_KEY',         '6pM3v5.0*szfRfGv[a|g|AIUghcE?3c]xhW5&f/c+b&6w+tR(I5jQ@WE-CFPq*HS');
define('SECURE_AUTH_KEY',  'Ri^y-;Ka?sOp!k9X6sjv#PQ8w+jV$nCdQ1g+KUs<1j(gU{Ev8%C2HCJC)KrQBGsI');
define('LOGGED_IN_KEY',    'u9[A+`,E7/.!6@| n^WO0tU|je? b24y+Ax,m-UEt,:`c<:A.99.u4(rao./8Zp?');
define('NONCE_KEY',        'n8JP`S27 18kM x4Kqn:a6F{-#L*pF2]mnfn-@(>u&4h|;%FL`>92X6NpZ[Xr5IU');
define('AUTH_SALT',        'uT8IiEl-)d.2l,zFmW9A^ePLm.SG&msCe%($6Q}GS,4FVA8O~%+`IAu[szVhQ|kC');
define('SECURE_AUTH_SALT', 'OtC]/aJ3C]9.c[$Trcg6?8{|,HfGSsoHB=>,:Kz-A{^oRzoiAAsP|32Htxvze/G.');
define('LOGGED_IN_SALT',   'ix+-RQ<%65K-c8VUOux^M5TBb)jK6-=^xu18jTcmYM5@RO%M5o)sGI.x-$p4kh@q');
define('NONCE_SALT',       ':_CMc][6[vYTiMw2M97>:`Q7w5j7I7y,)Gy{%vE;xz3)-=T1?jJb=i;]cOJHk->*');

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
