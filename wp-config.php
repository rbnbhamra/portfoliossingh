<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
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
define( 'AUTH_KEY',         'uR?0V>q$%&[d9_WaHjthV0<W]{Kt5,u~PdVbF!SoI/V h vU[[/<,u3OYr09>36X' );
define( 'SECURE_AUTH_KEY',  'BzR=7DrIH:/ -PNdC@ll{wUKg=c{YY#,{X}Gh/v.v%w;xcYXx#lmrlt+B2c5I7;(' );
define( 'LOGGED_IN_KEY',    'rY*qDpBkBr.)OT~D:K_Ti3Zd&q0>99~CjM;sBg:%#J-uGGlp|-2H6K.qyam:zixd' );
define( 'NONCE_KEY',        ';=jH`UXjSX.K FXdSmtsTyGw4)4fvW,b*JE.!:st-3UH><.gwjD=+BB;Q/9gL*V6' );
define( 'AUTH_SALT',        '3*N7A0A%oZg?AWClkb){75A6t7IBzfJ,dP4EkMfB#02={X/F2WENz-BQW/_lb!jj' );
define( 'SECURE_AUTH_SALT', '<N}oZPe%.GS?tJ[4B2fr.GK<V8VNBu//Bp:WIDoReJcQ2$EWccj!;FLuy&N~Nry5' );
define( 'LOGGED_IN_SALT',   'sVg%;|q^9#W!9:sFrCc2kESPBN!zy|iG7aDA@[HEssjMN2qblezJP{EGfnFu,=2=' );
define( 'NONCE_SALT',       '*N,Vb{{bj{7#_)i:N|I9seR.NnC4p!Zf(1WQSoRgu6W|pTrE#4}_UYQa[GAjFdTW' );
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