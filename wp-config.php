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
define( 'DB_NAME', 'jure' );

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
define( 'AUTH_KEY',         'hhcI!A[t?pmd|M!~<MINs@;r76?tGuI[[wy^A5M/ppjNE+f`h0:$GD(w1Gx%em,-' );
define( 'SECURE_AUTH_KEY',  '}$6>L}V)p~}zBvTquL^+;on{^b~+:uQeo|h 3~di+r*:>$=hF2s?80(JHBM-:0P~' );
define( 'LOGGED_IN_KEY',    'A?WQCj}9Mzq+ CO{|KMJsW&7kq-L][29kUWqr9^YneAx:z>(Bx_jieya} RKTJ^C' );
define( 'NONCE_KEY',        '!BL^{Vh5?_a$zhENM-i-mnSExM4[z}KFQ7-Q=/S%CDeWEkusgN- Kod<;6?~!HPx' );
define( 'AUTH_SALT',        '/pb($9qD9MwkMd4gPam~e>:|X)zf33BQJ~2a,9+4i>b(IYve|>Vp?krm^1,aR<b0' );
define( 'SECURE_AUTH_SALT', 'pJGYV: ^P$HF}CwEk!|[zEV>qJvZnX0UJl![TY@$+cf]<8D1a@[BI=SDdQS%kiji' );
define( 'LOGGED_IN_SALT',   'oHCw#<X*XJ)(JPe4S`NbGa<LWP_QpkH;ZB5J]].Y_: *pZUHvr;/ZC~Xf_WO^Ft.' );
define( 'NONCE_SALT',       'M;+-m@vlkAI`Az|BgY^*RA;3Vt$#8P3,!K?H%EVeqi022PKC<uDpsjF b+1UfFiI' );

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
