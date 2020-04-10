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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bfc-db');

/** MySQL database username */
define('DB_USER', 'remo-bfc-db');

/** MySQL database password */
define('DB_PASSWORD', 'REMO-bfc#5');

/** MySQL hostname */
define('DB_HOST', 'mysql942.umbler.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M&.7/}s2y@h[6hp8h1)#3>JnlGAxBWi<O&kHyz}d7%/rFf9O/J$TMS} mC /8jOa');
define('SECURE_AUTH_KEY',  '_>t^f%X)@qH0__Y~8BBcqoD7B@[*Y)>GJpOt6attx@rE,+`uCkhV^(y+7X`~fS[3');
define('LOGGED_IN_KEY',    'rv4m$Ez.{V3SO?hKC@bt_%f2L%*;p %WBWuY_~ N*wX5`}A#>`p%ss`f y.B@FdJ');
define('NONCE_KEY',        'lEKnBEn/P9U&74@r)S&l*nzu?g^0cs,_f*B9/F!@K9N3l7`=XAxWEzSIS ,$hh}|');
define('AUTH_SALT',        'YZiCoVb}qVUpd6qk.4kM61PIV>+}{Z%</11}F)3%=O^:=Xsd]8sPL,+j^}E~Fmqb');
define('SECURE_AUTH_SALT', 'qby:s! -Dm,O0>O{rhHY]!*#I)X>U.~,|duPMbmc-][7Hrn[>*jg[h T{leFknrw');
define('LOGGED_IN_SALT',   ':{>#p4Oou+oYzF#F>y8C.fDQ:3TE:S2?I{($foZ/ABlUl#rqosG|dt4tcq&[o7l:');
define('NONCE_SALT',       '(`vf|.En~*sr/pD)e8YY)+m4t&0R}L8HorQKA0%h%k2)?-9>itEnGp=bYt4&XL):');

define('WP_HOME','http://brechofashioncarioca.com.br');
define('WP_SITEURL','http://brechofashioncarioca.com.br');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
