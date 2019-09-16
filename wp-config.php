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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'wp152' );

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
define( 'AUTH_KEY',         'WocBhUYgRQ-yy`LO ;SIF!&H<$[DS9Trp%pvXml*z$8V%Uu5!8S!`]zODtVC+rq4' );
define( 'SECURE_AUTH_KEY',  '/}.l,<NXH@8m/3y$4DT~(CY*Z:`}Ke]@$QvMWh1XXF~m2qTz8q8B$EL!dzwmm%Ro' );
define( 'LOGGED_IN_KEY',    'WKOotY$($c%0CML5!Wp=mFKWn{wDn)A6=Pti<jV-|YLxn8B*@}GG)>h|xQJs;Q{v' );
define( 'NONCE_KEY',        '[OY@qyoVIM|gP*qo<.HUu_2A@>Yq)lwtvp#4t_U yVEh@^ME#b[;eY#w<+*KY1*D' );
define( 'AUTH_SALT',        '!Ki)w0:4PE)oBMt:GZ/qv|+H`hf%;Zv(5P*ltWi6Gf*d&k9ZLwga]hz_Fae75xNy' );
define( 'SECURE_AUTH_SALT', 'Q)_Jp8~(R>0v6 vFf!yV_zXwvoJ~ca`SSunwku4tp~o9},LYHhT1.HAMqR]Bs20(' );
define( 'LOGGED_IN_SALT',   '}};Gi+m+OE]3E`Er1i;V C:c|xv0.qRRyFHawG#oT!%NXE;KhoReIBY#n)~c?uX]' );
define( 'NONCE_SALT',       'S9k(ndVD[kAL,iF=5<?2>z#Rm^:}zS#|)&8~XLVOQ*%F,~/GK&Hbi2I:B1A3]n+B' );

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
