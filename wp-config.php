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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'boston' );

/** Database username */
define( 'DB_USER', 'boston' );

/** Database password */
define( 'DB_PASSWORD', 'boston' );

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
define( 'AUTH_KEY',         'tYf/nPxTklVEO@CWa[5*Wz/}:Y^GNY*(B)KgKMOLtB^ FR:`@WeZfGvyU5J7ojb*' );
define( 'SECURE_AUTH_KEY',  '?R7QD8n|:Wo)-9~hTI;.,ZLUU9A0NSo|{&V?|``#)ki9 ]lcEHF`4&Y].:Y?xka-' );
define( 'LOGGED_IN_KEY',    's9?>7I+V,.z;(l6OBocJvp8r58T{.fKH(Dr&YTL9Ae+>au@;*XH2Da}>$OB=B4a:' );
define( 'NONCE_KEY',        ',q5dNoKch)YoR$i2*@*=9H.ZfJ8;7?8Zlr?G6eERb_W%pAnhX!JZtpEGYSP5Js(1' );
define( 'AUTH_SALT',        'Muim@D-+ fn]v@.^pMD{kKrAS?3L6G&<y&8@i?:.M&8JWMLBZP}vTw5lPVF{L^N+' );
define( 'SECURE_AUTH_SALT', '+^X|WojwyA:6*ZZgGE6vK;Qd{SWFMn5hM[}TUXq6mkodIpEu27KVC6aj|19T-2uP' );
define( 'LOGGED_IN_SALT',   'R><;4!~2|b5i- zzVs`AbE5[!z5uxbg;C/uB6)rr<O}XoBC,*tTy2]{6ZMw<b{w!' );
define( 'NONCE_SALT',       'cZfqQ>$]<Rh;x24xIH_e.AOyY:e(; KqL4CB/*,kmuX_V)T];Y%,l`!uE2w^3>]<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
