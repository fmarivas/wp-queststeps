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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_queststeps' );

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
define( 'AUTH_KEY',         'PNl9_)hv@T}`!_@<nz@^]:0v?P3nK2[;JzMlvNxFr8[cSGWAA)g=/9EWYh*OI+.9' );
define( 'SECURE_AUTH_KEY',  '0_0v^Ehl72APa,:E&r@/9[oNoIQ+(QVU: 7a}K3M1vO~kg@cf1/@5n9V1|}345u{' );
define( 'LOGGED_IN_KEY',    'gk@:|Cu?a/@4+rn_:>bUx*FP@PY_)JT<;qbWu7~p<v*/sblFm=t@y==xNc$aVVZ{' );
define( 'NONCE_KEY',        'Y2m~Ei2nLH3Lp>75D=gB8z:o#u(0ZhIouCKM%$>AsL#!aAnG).y3#n*  -Ryt>W)' );
define( 'AUTH_SALT',        '};@@Iflm]@u.N4.8m,YRT^aKVh (AXp|0+r,e;TxhjgZx&Y}}O &!8G+}>%A7m1p' );
define( 'SECURE_AUTH_SALT', 'L8Zd=iHL@){H&tGLH4!*0{u@[8!<Z+w<G)]p^}{K<b@Zcij[zeL>@Ag0]LLJu*by' );
define( 'LOGGED_IN_SALT',   'IXC7A&z%OouilNj=qM<!?Y=rRag#Bpp >oME{*mk:jAw)FdIVxo0?rNesQ)h{^>*' );
define( 'NONCE_SALT',       '%[391~^.8kCK,].=v^&`zDLN2&7xpL!/!ykrdt]5L4[bEjbEP~;4d.I9FT`Jh<GJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
