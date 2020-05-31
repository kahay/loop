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
define( 'DB_NAME', 'loop' );

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
define( 'AUTH_KEY',         '10/iOQY7&-Te`;R%~3e|L5NkGq<6y@W2Q)>][IG7N8ykS#?]prJD.o}qDex fm*O' );
define( 'SECURE_AUTH_KEY',  '7!.R?xQ_NN6fEN>L-^LZ]alpK7?Qi`L:S&40;,43:#}e i]I1SCU83#fsN6?d.5m' );
define( 'LOGGED_IN_KEY',    ';Q 2f-;:tQi5]8nR:4-^ue=NxpKs{D77 CMp6_9^8ZhI})!*&)pg2bBj@MQBBzx-' );
define( 'NONCE_KEY',        '33$|qP]e ^6x|;Ja)f(9>NrBD#RE;=EIHRuOvhRca-DC$zXM&_FSc?Xl<;2l@@]4' );
define( 'AUTH_SALT',        'bWpQY^u=1a&nXt.dE^bDS3y29ljvSJ2N)X[#Y|!5!C|~.?[}D5VRr@tu6s65gu?~' );
define( 'SECURE_AUTH_SALT', ']i;=a/7_#nDXrqtM12,UbtAr:H#Wtq:Gyo5gBQ[Zv~{Oy32gZ:l_2 0R*`UVF),h' );
define( 'LOGGED_IN_SALT',   '*]7z7iW=XE4r}.[POW:k5`(*]&(9$b3(jUTr%F})FBK>J%V>U^)4+oj;+ld?6`+a' );
define( 'NONCE_SALT',       'Ey8j[|rA8?7pLWCj3kg|_uqO@bmZq=>qn46f9bwLP~8a.@$nw?oU?~mfs8UI{q.a' );

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


/* ALLOW UPLOADING UNFILTERED UPLOADS */
define( 'ALLOW_UNFILTERED_UPLOADS', true );
