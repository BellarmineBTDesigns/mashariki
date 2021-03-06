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
define('DB_NAME', 'mashariki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sogoni1608');

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
define('AUTH_KEY',         '40{=-Ge&V{`K}n-*Ys$I-z2i$4|R6V1s}tKNe3,PN)<N}q+O$ZsoY4q:Z|8,_A)o');
define('SECURE_AUTH_KEY',  'jqy{K7`KtIV<a. ,my:eu=V|HR#vO+7EO8df+F==]<mscbf|?xvp]JDOl5!@nKl;');
define('LOGGED_IN_KEY',    '|C=qsNuN~M[gv57B0|.SUB+ )]SU$#{Z7YNdpLt)X]64u}8w+b.Q86UCPkHdU#_S');
define('NONCE_KEY',        'T+X.g9;czSnS}-FMZ.0+%,q[Bz-:JsR;i:+sj87n9<Hv1*idj2ij=w4-]@g9Wa3{');
define('AUTH_SALT',        'kPZHBPs-arK3m!&gxT_`++5ZbnTq>pv6!YX0*cPN~b9Qma5(|TYdEp[*J-efJqwg');
define('SECURE_AUTH_SALT', 'F]n=WXr#XW&=* 3wT49G7.:=Z1>}YVWA@m[+(2Y[H&V:dnGwgXQ3Sm@5zqS;]Qwt');
define('LOGGED_IN_SALT',   '{5J_#TuLvrt5v!N+|u<IbXNSPxy`F/}7hA]x{?Fc?eTmKYmbgxLusJ:-w^)k(-TD');
define('NONCE_SALT',       'eFIr|Of n6d&X=r}x)|h^FabGR5YXZ V5;#f@Wxtg0i4+H:[c,TU*ocD#XEN-aq8');

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

