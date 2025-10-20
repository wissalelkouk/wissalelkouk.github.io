<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accessor phone' );

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
define( 'AUTH_KEY',         ';h5W)b`rE>GEQ<WLPZaKU;~g[gv|1d-R?<4fF.F#Fe75iz9y@DO!T-n3l&tJ%3-b' );
define( 'SECURE_AUTH_KEY',  '&!$Cje;~M+E/G[o~/J8#!%:G4 ++i[gF]h0>2IGJ*&/A_?D<Eq#ga#/rku&7{9R<' );
define( 'LOGGED_IN_KEY',    'mDwCtCe;n]`w#^]pTWcpzq4mZtjYYHoXSJBqvi~a}WnJza7JS$S64JmU{--y}m,=' );
define( 'NONCE_KEY',        't7jgq@C(&Hj;JyH^P`Sc`tBL%gjAm#7RkoA#.ps8&g[U?WdY<RA{bC2J#rm<7`zM' );
define( 'AUTH_SALT',        '$n?kaaVH4Yhluc|/P)$?XJ7+[K)xJQGu5q~fP-wl2fEFg1AcN7ABp8[ ->v[1]br' );
define( 'SECURE_AUTH_SALT', 'yf,#&`Wy6P8;f>*B>Ves(M3ZfAZIfC^xkFy$UWr` ~d_f{~<a#5T<-JvjqoERE>d' );
define( 'LOGGED_IN_SALT',   'd$AaPae0Lh0kn=#C`a+fShm u*$*ZB5G<TE)At@<La;7p/[>w*jv*c*T?S7qegCS' );
define( 'NONCE_SALT',       'j(T`Uo7kqvb>P{1URK|/Nz72:}-0%{JDGvX.oCSq*.{]=%}N<a}Zi)0fLANO[JS2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'SURECART_ENCRYPTION_KEY', 'mDwCtCe;n]`w#^]pTWcpzq4mZtjYYHoXSJBqvi~a}WnJza7JS$S64JmU{--y}m,=' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
