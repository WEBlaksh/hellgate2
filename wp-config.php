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
define( 'DB_NAME', 'hellgate2_db' );

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
define( 'AUTH_KEY',         '.[RW(!jYWtE,1dPbatDG`e[|aoG<)/The,Il]B#I~5JE0TvH:EYy.pHvo!`NmUX1' );
define( 'SECURE_AUTH_KEY',  'eLQi1vRrvx:)`_]SAtn>@dx=|L(@jwYD0w@*{O^#alQuNCMQ:8x6p1.]umn<a|`T' );
define( 'LOGGED_IN_KEY',    '}rqD;qA!`BY,`ns=]b-2xZ[codSet} v.O^iJ:+Xr,8F.B0:!7d{cRUG4_}hE_z ' );
define( 'NONCE_KEY',        'WF/$ Ep}u}z4U1(J]B-w!a< 8d{_B(IwO[nycahKW{9`sA<<ePS`Gx=Q0:HNxVR/' );
define( 'AUTH_SALT',        '`{}TjKP(EV,9in*Lo):mG,j&NpO%`Yl$X^Z1v&(h6E Y{_BK27G gcnHWwPKj~7I' );
define( 'SECURE_AUTH_SALT', '#=o7*Qb;1._So|?Xb2> JBvk^?Okyp[=B>{{vRTA!i;c5kW1c7Oe;E.>WFq(%ZnE' );
define( 'LOGGED_IN_SALT',   'Y,L#pa;#U}fn|0pJGWK5y@Y1}=D>uL}IrvX)w)*|/:Ll](*<<ndW$U5!9|Z2c?w?' );
define( 'NONCE_SALT',       'g!#S}t{y.qhLsZt+u 3WwY&}Q<.m($q :*iJGlv`YFxw+Bw)bcTQ0Y,0gxwJKe(z' );

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
