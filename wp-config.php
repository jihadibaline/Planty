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
define( 'AUTH_KEY',          'UR$?u=->6[a0_p1|{oSe-^/0q0#VKkQM3Q6o8HO9h~{VQXw4m5#YTNi+c<P])<-m' );
define( 'SECURE_AUTH_KEY',   ']}gY/QL4PzPg 3f9E$3E#`-QI4}T}Gb9cR$/[0I9wgI8+@g@_<;faAMoWZ|gP$lb' );
define( 'LOGGED_IN_KEY',     'iwrY+1whhM2NGow?mkq`4&t0UF1zKu4^!X! u^=uV_z_RKa/-bBhtRrI~WMi[KD4' );
define( 'NONCE_KEY',         '> a:qUSx ^J0&%!hNpD!G_xm(XL7|3ACe.OJRIp1_<w+4YD:9qU-{5.?tMLX.<k~' );
define( 'AUTH_SALT',         'FA)vEq:kQ`1Nsu&hSWc.f4<GQl;O8G@7`(g?UZvh p2egg.J9t@i%F2IoR*OvY/~' );
define( 'SECURE_AUTH_SALT',  'N%!5;{B/nA(PK<Ltwl)(sX;s*{G%?wjH}KKB0?an}8KHeZ]Le2kS$!a#fvTwpk3{' );
define( 'LOGGED_IN_SALT',    '-dLDTRi9@vze9tzJylv]x{AOK-:cgvpY[<F006Ol#4 L>ALPrL;4yjHAs}&^voeb' );
define( 'NONCE_SALT',        'r|FT{ISB[s1P::cy/of#vo$MBsMI!)EnZf(XgL{6Z+6,D#e:<-45%6Cj>.A:$wuh' );
define( 'WP_CACHE_KEY_SALT', 'Z[3u?~6TF[,s7-y7aGN#B{F=x<S?#f}T=P-no&j:kk)JZ4;ql(-gVS2hdC.6I-(4' );


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
