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
define( 'DB_NAME', 'preaf-woord' );

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
define( 'AUTH_KEY',         '>VeK:6fB2#sA~djd0vA.e^U|jG*BWYfiy{8=06Zb3tR2{l~_EY,Q@[$tW&fY@x6:' );
define( 'SECURE_AUTH_KEY',  '(W!^=jCHG>3guaRL79qh%]ipM2^D-pe4E!~-yH3PB{g<g|`UOdJoYg5,Tk@tKy{.' );
define( 'LOGGED_IN_KEY',    'LkKcr_RtmKN[jT1J@:xU$ZtD>3k`@Kp/?Yv$h8be48As){,Lz>p?|-x`z^SL;if;' );
define( 'NONCE_KEY',        '-}-rik`@vI)C;.i[Jvy{/nU<k9DCflK!:qE|J6FJV;4{jt`r]=%`3RsYa$Eu2Hrc' );
define( 'AUTH_SALT',        '^h^2z;~ ?t6<R-xro_G#U!P:G uOWj:Cr}q S8X~{uvTsV8 uVy31i%UNxPd$uZx' );
define( 'SECURE_AUTH_SALT', ':tK%_6j45Yj^y{?FFc8 AO@iTwC7Snq(%ZvCj34@zNY.qXR`)yA1+1]DJbC4O]q=' );
define( 'LOGGED_IN_SALT',   't<}B?H5jj1j](M4:+Dd`Iq!F9rs`qK&+>Xg{Iyr~.vXlR~fwaKbMS{kdC,Tv^6J+' );
define( 'NONCE_SALT',       'FC{NZ)EB_U=KECwM?PJ9+3bjri5I.f{wXEZ!;H0}gV.A=UDZJ504w8YZT`>2ES-=' );

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
