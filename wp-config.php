<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vvisionclinic');

/** MySQL database username */
//define('DB_USER', 'vvisionclinic');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'vv!s!@ncl!n!c');
define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'mysql.vvisionclinic.com');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'asdg9asdf.ei3..3+j35;}[23[]2o32o2n3toiOaoasidgnelskam03o3[1@@$$2842i#M4jf');
define('SECURE_AUTH_KEY',  '39gn3922@(@(#H2$N2n42$M24LK%:KmslfasdFnklnfei**#O#O@{{}$)$(#IN@$#I$NK$n,m4');
define('LOGGED_IN_KEY',    '89998&(88h9*DhKDlnLkdnl54#$D%F&fg*hno)j)(HG(8g8h0j--km[mpbovyCTcfvnbjnkbhgc');
define('NONCE_KEY',        '98go787v8vk7kv7kc7c786&V**V(d90h3nwlkckusivb0nVl8v89veoibowipba9b');
define('AUTH_SALT',        '2930b(bbI]b]PG]pg\SgpSDl/IWH:O#IbOGBEOI#BoiBG3O8E*#O#09$R($)#()##BG#?DLKJBG');
define('SECURE_AUTH_SALT', '>ibGoIQ#b.<ENGSnFOiwnlkG)#(##opR}p[pEp@I5u5y@O@P:LFD:gonDIFNEK3GIDNGMD{}#}${#');
define('LOGGED_IN_SALT',   'HAnaie39)#039)#9NGgopENlEKN.lN@!!O@0@(-2-_)48*)w09HDKLDnpDoidNoiElnLNeWN');
define('NONCE_SALT',       '8**88j8JnlllUYCkYH%4456xckytClv(;8gli:vKCtescuG[iVb[IvbJlgckyfxlutCV;IYG{OUh{(v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
