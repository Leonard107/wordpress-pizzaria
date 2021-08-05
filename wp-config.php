<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Hn_v>6=[NP49^W6Y=BPq0`yoE1-Y>4+r83Rk&$>R)%&UBh9Lk/q$+b*ZC.FJ3?!@' );
define( 'SECURE_AUTH_KEY',  'Rz-Oo-OAXE$MiW<T<6EBlm|Qft?rd^q}qOR {xp1aTZV5%7_N>(&Yg!(SDE!Ny:p' );
define( 'LOGGED_IN_KEY',    '%#GWCN>Gtt/J^|KV.I0Nu1YPOx]_(9<AY&<.sK|Va-Lqe)/soAzcQ|rqzr@i|(WS' );
define( 'NONCE_KEY',        'mme(1 4Jp/o~T{3z5WXFR9:366uwj+$q3EpP0L}va;;],}i^:Kc|.0*%Kz?k>&>X' );
define( 'AUTH_SALT',        '55`oaQ2]=!Y]1}v;];*CU`-WLP~13r:fDV!EQ!oztE<liz]FGW_n:JN|#)k1JRQ1' );
define( 'SECURE_AUTH_SALT', 'F4glS0!}S9^7f3K#H(i`(Ns)~V)qUmP5gW)HT8,aD=$Ce(^F5Cp$2&>J%a]T/tpG' );
define( 'LOGGED_IN_SALT',   'YaGW?Z&I?.4lzRKQ0MioTTIpub KUa|Gt}?C.@0FZA>fo`8@jRrLbmu<BjxThF^;' );
define( 'NONCE_SALT',       '@sV:P=fmL-w<Q$iPv ga]A?_L5}^tqm&D2:]5u7$OcI4ZeuVvZZ`YYgS*5CrzQ.S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
