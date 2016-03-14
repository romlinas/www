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
define('DB_NAME', 'paralax_20');

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
define('AUTH_KEY',         'd^YxOTy]y^1Jr!9v{}G1>$1-:hY.G34ZZ? 5~e-^GlC370~z }Q7!8.jjBz^]2OD');
define('SECURE_AUTH_KEY',  '_+Jpc+=0|1|<R#}*F1C+#Aqg]vXE)E&Vd;3jUMX%!#~ve#Obt?grPQ;k3Bu1wpFY');
define('LOGGED_IN_KEY',    '|?<JosczEquT`sUd>Z5GOc(mVKsl>F;vs{^2&VNRh-cAT3s-$O,54qF$1_Qj,0TA');
define('NONCE_KEY',        '_j$ZoiGvHU4y=O,<dO%9GFv(;?xx4|RA9wppHJ(vg]Xz+|=+(,0+j]}n-B:*>-eX');
define('AUTH_SALT',        '+D(qj<UOz+oCb5&j|Jd(< 1$P?jw,3-wS0iDK|G rB:W+dx<- E(9lEfwSIK!sD[');
define('SECURE_AUTH_SALT', 'm7iq$@N[(q/mBUdfP91r2MF8.c)7u$5.BO?9#hG#<<`4*C]sbo]=HOmCr-vXl|oZ');
define('LOGGED_IN_SALT',   'kfTs<[L5,SS 2DDiPCiio>UBnuJH$,pg[|W7A:eh|b E:rL!+UlC7|Lsd`fBxAd+');
define('NONCE_SALT',       'aKN$D|S9DZz`(P<h* brdDAm !BM11?G18bC-F5VNpe8b=J@7|O]bgJG*<1Evl>]');

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
