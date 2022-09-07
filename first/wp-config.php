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
define( 'DB_NAME', 'wordpresstwo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '606970' );

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
define( 'AUTH_KEY',         '!7fJ63YnrzMvzNcgUV-d&0CPV@TzuvV]l)6gcif/F56#OR-*.b@lz]x5]<WgvQp_' );
define( 'SECURE_AUTH_KEY',  'V@+Rh@ys=`ej|TL`P_%33*T{K9wbnyP0d8i3 m(%m;m&4%{Dd$=Gx4*ta*i#o$4E' );
define( 'LOGGED_IN_KEY',    'Q86d g1e~{N(GDfrBZ!/||REL|hgLF+;{.9;c#Qq7Iw}12a|[T81nd_fw`o@/?Tl' );
define( 'NONCE_KEY',        ')hKr8T`9@Z:#D%Hl,25E9RQ:{U06(]vJ*X#IFK|!T[q{Tq}PGl; ;MI1Zxb;sR/q' );
define( 'AUTH_SALT',        ')DcfAe3lB#9@!35X@@+y1Kp;`b:{Wo;f~oex=?mAOyl#6ASBp3+JGKRW{feRTGRM' );
define( 'SECURE_AUTH_SALT', 'g[Xa)UX/<Gf`F6L=+!mm[+K?~)7SQngt<!@c%j8k)X0hlDc-{?>pN|m&ac2j(+IC' );
define( 'LOGGED_IN_SALT',   'l>P(&!T`+rB>} 2??u9z1Qb{0T~^2[O,2#/RNsg9`WNXMuJ7E~,[Yp0XK.sDNODa' );
define( 'NONCE_SALT',       '7*Id)nN_?GX}0b+n{duZc;`/=CD0s3Rl/Y{Q9,,8ka16ZVT@5Gj$D%kD|Wl6`pf>' );

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
