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

// define( 'DB_NAME', 'earendil_earendildb' );

/** MySQL database username */
// define( 'DB_USER', 'earendil_dbuser' );

/** MySQL database password */
// define( 'DB_PASSWORD', '0WtY[1JA#vI!' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testb' );

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
define( 'AUTH_KEY',         '#L3&mGTe3K;!os7iraSd4:.K8[BB:6 g})Pq{<&&U<fc,WsC*bK`wQ9fw3hcJ3[2' );
define( 'SECURE_AUTH_KEY',  '2;[S[f>zRJd!l0JD+t/7lz!|bOP;!+CG].RoD)@!Vj#fk7rP#`3KtDi1wzSr#28A' );
define( 'LOGGED_IN_KEY',    'kCQVb[tB?,>2H<IX`jMH9ALLB)N1Q:x4loZ>^-d.r9~~Whec05*7|lb$-7yoaU:K' );
define( 'NONCE_KEY',        'YQJtZU,-soNe,.6l,0pt_DY)nAEsnJkS@;bnrJR-IMZY,MY8{=@%D]mw8wPvWwDk' );
define( 'AUTH_SALT',        '=QZ+T0M`Za%{W*`;e=5|bmyu9DMB_a9S4VJ-=$yHN[VK,h(Yr&~um>ddp+.rYueV' );
define( 'SECURE_AUTH_SALT', '1z`(Iw9#>hz_yUPd/~r|}SZDO#uDyX,Ip+4+us(A|Eo]Sg>NqUj/o70^FwR#e3{&' );
define( 'LOGGED_IN_SALT',   '8: .NtC$3[ivY+I%p_HZr9d_XmrR,UIl<rs9Xy~tHau%oI^~ D0IF*Y8e-SGb9 O' );
define( 'NONCE_SALT',       '*U6R ~BRIB`SZtJQDp($zP|Jv62oLQ%w%6u?S.;Qz!s]GC/wOh#xsUVD`_9gf45[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
