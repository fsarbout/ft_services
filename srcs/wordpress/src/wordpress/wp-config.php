<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.99.110' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '`|!_DQAV&FV)c.Xn#Clee=Z+z>1*B8L&purR%^-o]:tFJo|T#}|`H;{CVjcgU-]d');
	define('SECURE_AUTH_KEY',  'n2Uq]nf;7~k`~11j%z6F3.Q=.LD+QadqpaK(7o_>F7,6~X*C@gNHOsXaT,]X1V]^');
	define('LOGGED_IN_KEY',    'B-SH]}]ux~~ZBY w`$Iwk-qA>Z/uXp,@>dtzIYPLSB(K=?X_Ec2i2zol?f:43nj/');
	define('NONCE_KEY',        'jOs`g~F;**|uh#%e `>hiT:=7pD5%V;Ndt-kX,f.Y1e`NR>yK@!!SAr2(PqpP;`n');
	define('AUTH_SALT',        's6&B&{/AZ~uB+>GakNc+x|fG@;g:-QlLXc|Ft~[Ab#QQ#b2IB+he+dmhIM$_(5J[');
	define('SECURE_AUTH_SALT', 'g8B+tYLNc:FoQCON%<[%hW_dB2ryE(-q53Ur8y1IX9Rqc.-+N{6Ii_8uL|8@RJq6');
	define('LOGGED_IN_SALT',   'M5+9hoZW@aJw+|}1LT}@y6ae/dMAFVb/^@r}nms{+%KB|Nx e!M.a~d?YFpTDDR$');
	define('NONCE_SALT',       'Y{RlG9_}q8=%T|xHQY.Xk1V6O]D>-+G`5U)04];;WX.kt,E_nyH}rrj%{}PiIvh1');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
// define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
