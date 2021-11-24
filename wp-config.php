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
define( 'DB_NAME', 'kursusonline' );

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
define( 'AUTH_KEY',         'x~k7.VG#3f7AOwflwvRSA8$A~I:|IA~m~n!A/=5=xZOEZkp*=gE43/rs.[Di&IVH' );
define( 'SECURE_AUTH_KEY',  'C~-k/M/PyL,Cm2Am{oa%?bbEJO>Ts!>xr:Z-?a3]cN-I2xyG7N>O:q`_Qc.)=Y2V' );
define( 'LOGGED_IN_KEY',    'BJ_8#X:>v.}B&Ly]D&uA!4^yw$T.(y)SV,n2msD_DfbGC/E[-XpD@Zjkb3AWhBH0' );
define( 'NONCE_KEY',        'R~/QY@=OVHx2Mfl6#|;.lk_sF:J)~CyM`xHsh]I=wJbfpE|S2}{a-Vz~GHX0yl{1' );
define( 'AUTH_SALT',        'b!&xpXY=]P|,*yZWtdo&r0nEn,)x(>B&As.:^0||TNJbN@}LHDz1Q/(rE[ZG63Kg' );
define( 'SECURE_AUTH_SALT', 'L[@t3,T`YkJ+N[iB(pC)o4 m<5-LA`(! p6J{{3mzN]?{:-A$}>vTjV}(0Ryo&a)' );
define( 'LOGGED_IN_SALT',   'FIuLsuS.jPz<<~r(aVV(W$oKw#0)Ebx+Lu.D4MTuMCgx^evdvu6KI*z7x55ldjuW' );
define( 'NONCE_SALT',       'Lwk&Tg:p)7PuV)rW}h@gp|*3K#mSM@Z#/>S6_5)Y-kP&5VqO EN`4QCB.nb|,G97' );

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
