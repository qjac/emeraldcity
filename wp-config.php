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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/webi2000/midterm/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'midterm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '.Al>r?{LTT1d@InKgrA5cgq***VN1wnS^ih6In}%g`t3mSARygkh4B|h/sLKw-z,');
define('SECURE_AUTH_KEY',  'crZGP|xVFDx4I|eBZ+k|=8#/A9**6=WEL*%sVEl-iE`6lz;B#|@/(`Gi+>Z<%c7r');
define('LOGGED_IN_KEY',    '4:X+s?b-bgE+G)n>5~NYo^U9(+`fe:Q:ua g-Yj8_Kk^<J#Izn$3U<xYTjb`ap|Q');
define('NONCE_KEY',        '8,4LpqOb!jc._aq).~KD%o4bAJ:fox6`ybER-i!_nU}J&Hm_X6A3PSr<LW#<)T)J');
define('AUTH_SALT',        'FTTi:F+m^w^SVuY ;S3}Ns_!q4-?qWbv|b/uVc/p#cPLmW?Wv(+;ffO[EN+<k T5');
define('SECURE_AUTH_SALT', 'Z#FCH48+r-r3rub/iI^1+3K6<5,CC)k*ZQUAEfxUD5~AEb[-2;td5~D|zY3>JSnk');
define('LOGGED_IN_SALT',   'jvr:Jes7KX.beK-+B/)(1J-y-t|pVN#nX0yM:c!Nxn_?n$^%G&+44-e.;=F^2#`y');
define('NONCE_SALT',       '0=7K`GF.<%UFvx74uEn]XU&L$xK9AN,lO;A6!=t4St(|gpGO(0 z0C:3=jr=F|Ud');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mt_';

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
