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
define( 'DB_NAME', 'rhafesblog' );

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
define( 'AUTH_KEY',         'RGRV<&0]mqbt:<noR5Ez*I6_wFyZ*Q%i+O[NVx,HiY|(+^_,QBq=7(e2Do0%!,N/' );
define( 'SECURE_AUTH_KEY',  't2KXGF@1F*6  bagZU[&E|`!SYabxTvh_X5g6bZ}LZRoXLNg9>bOsM]_?Ex8`.0.' );
define( 'LOGGED_IN_KEY',    'Psw NnoPM=i>BAKt#9w]j-u_-iH4rdl)Q].E/3Qt !>>1|f6!u?> 1_?RWr7Lb]U' );
define( 'NONCE_KEY',        '5qBY#Gn2:Q<`e{@vM{_=l263ZsP*GRq/Z=B(6Rn#TM)j1?JI0Y5xy(+r!QzN>4(`' );
define( 'AUTH_SALT',        ')*%ZgHFD6|/-c}luDIv^-CXqNX)L,=,n^kyb|Mh/4aP6s?~4 yeg{D<Gc%j#)tY;' );
define( 'SECURE_AUTH_SALT', 'XHVH*(o|7pSXqw=ThHs*|JF&c*tp`)$ZYTHM y8z1k>J:2<sA`-,11V c^EAB(|Q' );
define( 'LOGGED_IN_SALT',   '59B3m|tu.Q|7CDE/W;+2jW<$iHj<+syif5RKlV-Buj*zT4iQt^Y8Xnd3]c{Jfya:' );
define( 'NONCE_SALT',       'Y^<V1/sIv!R/2,oP6Ky1p~nPj.Y^j:(|ptoe]H$RK<H=ocnpzLp,D6:r/lb_`jgo' );

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
