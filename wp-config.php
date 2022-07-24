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
define( 'DB_NAME', 'f0699519_wordpress' );

/** Database username */
define( 'DB_USER', 'f0699519_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '0YuE2lMej^qTae,aD5WMr_Xatw`zoyL`uFvFC:cjSULytkt)xn><xVYaeUb8S(lm' );
define( 'SECURE_AUTH_KEY',  '8uW06%JF9o+?^V3AD/=Y$ HFKo*J.S$d[Eq07TZ7xtxg+WyK-n#kXm|^}sv4_uWq' );
define( 'LOGGED_IN_KEY',    '<.bXXI VA|7(:^xv^(uaRUOx|jk+AaS]99r-vg0Azz-0jDw<SC+N3Y[F^9ig7>#U' );
define( 'NONCE_KEY',        'tv}OU(%b%Qoe0~g#&R3Ol:GQcB#_D %B6.?FosEC;7M$ljS}mnRPd3rGY>cUWYNg' );
define( 'AUTH_SALT',        'E2s|L5 XjGrV^*W1d)XjX^#H3]v}eS9;>C*) y|oQE*uZYncMsjKOR]IIZ+YYw@f' );
define( 'SECURE_AUTH_SALT', ':BA(yb`~){OxW+`i7d.YlCVDk5ts3C-Ut PaR+nrC}ucJ.TF24d5Fj5`F7019MPp' );
define( 'LOGGED_IN_SALT',   ')0W;}0#F56H.x7KBZ;eD[64nv}d2O5Jfrca)j-q&ttz6xrAkCWFZ:=IR;H7#Ynsm' );
define( 'NONCE_SALT',       'hUg&j:7kx@<XY:y2KpD%C9Z&lAd3!KLpZLF-ZB%s]Nb,yG+RIb? &i}WYh}cw~q~' );

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
