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
define( 'DB_NAME', 'hren' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[6Hn^OU5nq)#Gjt6[:@1S~Q@>)g<}KGvZYt0sqVVwG}8pssMwjKEiL)!&;8I_uCk' );
define( 'SECURE_AUTH_KEY',  '[D}k%HBD+TRby7.mT]&hAMg4ZgJAvrDImn+<$y()4j{}e9.7|9^DP/QebIN8m.~`' );
define( 'LOGGED_IN_KEY',    'JIIY54[B.aN c$:t+WZ@y0y`$2Et.il_S@p=D:3VCT&)Ea4C/_2$,i9*@Pu]0(td' );
define( 'NONCE_KEY',        '7xOhrob*;h`_Ma7s8(F;^2JG .N$C[mfq{Nww^(c=/`5_1Xy`M*o0bUEap(hsua;' );
define( 'AUTH_SALT',        'mZQ,Ax>nT/z%HfgDL}1a%+e%:h5h8Ca8v^K0=udfH#/e[!nq+`Y[MY`Rb5$X>0Zi' );
define( 'SECURE_AUTH_SALT', '50<8W.q{*4K%a/5;,+HSDx$q]I:P^1/+C[vpI6.GUaRd9C~A!P{}nS*K2#ST)AMx' );
define( 'LOGGED_IN_SALT',   'YAh.hG]!C6Q#*K.Syv0[8,;Z,MjY$!LfG;aSx]I|Ji<8pDf%eVV^(vg#LbwS)Ej~' );
define( 'NONCE_SALT',       '`@qnLE{6dI*e^X^A?*+LvD@51Y2br6.uA|mTR?7VP?KC~@?Vu.1i7r6KZ1#3Z)XT' );

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
