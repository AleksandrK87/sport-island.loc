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
define( 'DB_NAME', 'sport_island' );

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
define( 'AUTH_KEY',         '@C4wo~&Za*D%/?8PQ^{#(y!9YZ>T[Bi,Ewjn?%K~B||:Mr!Z]IQ2tg$&q-e6!+t?' );
define( 'SECURE_AUTH_KEY',  '`V& HO-08olE0L6tk=)/0uhi&Rn6&WLe/@z$aW`Q3;~kvVFZA[1EFq3cR@)q_RO[' );
define( 'LOGGED_IN_KEY',    '?-bsvJW}MSuB-n> _mf0 O&|/s!vV^4.o6yuZlTlcuNL3j0xi;BLAKl5l!u _i=7' );
define( 'NONCE_KEY',        'GcRG^PPD]EDvbNRi2c_UTFvJTdSCnzd$YO/jyp3h)$%EL9hCq1O#dZrT>4;dzI=.' );
define( 'AUTH_SALT',        'm)Dc&w9oYGHJ~<c*xWQQ77i&pxS)OGoFvO(W-,?0^XjAnrCkb_/u%O0c*ikBxCjp' );
define( 'SECURE_AUTH_SALT', '9ZP{H-y>IShdE=LS>x9tu0qnKI8EEOVA%x2& s5r/b6o)G2W=&7VF4!;L3;mOP7P' );
define( 'LOGGED_IN_SALT',   'qGk.#%FyQHbUKDdB1RwFubaRWsZI=lBQ8}v.E*C>]w~mvvOVvqBOjkgA[B)|9btS' );
define( 'NONCE_SALT',       '77AKbg`tAV 4VOTJPBSK7+,ro4!R=0b,aN =5Ky3uH,/I]M+Ch?#Pe<-/VrLkH<^' );

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
