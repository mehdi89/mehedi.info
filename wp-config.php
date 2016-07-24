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
define('DB_NAME', 'admin_default');

/** MySQL database username */
define('DB_USER', 'admin_default');

/** MySQL database password */
define('DB_PASSWORD', 'web1001');

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
define('AUTH_KEY',         '=GTMP76{2!%J&tvUB!YaCPF]z^r1bZh>ZLGDfr,B4[s)S#fC}=`oJad5$%TER%9(');
define('SECURE_AUTH_KEY',  'qcy7G)tieXBub}UyRIawKfm&Jns~]#wO_auT$RhsYlN:DAqHAv6b&J+|ABqK7T%m');
define('LOGGED_IN_KEY',    'DQYFj44jeq^X^Vkm=!w;5b]{!DITR8)3hrLX>Mp,R<V_}Z`X>wMzw%Tf5ky59.|s');
define('NONCE_KEY',        '+DO)i<{Gq.Aj6<!CDz{kyp1]lxS}oERql41`6k}68,C*+=b@@S%L}G.a< S]Jv,|');
define('AUTH_SALT',        '8)4VUu*hv;*u&Ym:BG,5amo177aDciYu|z.%t8EXeJ.y-G6vm-Oe=v y>z9YQ)V%');
define('SECURE_AUTH_SALT', '}!$<Q6N=L^v(_{[2li|bhOO6 ynZ<Xj1OM81t%Z3M8kOpRT5Px1IT(4Po=%QH!N]');
define('LOGGED_IN_SALT',   'ZjHlRFo1e) };`d^1ch$[9Odv<WhVM_HskC<B$`x+207Vi(|$J]5-Qc]D#:qGpAh');
define('NONCE_SALT',       'KNq4r.[Bx(aSR!9tdgl?F34SXE>O_d$`RPo>ZCr-D2|VeWyiv*xM9U#U<MdSK3^C');

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
