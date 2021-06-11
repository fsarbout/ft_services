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
define( 'DB_HOST', 'mysql' );

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
	define('AUTH_KEY',         'M0|xU|KSWgqHVi@,F{P)k-j%#^4iNwu.MS@[J2raw2?03O{tY-@zLraG~vZCf~dE');
	define('SECURE_AUTH_KEY',  'I83v0ldLm+tsVC2 p#Wj=V#;+2q<qat+!):T[Rxoy#I<Oq=@-QQKk.H[3Fr4U+t~');
	define('LOGGED_IN_KEY',    'TI~XvfppW[kifd gsAVf~>,w|!jpeo0r#q9p`*a!$K`rB4/CF:{[unAc3+!c:Y7g');
	define('NONCE_KEY',        '[N|9|YP$:6eQ+Emg7{+*hni4a,2J2)+LqZQ&Xt2X{Iv#P~mFkm-3EgobZT|3RIEg');
	define('AUTH_SALT',        'vmOzYz5|]OH<s-;135e}sPG/o8&H%_LGN,(krz-72O97~W{-+rg]| V( 1%15O(-');
	define('SECURE_AUTH_SALT', 'L-$faht(N!MByu({q6_vtZ]yF1XLVH|~Br]l=1.w)7;iu0p`!A=$WL(`x%~vELyx');
	define('LOGGED_IN_SALT',   '*P|o3d#F(]pI{ckSXJ[-%i|3lIu?NAtq~+4|}f;J%[fY-mLxStLKg:;o5 8UGD`s');
	define('NONCE_SALT',       'rJNI?$oE?,jgNLl393f8FQ2Ij/BSA_LG7XC/5anfsA@r$o-WX<t-g# (><6Cw#qM');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';