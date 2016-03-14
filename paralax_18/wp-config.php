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
define('DB_NAME', 'paralax_18');

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
define('AUTH_KEY',         '+[6{M,*h5:^Z(m5OnM~tx0[{Y/g93Y_g2@Q_7s`Bu~@1<#Px}[wSRi@lORY{YxBS');
define('SECURE_AUTH_KEY',  't:D%NZ+1m[a3Wj/?=g,Zl!?kI&Ra:O,h.L[mYTa-.bZ1hho|U%?HIq)-!9O(IU8*');
define('LOGGED_IN_KEY',    'Mcp&6s4QmV|y]$+|z WMz9Np|UN{hRaHl?YtDrGG{RT<h%Ghoq~|2-Ff79kf5uw:');
define('NONCE_KEY',        '>-,X2+[y*R4oe{t/6J`y^P;mgf$LiO7SiE1h!+fF[6;!pzeeAS*)US-?gJ=@Mng|');
define('AUTH_SALT',        'f0sWb0R|@12C(N`$* Iac`5x:-?bBnp<jl8Q*V7fapYOUu~(z,g((|VxsK=gp&{G');
define('SECURE_AUTH_SALT', 'K^W2%$!p#]tS  5ub!5(Jag%Ba~)C>{-S.m}&>pc)g3ahI[hiU/0`y,xt+3eGA|L');
define('LOGGED_IN_SALT',   '&<KrwZ-KBkeD0BNAeSsxL[~OD`HB3<5K2LNz,/$@_IJ!C[m&q1awl<&/7sCDr:,?');
define('NONCE_SALT',       'e|i9$dW}*Xtga`%-+fvf*eH$Qz|X1gF>++gVxF,qiv#HlxukckGVI~t!7Z)(8~,*');

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
