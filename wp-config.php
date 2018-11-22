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
define('DB_NAME', 'mta');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '?W2;%f$I.:o3b5+<;nA.7||QR3W#<n)rnX9ldqqv|?]&%-y&V+wb^}h<(}DnJtz%');
define('SECURE_AUTH_KEY',  'zXXjP!A<[ssvm`EM oe@pD,2Q/_?T@8;L0:0#d+pj:m!7 Vidj0d,+ADLT_3lj-F');
define('LOGGED_IN_KEY',    'l) ^A^6/!4Drj-Wt1=VD,6W3$(>edU(iO#,10!0XkjI0=^}P97t^l0XMNdX:]jE[');
define('NONCE_KEY',        'U?C+rruM&v[(m]3<@yHn?]!LX.9y<#3yQgV}p`y:bLxT4[!E3=9?_SYPGx?RA+I*');
define('AUTH_SALT',        '[0]Vm4%&>mbe{R7ayc<)o-?6F^?*YD,:{U1qmY=,<r,(Jz#!W9!p^eApjByB|KJy');
define('SECURE_AUTH_SALT', 'n0{&`*&E%{bm!SkjdTp`9q%rB6@)-La B6%v4tG-aVWy8o<qdEXzLTZ_W6@W/:<{');
define('LOGGED_IN_SALT',   '0Fqk*(b{auY5d[vUIx`$K1}ESJko^lIs!<i<Rv4;sv1;dL|ARv`-RC@kadizK2xj');
define('NONCE_SALT',       ':#i+:z]bCF_(0VSk*.xFs$4TC[gpUR .p[$4Z?^.lZS?uG)?10yf^|OMMlB:<A-2');

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
