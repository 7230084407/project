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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'piG;M_!rS|hSV}XX5dXOHY @2`md36d Iuz:cY.zhjRG8}wV$Q.e[!ard=F!=tvc');
define('SECURE_AUTH_KEY',  '#^F`8YfjV;f!nQG{8d<}KI})aI?DRu|FmLiQ&9iDByM*|T7d4(qQKm8(Rr_L{A%x');
define('LOGGED_IN_KEY',    'F.{|6$*})wWo=C)m$tK!E|;GN_cGM(+#1I/o2t:p>DSN+&CoF!O.A^UakEwL^;GR');
define('NONCE_KEY',        't7VE/hqN4M%1f$?BlB+$[*=tc*A(SJ>.ve|`])bslqWXxn5nfWVN5?C0w/> S9.&');
define('AUTH_SALT',        '<-kfv[s(k@p#wds1;gx,yU/L&i@f9Go=~qMd<UU2Gf~K&-=x`|xTC>dnu6P}|{lQ');
define('SECURE_AUTH_SALT', 'Bvl]1<=H^GZ!kBj!6hrwK~yrE3t$=:/PJ+3v1re[(9&[OSX$0h(LJKV9fezCQ<jb');
define('LOGGED_IN_SALT',   '`]{c8#^N m{-QD2|mkgt[!m[%i4*HSGDhA$}.!R@0H [:%Xt|a@uHHkFmL-bU|DD');
define('NONCE_SALT',       '4tm&=cW>y%yb=1e6Qh~BI!rh>iVdKcMJYS2o`tgE3i<t_Wb#k$R1W&lu*YH?Z*$P');

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
