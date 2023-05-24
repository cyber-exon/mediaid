<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SEcrqfCb1W6D7e' );

/** Database username */
define( 'DB_USER', 'SEcrqfCb1W6D7e' );

/** Database password */
define( 'DB_PASSWORD', '7oqpDvh2lif8y0' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^?vps1G4T>)e#:~v@uS8:B_Iki:T4~ WjUa;j|>FBv!X~V;YLy&t<+):3(?IH|~I' );
define( 'SECURE_AUTH_KEY',   ')RKkHrUw;5F6b%bY!ZUTg2Fs 8o/FdNYq;adnUA?Ipf5<z$n[%DQ$Ey-G)9v6,`?' );
define( 'LOGGED_IN_KEY',     ')R-1iYN)^mD3jidpGQzxiL4)b>ea[J>>QDc_pcq[9/W8~73(X7W2ZksHEBwz ZZb' );
define( 'NONCE_KEY',         'S-h7_c?/T?$i-r*>*XQ!j/[StQ9dZn]b$O%{WR{0X4sIb#8 Y|i@!Z7tXdE#iQnj' );
define( 'AUTH_SALT',         '}6l.}fw`]H/$pu^{o6H zvkJmFVUf2JUtGnTCI0M+6yvR;6HabB|WucO73#Ke?@p' );
define( 'SECURE_AUTH_SALT',  '!?~c1]qJ@?I>M;&ZI;+#hf4{lY*U3YN&g(V|%#w.nYK`ESOz`l|t!`YF),=)FCXa' );
define( 'LOGGED_IN_SALT',    'e%x$p+gRtD(.5c C-%EzdaQ(5y>c#e3I6C<R`,3tbWG=FO%ONmV1%ts:?8?#=kuq' );
define( 'NONCE_SALT',        ')$uUz`PdD&Qq+s?vzT.;Y2w>|i4SPm~FGv_c&HGO7SluA;b32O@f)xCYG6e)Gb F' );
define( 'WP_CACHE_KEY_SALT', '{X._F)NQ&S,f?;?m85yw>#1N^z,G:?q^er0330WeMXC${H/4>9RlU!G W&da%LZ$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
