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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rekrutacja' );

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
define( 'AUTH_KEY',         'q}tYfH^?8F(w#1[Ky)m`{IATKD9QPI,>k6jdh6*(1%.8Qs-!Se,?z7FpKTJ__5i}' );
define( 'SECURE_AUTH_KEY',  '6)%a(ccA~O*$3>yMj4hEHz0|}?OqScFOGIAsqFB.G%v~m#JXgAUSKZ>k)9G0wQfJ' );
define( 'LOGGED_IN_KEY',    '[`;LOIi_BTN_e>7)$=_+/5>|-Rs5y7t8Q}9&LpjIj{TY+z I fhwr<J<yRA+ZCAW' );
define( 'NONCE_KEY',        '(W=./X{,Z7J=0<uu&haGlp= ThkVkH)-_vytXH{fg!>fa]2j+s|6mU?a]TiwZ&jr' );
define( 'AUTH_SALT',        '0AR9brJu9o0toM2y>bpy_ {Sz8N^tI5WDd&#1:G<HKO6{pQm*$b?6g-8]}Ay}]=p' );
define( 'SECURE_AUTH_SALT', '7H$4%DXv=oB]OArs5{X*kXldaYv{+l&h!y^`$R_y#[MgM)G;F-p:RW |d)_D2]:6' );
define( 'LOGGED_IN_SALT',   '6VNWWz3IVN[,sW^vE s=/vls_^fTtWc7;0KJ$LXsrQ^ey/y1Ha}Z5#>Z1Y]B{+WY' );
define( 'NONCE_SALT',       'T2d0Adr>jm5EtG @n=)5zY,x*ZY*()in_;l/p7,z$PP.`AQWRL8iFt+*Qmj<x+5E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
