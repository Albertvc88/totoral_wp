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
define( 'DB_NAME', 'totoral' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i$!2)y@M2B?~SBV2k6}`Vi hgK~`qkSJJ;2m;v>pOY1+.8QDQi79F#uA-tiH#fgg' );
define( 'SECURE_AUTH_KEY',  'G<SB:2Fi+g|%?qbo,%*%nm0v_tjj FzEfZ[7*`VDQtqKgUy6jD95WKed6U;{m,@D' );
define( 'LOGGED_IN_KEY',    'K$:V<GpPRpO2pP-?A.,7yghF5IT%F2xlUK_y?Dp]gvDH}xILZBx&@oq&hluc9Ec~' );
define( 'NONCE_KEY',        'u$~h0[~C+WRx72V:vg 1<f,(YZ+aVIWFd45x72j<J$Rs/u$:AqG.om)9dg[>CaX|' );
define( 'AUTH_SALT',        'Y=8%oW&>|Ku;Iz!Nm}leF#Qt~n4-VwNcMNHoSBO!h&+`fFIGEE)hW2opRI6)3t)=' );
define( 'SECURE_AUTH_SALT', '&8zt?<>+un{u[+P3zXGqxYy>|)Y8EYc&t&nf,5%y yO>=` I6s[^xvN_KG(+xY^]' );
define( 'LOGGED_IN_SALT',   '|mJFo~V)v^9Iy/qK%7Lnn?IP|~:9m;]&<IfQ$k%E.yddL=CqjNl7*<1>$rIsk3BP' );
define( 'NONCE_SALT',       '}F)oPSCSl4{&,u>j#-2,[0cw.j]a}mnN6Q,jjESTL^@pm%xuAvH,tG/4LbH,Zpvw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'to_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
