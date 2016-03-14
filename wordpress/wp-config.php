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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         's+:4^-]KuA#aDt+(tmS+;4[@xpddk@Y9zO2_MYy(s&J[ZmqDbY>!O$@xx7D/kW,_');
define('SECURE_AUTH_KEY',  'UYDIwTpc|),W.40?18vTMwjt{4+f B 9/;=CCorI{++&Ij-fV-1E,Ig4|-~3+K_V');
define('LOGGED_IN_KEY',    '$*.!&sI^ZiA~j)xsW4m{A8$6_~ppBJk?C^8(<L0dP9@AkGx4M^$Le-Qx?6L`7M=i');
define('NONCE_KEY',        '-3*=SXi4{KTmSsC]1zwh-gDOp[2a|.r$EJluM:_B,HtsW2<c;2[`v|oMN|2B}/w6');
define('AUTH_SALT',        '.%7KXGjBx!-fg-0`.;-gA!4]a111Y*0k|yN9WIQ,vhz$391Q`Q=/|a;Mt&:E*EIP');
define('SECURE_AUTH_SALT', '7h*L7$:4BA!||/T|KYZ=~wQI4R_[L+`.{94.N:mCfRp[hZdz-zU!o@FOV|@:hae!');
define('LOGGED_IN_SALT',   '&d?_<[*zK+u$Ww&h`>6nmSxm-J-HRK([jBtDP4|,d8g8-i4++xsoBJ{0`pxbgEso');
define('NONCE_SALT',       'ZvEaDI?xXHM<&(-5aw>BF=2eYS>Tk6cikkK3ui $U s$<S[O0Uinv,U>Xc|Z>qd!');

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
