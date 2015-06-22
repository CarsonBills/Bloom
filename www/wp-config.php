<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '6~bV~]1eNY[2$cifN0HgP:6*8e;1{wp&CZQ_Wyom2pR6 JPq4O. <E87s: L.]mn');
define('SECURE_AUTH_KEY',  'y -BLUzmnI=Hnc nVRm~ZtlL)k:N7ca#@=f1CUfB&=*|t|J=oPr8NwYmK#UOZ*t-');
define('LOGGED_IN_KEY',    '|^oKY_V96IQ +pt^1]c_TFBE}wB$(k!h-RQz71<U-.G3GQ.L,^t%&;1S&,9 r23/');
define('NONCE_KEY',        'i)!i5kRft4!9ba(7O7U{1Cmm)UB`[v|HC0wexAxrVZeBxU{.9d_y| |FRI8%B_8d');
define('AUTH_SALT',        'qP;--6euVR]}p+<f^R/?;K-b`%.NZMR.A/.^6EX%+)m)MrU%yKy_6ecZ#&=*-V+y');
define('SECURE_AUTH_SALT', 'tAnco|-*uPa~g3=j+A,JNdGIxTSl7(>=x ;m|rvyXA-S:aLB`?rjjLuIR}0wEH~=');
define('LOGGED_IN_SALT',   'cBC}0 z-UBC:.5 ->=BZRA+}[{_iow$W19qjB>~l28+;8Pj>Gc|>k]9*ommFgF#=');
define('NONCE_SALT',       ':XIb*m#~>4T_KcGN}}tkMe7yN&rC++j%8>|P/A-A$`B-i|_0+-7Y&P;9wHM+e=y*');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'PJZXyaJLOu');
require_once(ABSPATH . 'wp-settings.php');
