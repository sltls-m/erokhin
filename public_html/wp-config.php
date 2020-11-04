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
define( 'DB_NAME', 'erokhonlin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'erokhonlin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'duuxzamuwe' );

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
define( 'AUTH_KEY',         'Wqt=g^tm7cGpx`3rN1F.G}5!-}/x7D$@l]9{T}kV)6+()1h<i-W2i+nV?uX^jHQq' );
define( 'SECURE_AUTH_KEY',  'h;NFZL?jxhAE1OA56?X*c^avnmwji<W/#;>`7tZr:,D.@S_P>x(e%1(R=i^5Wl<r' );
define( 'LOGGED_IN_KEY',    '%ULGfkFgyy5)I_XU[t*&MYfa >f.*J-lf>IE>k4~pU~8z[ZzjVi&v6q>1Kgh;r]7' );
define( 'NONCE_KEY',        '|I;#)dQH]Yt/`T #kKi9&n6#on;`k8?`Ub4HJ&!Q@:[/z&g au:y/ej9m,7 +1F!' );
define( 'AUTH_SALT',        '=.KCQ&uip)du>=Qse<@sQ5@*M6|hB(Bm@SjTBH_bpqjS-!sR#nx2Z+Fb7Mv:pn3d' );
define( 'SECURE_AUTH_SALT', 'Z+O!i4]p*TA_LUxVkk7.WHh!y#sB]UGt*gwMKl(pjl)Dq`!?1)(Sgvk6$:+uwD;M' );
define( 'LOGGED_IN_SALT',   '[_z:N| Y8ISB:%2rggF5gS(&A[NfA~K:jSqIzgf$)4IKDW:!^>0XtPl/}P6Fje7D' );
define( 'NONCE_SALT',       'wx;(%}3$+4Ag.xixUwO>I}8uO(8K8|UtlE21j1^o}=.!CFkQM^{%W}ylHw70M=VS' );

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
