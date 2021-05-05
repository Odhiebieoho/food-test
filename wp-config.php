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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '14mgtar1.0mgnikotin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qtG{KB0a}jxD5gDqS]q-m{!QVmnoR2af*4]uyz4k6q6P;>~.;667Su$%<k yoWi<' );
define( 'SECURE_AUTH_KEY',  'V9`p |dke}^$8h68MF$RM(Z!sO1geqjxMjym7>0%UR/k:kNzC*$#GZJ/_G?``@e1' );
define( 'LOGGED_IN_KEY',    'gy8My6R+Jnl%RNS~+;sQ@mZ>!hah3_;1Z}ev5!(}<4iXVer@ihGosd:@]8tU*Ub]' );
define( 'NONCE_KEY',        'FvCPRW0&`=c_y0vnW15!5&`<w1~l:A`8wuAU2ql#^yb|PT`/I#KclVv{2j18[jX}' );
define( 'AUTH_SALT',        'm?`D#zp), 0g$ &g||fxA$bY]S%$KDmQJt 0I:<?+ZY;98-&mQ..#>^~gyq]I u@' );
define( 'SECURE_AUTH_SALT', '` @i&buVW&IZdG^;)V1}UZ@emM!7D>q&jlvs{3[-)<@ms?g)qpXm;gSe-np78OPu' );
define( 'LOGGED_IN_SALT',   '*.Q[;0c`sX?||~MunU%pha?5V0S~xv~a$a6+W(.skzJzuR0>lu>j=]M^vVqt[+DT' );
define( 'NONCE_SALT',       '#N~6cVae>.(v +b}hAv]VD.7Tc8` weB[{{qq]X)l6XmFsa}weMc@qpN{Fly]%Cg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fdwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
