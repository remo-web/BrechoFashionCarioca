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
define('AUTH_KEY',         '|iA}dNrMjHm[kxyMvD,S@m N6%% 0olzrN:#5xE`oNXIWmR<dH0{6@Y5aM/._Tw}');
define('SECURE_AUTH_KEY',  'Bm0j;-?Z[iVz1m?|;tuO/+pyG!v5_/Zvotlit8e*vcy3_Sw7^w7^.rvpn>WT{mKB');
define('LOGGED_IN_KEY',    'DY2a<+QvD%Kg?kX[&P3>:GTCFItEbQna-0-ZzGaBwFg C%[UK3nxTWY8%7Tj0~C]');
define('NONCE_KEY',        'S7>x84)D?4cL&zf}0*Ee~g6p.lj9o_}wq]n|T#{,e<N)SoB&Q$>F9Jm<krTuH*.k');
define('AUTH_SALT',        'Itk=|>drwJFC[R 9aTHK+qI&bekN-1BjB-?3,nR7c{#Ia^dzn/mS>c1xV2z;QR=`');
define('SECURE_AUTH_SALT', '-@?!kACa|o`v&jx& J012=y6}}poA}~FTHQyop|0>=(|oh<-xt$[XPkhCr|=RNI:');
define('LOGGED_IN_SALT',   'amGywivig$H<t)l[QiNh-~3Sq!TT4XhXB ]p*//V*hxhkLyZP+<GfL$Q)tSupd5Q');
define('NONCE_SALT',       'PZ<z(ym!K~`gD9Us6Po6~z1!Z6w7wgBIoY_Q`TA:#8}sk` PA:@]@`.qJB_4pOtc');

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
