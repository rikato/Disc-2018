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
define('DB_NAME', 'disc2018_wp');

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
define('AUTH_KEY',         '5ZT`@S%l=1ND@0[VfHj/-&vtt)QWXWyFyxC6>(:-HOP@o~v]lt89[E(ofqEqS9Wp');
define('SECURE_AUTH_KEY',  'v(qdlMeLN_a+V*_K/HEg14NQT|W5+ICs(ER!nM8R*xf **wN]T<5|N`8nz?tLUNE');
define('LOGGED_IN_KEY',    'ww!t6GRDs[~` Qy!Nw!_8X9@:$PU<t5j>2=uvUL%UUb)X`Bk6+569C@w@a Fi,h3');
define('NONCE_KEY',        '&G{z{b,45QS|<77_0P/_@tO,{@A36iCFzN |9E0>>)*3NTQ:#-^~</j$]oc9w|MW');
define('AUTH_SALT',        '4fqZeXJ%7,KoP@TzYI*vtkA(Cw8R=TFt4,FL_>+LH6]l2G_IEU+H*?;fruTQ*`_6');
define('SECURE_AUTH_SALT', '8o_AhqA>%.m~8S;3{9^ }tj&[@9@HspQXQw|[q6ee,Bf=<$COv^I^I`R@[qHC^t4');
define('LOGGED_IN_SALT',   'ppttxTS8^h9^VAs^Ptv(C=64 s2,PWJ9u&5q#[A0OP D1GQacF7(GI0$>W*-]({s');
define('NONCE_SALT',       'ZnXrA({doAWrAF,fJp^e*C^!?D)AX~pkESZTiB6rV?@qb2<9Uis|L%mQA?;7srE|');

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
