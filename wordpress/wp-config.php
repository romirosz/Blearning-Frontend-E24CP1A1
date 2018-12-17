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
define('DB_NAME', 'base-14');

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
define('AUTH_KEY',         'E+ h,G~__~[_dHT2?fF]@hd{c!c *%5BXbADOZbB^OW> t;[Ka`sW~A:vEL1^4WT');
define('SECURE_AUTH_KEY',  '=CN%@8hfwqHF:Qpk@zLkN?#{L]jUVr.6SuYuLJXuI[kTz4ZFSMJ16d(N&JTH]oBQ');
define('LOGGED_IN_KEY',    ',XxQ-UtXc/;5@jrlQFDHbyAe#fMrzGv;CdP9%_Mn+uq)sQ2!Vfeb;:S>^a.czj$.');
define('NONCE_KEY',        'ua,s}p,x;L4<4?$PZ(&(0erh|1#4H-n(vfWV-Ow[kme!ReSX-jjOd:i-,/KUj2GV');
define('AUTH_SALT',        '0}t9.8O9e7Bfsf*g6ib%cx9q}B[JNZQtju#FO<W:ul:u yVo+lIc*::]V1.!/<hl');
define('SECURE_AUTH_SALT', '`3^<0$mn@2%t}-.,k=7U:>+aBWnt&Pk(}MAl%Q+g,uJmYjr9E<>Aone+:NU~#:>|');
define('LOGGED_IN_SALT',   '2sd9U0Qfu8j5Ah)qJGHr;|UrHmSG3IclA}qIVt>61eEt:V.qJ#F,oNSS?j1 m#dx');
define('NONCE_SALT',       'L:T/7^b?SKgpyl::$0@H(uoyL]un~q_+7gp^kf`6pT$s.HG=AE3T:sj,n=C~QM-O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
