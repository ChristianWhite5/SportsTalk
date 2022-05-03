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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'Christiancode' );

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
define( 'AUTH_KEY',         '}??30qf6W!*<]Qw):6y4:e}$V.:ZD!.VOl~Z +pa350 z`O}4F;LId_96cUW}kME' );
define( 'SECURE_AUTH_KEY',  'ahNJx_Xo<?)D$pD3GqUZh|xpmbLnj3zT4U}:MeVnrZ$`[cv7F#A)9|5!fX`j#__C' );
define( 'LOGGED_IN_KEY',    'D6Q{8Kc y?X&j_9qugjAPka=3T!X=E}Ovf<2peWN1US*(]do/9~=+V}))O^,D+~q' );
define( 'NONCE_KEY',        'kNBW?R{V~L,mOdM:@OlGs{Bj--&keH6m+v[[H _!egQY|nEzp2i<HgEYN@;e|L+Z' );
define( 'AUTH_SALT',        'kI=20mBIS[B:;VbB(Rb+?b7z%wL3E@nUJ4H@)nhkROnsJ1dt(Y^_V)_q)3QZlW.=' );
define( 'SECURE_AUTH_SALT', '1)6>efFTM Y?R[5HNdbKd2eh,+)RcKx6+&d/!qBDZ|A@_[AA0z-!h> Qt?hITHn|' );
define( 'LOGGED_IN_SALT',   'Y}o(e{ly)x*;Jg!E-m]m[sQ!{{^h5IoV kAEEX`v76[T,XW`QHwAL9Tu(*;gfFr,' );
define( 'NONCE_SALT',       'yQGw7n >Spd$=_:m2-?NNrOv<Q^y&vnha2Le)BCvEmjRI%}L_G6Ys|qz2f(cB,xs' );

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
