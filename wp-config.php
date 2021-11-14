<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mystomat_neksk' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mystomat' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Pervil-9' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YwH[SX.=BGa0QBQG3JXN7WZ}v8q{&Y.@1lz]IX&B 4bX@b3mB|iP.){JT b|L7&Y' );
define( 'SECURE_AUTH_KEY',  '~tLQ|X?zDB~`v+zl6EoMt?a2S+#;i2mtPv6yeRQ6#<1TnH8X,}V]m%,r*nn>l%Q|' );
define( 'LOGGED_IN_KEY',    'CZz3<[.zyvR-`DFwlz5i)|Ck@h+G2OMd~nLov{U&1M&I]D`KT{*Z2DKz  #f4eX.' );
define( 'NONCE_KEY',        '3nk/0YgD/Dj23mDu(VMg_/b@6~QwklyAX_(hA! Pn4%Uxay<(sOYr)G7%~?[7gwI' );
define( 'AUTH_SALT',        'y{kv&y{Es3JJrmzaF5.a)nmWMIiCkn^b#DI3QWrB=Pr`%;$UmU^>=Wxi=i1?C~;T' );
define( 'SECURE_AUTH_SALT', '7U^5)QT. Z01}F3h.f%{iDY539!*ig,HOei$ W_F:U5P3;0]a1kV7vecE]SC{@BD' );
define( 'LOGGED_IN_SALT',   '0v+s+=t,kw~W|*J>P+8^ovdWlf$!7/O!aBXftL~Z[qHRlakXKQ`4tyv;&2TE~]A[' );
define( 'NONCE_SALT',       'Xc/d+l{-)RIS0,3|2=LEOlr&U_-c>gsP_7q!1^5W4oy+>4,EgCg2m68#!Pc.(zTR' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
