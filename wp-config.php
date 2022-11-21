<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'upquality_wp_bwmgl' );

/** MySQL database username */
define( 'DB_USER', 'upquality_wp_bn697' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E?O~166@waQ0XM5q' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'yOc_0[5TQu2Z7t862Te+P_6lJk/UD5!!6l9D[t*|4[[l05f0Lx54JaC;2|74GA;v');
define('SECURE_AUTH_KEY', '7a1x(0iyd2]0PR40|21Z++1&MBG3-6K6CiRI2b1[3a]*)obAZk2TilS%0LYr|]b)');
define('LOGGED_IN_KEY', 'D#4zQK~2#Dp/sS~8V2w9+7Mg[#)(2X4l#EHp[1r19[oM2C9zRRH|)]BP+798#9#;');
define('NONCE_KEY', ';0yr3yLk9ft@lu4ZMcG7u)6S2OgU[27xi+Kemj33B2_IkP1m*C!D56Nd+7:g/ES_');
define('AUTH_SALT', 'U##F]s58Gq+Xi6Vd(0%JxZG]7N96Tw(pSl[8;~4+]8%_T_@I5[L21PYW_@G~#hKr');
define('SECURE_AUTH_SALT', '!oZ64a+TmA#@4P0O-26Wzu|j]#hnK56)AP@/nAJa3hZ!MH|tp6yB)o_QG9A45778');
define('LOGGED_IN_SALT', ';2:/tpg&[(Jbv-O8j2E)oG43KXf8G836Qnc7P@oV|jqVh6@)7x-h%Z6kbkBtEm*M');
define('NONCE_SALT', '(7@_|TY2978VW*X5@~90c_W8~B]jTF9y@X9L72t7U%1cn;942gwI(;Q2C4lG7~2y');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zTNDGV8_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define ( ‘WP_MEMORY_LIMIT’, ‘128M’);
