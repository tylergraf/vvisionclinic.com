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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
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
define('AUTH_KEY',         '99F8-];iV!/!p~+lt;miw1QBk A-Zxnq+Nc=ixhW9E^eHtd5YF_1Q:wICIl{|B&y');
define('SECURE_AUTH_KEY',  'Edrs~D/&h#I6JM}jaqdb7AyA^2}/XU?Rr4676o>K ]~:EE_<cTW$&K5:Vs9{~u/^');
define('LOGGED_IN_KEY',    'JTQ(d@p6()EgLQA?7~-7tV-qX#?tATJ>] V7++tMuo%l*(e5D2<_@,.Ux2< CCvH');
define('NONCE_KEY',        'dx@ql``f#n%_^++T2[$/>@AcZ)%!HT0l{H|97fTk*zg7,w:0-C&=3UZkJQluoUsX');
define('AUTH_SALT',        '3?b15/DOIbY0NP=.#saci0QdG4C$h%hG mQMx>>+liXjZ:dXlG#Ey!{kMB*Gb5Xb');
define('SECURE_AUTH_SALT', 'dl!7v-sqf;Avud.8&d7}WkA2d(fF}2f~t<_/Q2esIAK`nxr|G4~;| NW{r!hZ#^U');
define('LOGGED_IN_SALT',   'Bf?d|.@+,CJ_ZRC*;Sar5.]wQaCA>gCl}@heg#ohy{y I51L!4Q;XnwE` 5>@49>');
define('NONCE_SALT',       ']58ua. }]hX)uDN ?}@6+-H]}69GL#SfKu)s5Kictp Oc>x#u<zf6!tK3X T{ U^');

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
