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
define( 'DB_NAME', 'ual' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%>cK$-&v4Y$52h2I{-q~AR|@+ 8E2V9|kqJVyH Hng2aY(:Oc=4j5?%kO8n~Ga.`' );
define( 'SECURE_AUTH_KEY',  'pUb#Vo)RHkxA>]mhJR]<+pjloaFP40XXGaD7lt;_PJ[z+5{we?FZcPlZXGq@w1o%' );
define( 'LOGGED_IN_KEY',    '=R/;[K0~|gPqG{LHVzs2 ]FU_n$3w;5{G*^z2K7v%r&B Z_j|ISS0HJ&?Qby@7s;' );
define( 'NONCE_KEY',        'Bwfz=%1wLV:w{9u(Ae)LD@Yy^8fz-T`;geKc /3mgDh*p_fpcww/4Urjw7#kz62v' );
define( 'AUTH_SALT',        '%7$[U[{%s=ZSUDX$VOM3KHRdIP*)vQCpy(M)sz2C|u2rtl23^H +}EJTL&J23JuI' );
define( 'SECURE_AUTH_SALT', 'lO*}S!)@YAFbCR&;xe7bpo}|AQ!w`*QZIy6J[`&J_|&xgi`m0Q-$oM[PJvQm9c@|' );
define( 'LOGGED_IN_SALT',   '`v+?x,$~jqo]*;6QO D?d.sZ8eDc*c)UXZ ]O</_ S2?(u.qCoPu+mJ3JUf {)g}' );
define( 'NONCE_SALT',       'B,2d/vWIb8oPIaPr)abIB``67@=el4mdRJ~,re0WB+&}Eo;5(<TOzQ{.m,^.?-%z' );

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
