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
define( 'DB_NAME', 'brief8wordpress' );

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
define( 'AUTH_KEY',         '~~(lw`P|fevkW0BAhX8d,esJ{/Rjc1KcEFwE:`d:[6R8Q_EwjM(3SEZ^LHeCE2v&' );
define( 'SECURE_AUTH_KEY',  'auST7aKx[=j(&,#)wEXnCQbi#T/[X$srcp3%[#A`}!Qwq;+U0I>A>NZgv CWfroP' );
define( 'LOGGED_IN_KEY',    '9$V#)^jF(!W8FKjFYX-ae9s%JVrE@<f$]0:AvOtGbPN~`M</6O9>H;n,,gj@CQ(K' );
define( 'NONCE_KEY',        'E2}Cac;aC|qY$h#8 AK(ojLfg1`x7ffB]%JZmOcj.|_IW}gWW#tKcP^G~ZCbxXy-' );
define( 'AUTH_SALT',        '~oy1*Pyn*Do[aJYnr`GBi%X32D}`C+g+.gWe1!s^M<yk.jAJN6{.gs.|;APA;))-' );
define( 'SECURE_AUTH_SALT', '$8{R5T}eCIFRa/N^PhOO/SI`)KskR3&l6Rz7G@H-GKk2/MLHlYocp.b]q[*q;J-r' );
define( 'LOGGED_IN_SALT',   '3ExIZSB!1wL>;JgXBBYJ(V#00])R.cgxMZYv.eZo/fYJ8iNni1%1jw_MDegKg{3B' );
define( 'NONCE_SALT',       'nr$}CD7LB+:^1gubz|i1*h`IF}c=X~VEG>hOPY?zDMM`1mXB v3-H9~4/y&Q/lk?' );

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
