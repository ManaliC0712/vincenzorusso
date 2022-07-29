<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vin_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c&<y0*!nZyqkSsf/_MJbfm9/t^h.sq_#(Fe(tUA:kMeE[@5W2K2Ga9C/G6+OZv#0' );
define( 'SECURE_AUTH_KEY',  'O{s-Pg0VJtNyGvz7c$U%}3@X8dY+/QNepm8]TaD}Ay3}w|2BjNb@0l.6W/LT~f%W' );
define( 'LOGGED_IN_KEY',    'S[p #)U.SUWfR(`u?g|DLEh1*e1j~xX{@PJD!W?8c6O;Iw ES4 PkRP;qy||G71`' );
define( 'NONCE_KEY',        ' hHmm98KNPhOi^Ag/[R./OI}o9Yv?5PS%qL^m+~Vsc*nhvbFyn$w).1*R1K;Tk8b' );
define( 'AUTH_SALT',        'IvQWp9{T)3aJ(GZ,ice:N%vkXhIeuf.f#Vu)?BUjPwvKXRsc?v#P-uP~^o`Jb4e$' );
define( 'SECURE_AUTH_SALT', '+rxPebbN/xs63I !b@Ki*t<>Wk1.e,]}P=Co2a^Ok[~ @hLZ*H7()Pc&qq-F2I4.' );
define( 'LOGGED_IN_SALT',   ')O6wq(<IJO)I6swNQv`ZS-pOyqu0>yXPq!|/Kso4HP}t XfGy7=R_`@>eZhc2mXF' );
define( 'NONCE_SALT',       'BJS+B9g_jgUkwf{~|Xd?vNuom3Bun+eSYNy[2H vy!&BzcI?4P+]8hfdMzI,-}&v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
