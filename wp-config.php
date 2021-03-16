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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mega_estate' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mega_estate' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Inavif73d377d5' );

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
define( 'AUTH_KEY',         ']<?i_O?.L&y$.Gl0@ RY(+0Y>2A%W-a=u]0&1<d3kyUoafi|9mN:[w_03E(GvSIz' );
define( 'SECURE_AUTH_KEY',  'cE&*:&#HJC4jCO5%<)kc_y&Okq-HtQjVlERkAN+d1yGSt^Pr3 .|}T>D2P+PI%/W' );
define( 'LOGGED_IN_KEY',    ']@.s|Nuh;=<O63-J6/KIVMF%-6Nc0rs)6Y[O [EbE]gEl>(JrYtMpSaKA@@]glKj' );
define( 'NONCE_KEY',        'MQTjrXgck!jNqr|KQ@lRT;MqZ^yN=d?S3E-+m%.r%L7)|)`Mqxwnp5f[mFn(U/S;' );
define( 'AUTH_SALT',        'ra~LfBYNS`)H4C`>B;]/fb#%YjlspG~saXgqg#wWLbd4C>Ij&YuiOic4PDc! ! <' );
define( 'SECURE_AUTH_SALT', 'fv=oI.hc8jNeXEU&= uBsq[sUeP?:.m4I6;4R87vtQU$3wFt}l~v^9bP5EHU}St7' );
define( 'LOGGED_IN_SALT',   'qjf[z`:RT[gj{cv?-lG;mY!;dB,XP*HiZz_BbDj14UZm<c8`o&[Lf~w?X;%M5d*.' );
define( 'NONCE_SALT',       '=~j|Mf/)RhldJEnwv~&N]<g.;JJ40L4s@]9$k^YAR#zNC|asGSn^4F<07h(l{b`h' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
