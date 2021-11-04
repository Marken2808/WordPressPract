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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '5P(Fj;(Y|_SG*8kF[1c0DN<SL07-6` Ni#e6t5/m.>d[U}9OA)KJMv$<7^=:p+&O' );
define( 'SECURE_AUTH_KEY',  'K,cCS2{IFdM1IHHxuXdDA|q@3?Hqx45#cu_hh/5j/!ceW?OIjKE&;vbVd`nqo16j' );
define( 'LOGGED_IN_KEY',    '^#@XMDH?sP]&U^PgL]@Ny7!#F91viO+39 O)!wj$kLtgHxPt&DvM_N=4T4ZH7sW#' );
define( 'NONCE_KEY',        '=2G$KR]AXr>#>xX$:i$?OSDI >Uo<D7?=wtf%y8&J37W~<k zYnQ]VW1ZcX A;if' );
define( 'AUTH_SALT',        's/)S!s+:1=ej=f^d07,/_[6B9g;0W8S(Kbp1ho9ib/%Kd1qvqD2zP~7*NiA7%dPQ' );
define( 'SECURE_AUTH_SALT', '@_^%*pWQwjk2}IWhDO5$Lj_@?WnL~aZ8|~Rf{w5.<XE{4f^JEE^Jb)P:*a}C*j&%' );
define( 'LOGGED_IN_SALT',   '.I(MEN{hk{94#y !/QGRjvD.lRH8bh<<Qfg]*b4}x;bb`Qg[.6`n^d89+^ca@KR?' );
define( 'NONCE_SALT',       'z9zCVwM1FKjJ=a6Tpp~;~mi{bSe9w1QL_diUMR5E90S&VI50~5pRCn7eN(o+_j:K' );

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
