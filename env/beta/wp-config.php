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
define( 'DB_NAME', 'athena_azure_db' );

/** Database username */
define( 'DB_USER', 'yenuser' );

/** Database password */
define( 'DB_PASSWORD', 'Yendigital@123' );

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
define( 'AUTH_KEY',          '`9vgLHR,h$G9-CwO(mBAw79D0o.[IEBy7/J3um>b~8g+fQr}vfI5G Va}y)+5B~`' );
define( 'SECURE_AUTH_KEY',   '6fXC}]fvM/]aj;P1P|nin3uy2,[ yK~m~K}j)%;N;ZNfGw~/vOOJ}7aTIx}$*EW`' );
define( 'LOGGED_IN_KEY',     'cDGQ,W 7UuE-%IqMR`hqKL`bd%lrXv8@uT~1(]Ulk;aL<fHjoiJ]tm5HkJJKS9cy' );
define( 'NONCE_KEY',         ') ~8D,A}?j0!]+jbw7vR<2<S[akULf(b?SjS3?_yEj303ip4p4do2dHUy|e$l--{' );
define( 'AUTH_SALT',         'r1)37sCLjs3oVH@*rszU ewBl2T)Yv7$Z4FOskn,8|?BS0>*6:B;+G|H6>FcpzP0' );
define( 'SECURE_AUTH_SALT',  ']Ot9N(~Lyw&U?aYLXE24m#L%6Q$Jw(sgtI&}(kPGC`|F]^imZ)/k;HtJqMjV{OxB' );
define( 'LOGGED_IN_SALT',    'n3 aUMMGq@9Xc*S_x,J-,5Iwx/p8#F{:|Mj{@q#%aO{YFb)FcDzv0JUt-~%021eP' );
define( 'NONCE_SALT',        'Ch#dCBe-ZzL.pq--t:crOTu64tiFH[.v,QoF&O=7&kSb+_D(f?Qo^31Lff-$KQ[A' );
define( 'WP_CACHE_KEY_SALT', 'we!!2|E@e_c$qTesD({m hj?=MXyjT+,WHVnngZq$Qg^S{sOm<,H&oq-HGeX540S' );


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
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
