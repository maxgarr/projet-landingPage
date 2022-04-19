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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet_stanne' );

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
define( 'AUTH_KEY',         '4GTW-b -@2JM}R#^=!d?Dv61Za!{s(j%!U]<Pg^>UMDr?):!8]n3RPRif502Hzwg' );
define( 'SECURE_AUTH_KEY',  '{PCc.PD% T6T)Ol,!8?p`XW5_CZIk@F/{xGZmvYy@Q0_SpNEo^DJ|GD*[F>$A`2:' );
define( 'LOGGED_IN_KEY',    '<tA=Dnhcqt[LUt0xTH:_$??HwNNm#|0i$]<LqJJh9wr`3^`eb1m%d>Rm Tx[ZH0T' );
define( 'NONCE_KEY',        '>*&mVp9!i6fp_g=)]UI{?_)}zUe%FR<uE<BU/JAkUTJ&6axq, @:KLH<=yUyn%tx' );
define( 'AUTH_SALT',        '8}[d}NH&HK4&{<o)0**hhR7=H2&u zm)VaE-z8[T0:uudu0;FIz-p>Q ;h(HkU{P' );
define( 'SECURE_AUTH_SALT', '{(7@JQ^8f|7tZ o42K6Q/m: .zk(I.5}OWX7|f,x{n:0c^!4fQ$Y+ydY:XbXw]/S' );
define( 'LOGGED_IN_SALT',   '[T_iEu.m`-P,r4{Y?N<1&1*$tQ6-YC.$gk$EUmt?F45e+&x=-^U:K^NqId?P[g4U' );
define( 'NONCE_SALT',       'LHf,q0s;B(Pd9MEjxfGC2^(t(Ue3zg.+au|NWlg[#^K|2`dvbU4bf6Sjh(96DUw_' );

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
