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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'IuXWqMpIenEbEeJd4RLp' );

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
define( 'AUTH_KEY',         '{o~ v?*PnKNT$3?er;Ib7HUY_}15c3<}Cg%!h@32%<&d-q8mWppuQzVekBdr$9SD' );
define( 'SECURE_AUTH_KEY',  '-,<(Xf*2h;geR9-FT*[tMsaTX!q[SOk ~>HX^d%VVCKD)_s[2K[lqpxis9n>w@o*' );
define( 'LOGGED_IN_KEY',    'xa2#&MhV]62gH#I$3jcJ==(RU1P({7xL3N37K3sbAJ}<q^ky}Y*q@qj9[#REbmWC' );
define( 'NONCE_KEY',        'P@xGR->E!wQQh{({cU=;G@*yy;~8m9d#*CaXx c^`%FO!_Ck1hkF=hHb 4) mUjw' );
define( 'AUTH_SALT',        '`wY/1<Onf,G,Iw?HP>WzzQT~VJ*UBYa1v8,#z:lqr<K}byY7NB=3*]Du$bqmo;P2' );
define( 'SECURE_AUTH_SALT', 'b[GDE7Jb@CJ, 4+5ykRWX?U.N,7<%U.N5TNiYMHm])A {2=HyZ5Ah82m?5Y?Fj^_' );
define( 'LOGGED_IN_SALT',   'ryp;&Xq=S5inRO]b-0T;j^_#uK&fFuVQ=WA S6*pi~pBZfgkH^F}lS~;ia;/*?;D' );
define( 'NONCE_SALT',       ' NTb6u:z0YUhfj!5Hnh9/j/CR`,ot5NmV_M2X|~y^_Q:SP>/2;XsFaW[`+9ui$N;' );

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
