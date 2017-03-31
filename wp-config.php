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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')ntvD<Nz+lsTEF7bjT>d2($]_gH}2 o<2]9+91tF)Jo*)XF.Fh0O9O!k&jFb8@D5');
define('SECURE_AUTH_KEY',  '5]>=b~phTq!L#n3+v6VPMZpY|pNWd{v@gE@:y1BWD*#TOR.0X;9%6e3%N:[vroyh');
define('LOGGED_IN_KEY',    'VkA{a$]np6:R+2sI2Z}WXcOl`bj/~io5/+-5p,;{xoOt!F=D|Y0@s}pQ+[jlTUCA');
define('NONCE_KEY',        'B<?,pqrYut1{ql=vFrg^eEoq{nzgKpAPb^hY9oIQAY|0t+1/2%]iV$?J(UFj^Tvm');
define('AUTH_SALT',        't4T7_~k.nAQB%aimt;V;>XKxdWeeDmSEQM g)(]pZ$Qhd2|t*#dD$;EO0jRr4:hd');
define('SECURE_AUTH_SALT', 'Z=r0rfCuB<Am+[(sc]|&v>2$`J+GC0-Ff@gduN9RA7GE${zsBf,d(K+6?7C@YY|2');
define('LOGGED_IN_SALT',   'J|W~.^o1c5{J+P.b4`V7{Vyd> +b#%tW{c]7h Wa4p.#iDU6Pc4XH^1s(sanNiV+');
define('NONCE_SALT',       '<@=%(!)Cg/]Vy-,44Lh,Ed8%]xBo*Ou0EQ=Me+?frb1[`L7/arnG_vDep_yYZ;9,');




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
