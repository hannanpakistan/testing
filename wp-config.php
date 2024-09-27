<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         ':zH.@!opdbVWW}Yecn95ys)`Ojz3jWSf1TR>%J{z8&@yRz{@[m!p3`HdT=VJ<R4Y' );
define( 'SECURE_AUTH_KEY',  'n]}A~-sFhS0=-GL>h^[u2xJliE$W7q+B>!]=wLT e2Qz#(XcG3j2q!F$2t-Vj^/w' );
define( 'LOGGED_IN_KEY',    'C43Jx-KBkmR@A4wlK0f@noP,~2ANd_C@zY 0<2jan}Y>9wU6uLd)^!K}IK$C.+:k' );
define( 'NONCE_KEY',        '*3w(hzR`9VF0?U&vdo4cY7+JVV@u& 7|L7nU6w(X.#v<dYY%%U&uwGkE}i|-StzN' );
define( 'AUTH_SALT',        '!rH=i# %Be]r*Czto8&:nYx.E5]H*QQ]n)>@^{}j)}OdU2J/I6t3s8`;hI8mIh~~' );
define( 'SECURE_AUTH_SALT', 'PGJ3,{,xr!kq!NTtXGc)6!qRE<W4W{kpbQX)(j6xvl{9KC#~52Q7rO?}45G>;[gZ' );
define( 'LOGGED_IN_SALT',   'D(9kXaKN)Bt_[u}8pAkGct*?C0Hj0ue19u!x~E$,gE(*|;w8Zmx@{n&p_`>;-+%4' );
define( 'NONCE_SALT',       'ICU.[Fp#U%_d(XUd4CMgBAhm@?fsKkIYn*m.~Z^U,Fk8%A.q1M[X/i?[L.d}HtZk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
