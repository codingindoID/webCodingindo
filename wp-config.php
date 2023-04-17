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
define( 'DB_NAME', 'codingindo' );

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
define( 'AUTH_KEY',         'A{^mVz/ .wS;5V;3R6{.&6Hd_qx?@0Z;s2r67sz*K`01B[r5q9$(Y8e|SLa(IRVk' );
define( 'SECURE_AUTH_KEY',  'f_fqk8aq[d,3o,|In6mDy 9JP oOZ2RU&gv/yt>[+lT_8]3E%2VI.>3T~=a5N2kU' );
define( 'LOGGED_IN_KEY',    '@u0}@?&+.nM}dbd*(gyEnKJ>C;KMj1^q+~OHI{rLuAZD^;$q0&w@,B1Jd?5V.)/X' );
define( 'NONCE_KEY',        'qL|}v[iF4yrl^H>5$p=V{ZA^(%f=e%6T@Vh/B. y%75?<_F!pv[MEQI@SW*`xuCG' );
define( 'AUTH_SALT',        'pDEa2(dU_`)4Ld>(*u^#@=d_^GZO}@Q(HrB.NtVE0<Jt#PjgwtgT_D#Jc?BIMXo3' );
define( 'SECURE_AUTH_SALT', '~xTr7o@GSP8])}TR0t,#c<H]s@ZN#N/;Q50l^(BN+.utSE]sr{)`_Aqx])p|# d*' );
define( 'LOGGED_IN_SALT',   '01t8|AP6Eo5&_3wW k 1:vT1}U8F(zH|~1TW+i(Y|Bt]_B$CzZ{f85UO17J.M#MK' );
define( 'NONCE_SALT',       'I?Q1fOaAOYA(-_Iv8_kS[|3eFz~w2-$)uL0{MdW7X_$HcvpEuk>K=ssHpH{lz}{G' );

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
