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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ']X ;$.r>O<87A9o($Y7g6j3A}%mlN_>ItRB<Dyoeqw$vgwtw9oNHBa^j8r+QkaG>' );
define( 'SECURE_AUTH_KEY',   'Xt3&(pA0U; @qyvbyz>FD;65]u*mP~T*e:C6}znT||D)hn) xXDi~! `ovYddi>n' );
define( 'LOGGED_IN_KEY',     '<=`| I[~c/K8hT#lT;6Q{uxVNRo{WyQJ>kD`#j1#J(r,4.;-C4;qEW=2OGdsXMwT' );
define( 'NONCE_KEY',         'r*u&ZQJy*S,R3D!o4FUxg}S-QE?KVR}fjgtn&w!DKs; *U}c}Xm=s*C@by~=(xs#' );
define( 'AUTH_SALT',         'O)UCfqo,gDor^_&LZ3wcXDX5hPS|f1VXXzcy$gXd/t.k-ZK,O!Dg`Ate_L*itopd' );
define( 'SECURE_AUTH_SALT',  'o~uw N8Qc7@3EcF1cj!_q5%^ISg4]J+#c3B[X4l+f$CdYO*FXS{ H4iDT$jHD7^_' );
define( 'LOGGED_IN_SALT',    'Iqz3.P@lj40CU#qBZb@TvlDVN]Xdhs4Ky?&])$Bot:]^5id%Aw^|sS~Ie#x/q%7k' );
define( 'NONCE_SALT',        '$Rjc|p]v)h{cqW$WRf)V2sB0U+mY5{:AePN#q;G~H&CHX|5ISwJN#I!*59YgpuMd' );
define( 'WP_CACHE_KEY_SALT', '@N{{i-{K*sP9n:j]RioE8QMDma>iw*L[s{8^oZD%Z&YK3fmAE}(g[B`yK?HJ-=Fh' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
