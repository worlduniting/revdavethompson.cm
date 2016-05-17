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
define('AUTH_KEY',         'h=sI`,a$DZU!nL]VYuZAmE}O$VGM MyZ#4Tp],79uU5C9Y-`)FRj.M.lrB3<$50i');
define('SECURE_AUTH_KEY',  '=N_Vcf {2=H:IC~3qOv/9ie)A{I2n1>oiC]!aITYRq;~xzg#LDa!Ja@l_NQSDmeb');
define('LOGGED_IN_KEY',    'N[(1K~?b@)=N|m0q?l3_@{*$N<gLL<7Sh?O%X{$dx m%gZ?@>4;T.]po1-Tj1>8$');
define('NONCE_KEY',        'Fd7MTb+R&#y|ceF^Bcs]i9Z6c(SxQ(L,JW8n(EYK2f( YPtZ&h{K?FBwvF8o:LW:');
define('AUTH_SALT',        'qy~-uH[rK9@@/N|F..F|/X<i.tQpjaRpjt!2dttgl|KcoV4QcWCy;/c3`+<zF*f}');
define('SECURE_AUTH_SALT', 'fsB7+pr&d5IABaI`s?2UJQK%j=U*T/zJW,AC(U%t#v}K/Eq?yT_?B$}}(26r9/eS');
define('LOGGED_IN_SALT',   '>O^&Kw3QfT+eIS#D8ey=r]g-{c).,]mh)PUxr,TKvzrP~O%KQUq0-N^A6l`!4C5W');
define('NONCE_SALT',       'kDk?-= tm I9OXN`I0=F,-k-#-.btKgl3<pjL,qm8[b,Ga7GZa[, <7Fku(sB@u&');

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
