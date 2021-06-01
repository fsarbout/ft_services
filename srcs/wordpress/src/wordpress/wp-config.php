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
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '|qv|jWjV_.h+6YD/Rd/F,Q9&t6-b++7}GiQg{vF-^R4]g?6e&b#8/Ia5$IwN}m2H');
define('SECURE_AUTH_KEY',  '@$v=%Z~^[qZzV>OijC0Z<68=x)|&fim(,hnlBwh-l4&3<,M%}cz&@R$%_()C;kf[');
define('LOGGED_IN_KEY',    '-xM@8&Rk*D`w@(lBBp,g_]%,fm9j-u`e)uh<.1>-/g97B:WSG%fHAL?GE]492K/w');
define('NONCE_KEY',        'PsT&M3?jJ6$bs)mb/`5+RY;|@p_KE[*_|SatY+gr6|T#913Pf2DY~ 9l A`c+7S:');
define('AUTH_SALT',        '_iX@TNF?L)Ri~d[MxLAtp$I#MnRds1REE3D|H>%rfQGT7ZO=w`QeP^lv]rXdN&uj');
define('SECURE_AUTH_SALT', 'D/c;7+wrK?X)`Uo@JW,h4BKPz(2/1%P_gBiob?5|kI%5f&&!^:a@hAJ<2(z+Tw}Q');
define('LOGGED_IN_SALT',   'efUn%$o!w`)PX+M*@qkK]Uy(|?[XrV&*R_!Z|Ym]-fOPr*7mNLC_*NjQ/YXRmHu-');
define('NONCE_SALT',       'Nnt[~sALg69+7|(NtekYF>zV=5jq:W(2AoWer+aloY1k)`gWPsN`x|ua(WZD^RWl');

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
