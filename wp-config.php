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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '0%6-sNjJ[%[E2=ea]!s30,2AAl>jkS?Gx%u(PN).`&fExBhsB7?NE,D|<,>ZS(Bb' );
define( 'SECURE_AUTH_KEY',  'UP`,x.^!-e%?eKSwX9r([o)~#!-Go<7+:r~B2#Q&v. %ho|Lwy,1JIo^:i,;i_uf' );
define( 'LOGGED_IN_KEY',    'I#?2%LZ0JeXA0niL6[ v(N5c7bQE8]h>N~&avviPB1*74:>^$#b{ea>5Wr2=rEhQ' );
define( 'NONCE_KEY',        'B.z|nG2![D(W]RD^`D/+Pq($UbLLYbVw&DPN#d[m:+/{PbbuBLp/I&G/]fp+B.I ' );
define( 'AUTH_SALT',        'qRQK%{Q7<60iD,;pmS[&9H5+q20y]sMf]G!yxxfo:)bx.QB=[WP?*FM:V))*Ylox' );
define( 'SECURE_AUTH_SALT', 'VrphQGajSp$B}sdu0_.PHx]h3RHt[`<5F!bNbsejrPD*~JW%@k_%<)xdwHi0_9Ex' );
define( 'LOGGED_IN_SALT',   'yz{f#!OnM0=^=Z*n(YSdni0Z%.)c&;U#2fTdYWT[R5YQVg2x C tq:M>U/e92@i0' );
define( 'NONCE_SALT',       ')$~ 5s^.THB1Sgr$(EVfqy`i+XD`/~x8=]w#,`{%p gT.lmKjo~P>OxmN*C3528y' );

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
