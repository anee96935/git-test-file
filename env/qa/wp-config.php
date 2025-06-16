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

define( 'DB_NAME', 'qaathenadb' );



/** Database username */

define( 'DB_USER', 'AthenaDBUser' );



/** Database password */

define( 'DB_PASSWORD', 'AthenaDBUser' );



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

define( 'AUTH_KEY',         ']!O>=STMxP>4k(H1^~8],qzbvl~uU236Yqw8hEGjpaxcukW]kfV!4APBxAjY*o$N' );

define( 'SECURE_AUTH_KEY',  '7n:Y#{*;$qb_>l>CiISsY.VnU]%z>>e]H9e.b3HXtT;SbctKx.7f]~I5wh[i7T< ' );

define( 'LOGGED_IN_KEY',    'w.K)WNFAyY*!3|1aM52e8Yf!RhQUso0sxu+xTwL:?#NCRcCkNO_`=&[/d:^aO)Ld' );

define( 'NONCE_KEY',        '|E[;-Jc{Itt{&q0*f)>ZJR;eu@<@l5@AM(w{@HA.e$|C&nk).=,RgE^)DLqxR*qU' );

define( 'AUTH_SALT',        '!=&2Q_?o,G~EJ6_ @W,|bvwDwlL,37&9iY1,V1$$q|RGHPz0%5<YEy9MVi0}~fZI' );

define( 'SECURE_AUTH_SALT', '<@Q1v:&rxX1s1UJ;S|jYlud)V!=Eq?N3Hm?VF^Tm^+?S1>:N6=<akPXwdk11@$hU' );

define( 'LOGGED_IN_SALT',   '~21xh0,hJnzlv;UplsfPVlm*l?1EW Pj|I=s-.^+fE7F4>r&,2`rSSo=EvS;J~Xq' );

define( 'NONCE_SALT',       'ZX>+V.%I4BEiVXYl9XBTrD@Mdzc3m5pJS(*/X#G;i&B3i3q~T_[RjZjwD%,rar/g' );



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
define( 'WP_DEBUG', true ); 
define( 'WP_DEBUG_LOG', true ); 
define( 'WP_DEBUG_DISPLAY', false ); 

define('WP_MEMORY_LIMIT', '512M');



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

