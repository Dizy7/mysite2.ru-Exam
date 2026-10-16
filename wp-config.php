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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'K-7D>x9CuW~r&Xfh^}$lbIcG8Z8kI{0I$gD&*]3_Luvffx`}g2`0w[>j, MKsTC ' );
define( 'SECURE_AUTH_KEY',  'fi6y^xcUn]zXDGG7p(vkP*s~4 f08/Y5Aq[W_/UMdA/PuNVmMpiHRl;}Lof$T/#X' );
define( 'LOGGED_IN_KEY',    'JaZEevS=e,Vd6Svh-<b1f0+JIF.7sgJ(z|fVB9iG}Xn<ftqn4kmmWq)316J}zaYC' );
define( 'NONCE_KEY',        '250*gjcy`%v,n)A~Bz@I-{h] 5rPvXYuA4Spwh9f/ThOtX|OjGt#q_R_Z_M%H=@g' );
define( 'AUTH_SALT',        '8zl@LZG8(XC6&P>W~yho,!]Fv6$A`c*{9|G04Lp@i[ =qZb@a{9:~iQLj92n8Mwu' );
define( 'SECURE_AUTH_SALT', 'A[Lm8?[&$S{R*yh@%OvX_slxK&s=8et^c`eviO$}$/aX#(w[Ag]B@5i*[CQN;q>:' );
define( 'LOGGED_IN_SALT',   '2[cDGS*5>YlnMs:-8k~BY2N(G 2BQ,1%Jg?+[LuMYx66qZHK9tO.r?J<bX-UJA!p' );
define( 'NONCE_SALT',       ';SI2{9GN.m~c%^ZjgRE4OUtL$h+u@Iwjo+jy>)V`>!=fn3y++Xr<v0ak9piV9B1<' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
