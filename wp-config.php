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
define( 'DB_NAME', 'host2server1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'host2server1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1q2w3e4r' );

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
define( 'AUTH_KEY',         '#<BNcU*xfO](s|qC1$mE1wq+Kana#2%:}+GTfiF25R-a(~vWU)]Mv;gea-aNEe;j' );
define( 'SECURE_AUTH_KEY',  ';[J+<oTh+b)v^w:fCZ:AkCZJdGE&-IA>Z|BVjvcw|pH,f`as[E?1z$OiP_rz(T8 ' );
define( 'LOGGED_IN_KEY',    '@Rp-[7<hdr$*e1gaC.C -|DT9@LRhh}oIpiU+L-D-fg#t2P#IqrXX,[t<Z?t-@O ' );
define( 'NONCE_KEY',        '1pw<moJ!w?x;G^DRx(f]9<$THcBiX{7=lgfmsq|/3%9e!M*FuOE_B]PU%:Zdeq4/' );
define( 'AUTH_SALT',        '.F?by9*szV1z2hWLV[!uy:.PYosHuZ9i78>L^V(%58#i}Tj]%D=@/>=A$O#//b4O' );
define( 'SECURE_AUTH_SALT', 'Uj2L4Q|Ayi)n-#lPm0B03wMhOMq;-K3P(qIgo$PD23= pPJ9[I0rPa3AHnit>R9a' );
define( 'LOGGED_IN_SALT',   '~LN|*J,Q7VOa}a!<Uff_#,!FM,{SgpWYEkb2h8<Q&*J.nxTJf1uX$~,4t+.6Y.mF' );
define( 'NONCE_SALT',       'xjk~0Ylbo^B`(`op*xn^,s<-W<e^I,f|;~Cx3P<wM=^I1%eKD1Ov-}Ea.AU?57[z' );

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
