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
define('DB_NAME', 'github');

/** MySQL database username */
define('DB_USER', 'kan');

/** MySQL database password */
define('DB_PASSWORD', '151102');

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
define('AUTH_KEY',         'iI#r)42=~rd%9?&Fo5-AF@;ZhPP7QE7qgMkCv=&(e(hr[T;-F-$@w1)6sh%avE1,');
define('SECURE_AUTH_KEY',  'zCAhz=M+ `$GF%s~=2#xgyb*`70F(~ve:&~Mu=GPc18}*]khM#iq$bzFCz)4ys~K');
define('LOGGED_IN_KEY',    '8t@Y&FbD A)2g`i_=zC^lI6tAsU~i~&5v#77s2:bnMx.lSHHr@a&#t(@@YGpwi&x');
define('NONCE_KEY',        '<h*4@/ULk<ixmNLt]d9x-X[^-tM(dz>8#0QR2iSx$7pJ<MZz=ZXC5} DTPA~[_ )');
define('AUTH_SALT',        '1EU&6g)L%N>sY@,N@@!qFsS.;.H|OC|FxdR8s$CCE}w1X1vS2Z@NFr1IrC=TX)S=');
define('SECURE_AUTH_SALT', 'bo|<?aarc0M$LrGa] g|esFSzGI4nR7rC(<EN@Z+{$F&8.zcZLIh{66BOH M1kWw');
define('LOGGED_IN_SALT',   '@W;`GG^xY`(JoIF!O&g=LEWi%{#K=`)t#|yusKMV^nr[QrYj#J1JqhF02XN$9A?@');
define('NONCE_SALT',       'qCB$K7WT5G`oKVk >ZsOwPY#Fn#&B0GPy|os!:`-,f7H}rpT=Ak@!@g7=b~sl=>C');

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
