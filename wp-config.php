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
define( 'DB_NAME', 'cartboard' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cartboard_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '6p1zysj8' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ms9KHg[.bq~6>{XWr*U:uUz5+DXqXKo}(Df[,Lb<7xb|nIA?Zg8al?%Pb&dfYv:%' );
define( 'SECURE_AUTH_KEY',  'c-y/NU2j.h[9x4_nMUz>ZxX^bTH6U/I]IV<sk4`{x&S LoggQ,@!k2WUm;iRCZCT' );
define( 'LOGGED_IN_KEY',    ':v[y]hj_0eW?8kFKW#@b$!zH}_D_8IEBD#i:@SAwQZcJ$3(T>L&#hnvMkrf;@(yT' );
define( 'NONCE_KEY',        '|}P(WYd/Y+}fMK~47^.6::>$`*7rtVVJ6nW 1xlm+`ZT*FQ/b=VZJ?~vA5HhYy}@' );
define( 'AUTH_SALT',        'dZPWys]v7Z{y$|T;c!f~[:}iiu&$.?5b!D67=)S<%uObQt7l%c_uFkWKeG6t[16X' );
define( 'SECURE_AUTH_SALT', 'xBuy7K@4nv?VdE*0K-r:dq7>i]y@rHs~ICbi9#+79,u#O1, &o(Ex`-aEXi>g74Y' );
define( 'LOGGED_IN_SALT',   '#|=5r/>QR8O`H6o2[s/<?0oPZ~Nfb?.oTjQfwEk%HyyN~KIW~gN|jZp;QT5NI`6L' );
define( 'NONCE_SALT',       '(}n7,0%J%[q/s^KLw>c2b<rbgmY>5vq|K(GMBtLv+4e2EDl8cFMHZcITXP- =9.~' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
