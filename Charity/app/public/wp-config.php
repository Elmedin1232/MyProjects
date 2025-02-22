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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6io<7Zwqs0CphuTzNDB-t6x8[Wum+r.vsl-B*OJYUxZ-bwT^(9OGo1p72G;K7(WK' );
define( 'SECURE_AUTH_KEY',   'B5)*E5Sm$27> {$;V-fYC;{>yIu)!6o/3;@U5F7b!RoPo&wr- iF0S|[`hKVZ22;' );
define( 'LOGGED_IN_KEY',     'L=>1mH,^fTBIB9H8.EZ&[QP,B0m3E36YxPGP.Von8zpFysB1`9!YOl(xcHv6C|Ft' );
define( 'NONCE_KEY',         'IzyE_Po)lq?#fmr}vrHU1@QNWdz|a]nEBcp}T1~o(r%Kb&oH)a%(@c-C`3-r4/,Z' );
define( 'AUTH_SALT',         'UdD3aMH5#vg(m.jGr+E$Bp&dUR{AnH3f13]b^PL&5)A53dfr`ENa4>S5mlJ!r%@6' );
define( 'SECURE_AUTH_SALT',  '*^ jfzhAn,WyG6C&A6>]v8`F+t5vyGg]U`wIDZEab6k45D?4@FX)=6`t/=1i3pjp' );
define( 'LOGGED_IN_SALT',    '`5I9&,H?I*iW0us?K)$gQp*WUf9o1T31IQ1,mTM*L*?CkM{shw?0-L>D7k g*J{M' );
define( 'NONCE_SALT',        '#mCRuR1uZr8>)&*{BRzFG-^RWI>v0kV0q&O~q^+g_|sec2KG<Jhgb*`pO(V9|O|2' );
define( 'WP_CACHE_KEY_SALT', '79:/B%fa]~KKR]Sh5{;Z+S*~XO^Ww{]ishK#k=sY6HTNn!!Zhx}Tj2$Lw8lj:{!-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
