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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '018826453b8308b2040787de9b303ee7227564d455abac18' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '];gPy(_EWtU4,~eK>ggq77B1rpXvgwv_kgSnJw0^LbbHqD<qI9OT~v^{LswcL]wN' );
define( 'SECURE_AUTH_KEY',  'cffe]D8JIVAef$M{Fp6ZtRb}B:kN-P4X}bA&uG%`E5Ki-um}i!0MPI;gc}/^$K` ' );
define( 'LOGGED_IN_KEY',    '_R;sa+b$7Rr^NnykuyE2;481]xwy4o(1T_e2B)I%MqgVAl_$L?0yLYSsUbp]VsB4' );
define( 'NONCE_KEY',        ')2FmQ:P%rX.]GkD/4Y,OR8;?%~lE(zwY-Qh!/%Bqsf]Hs33q/.XpwRFJQAv8=pmz' );
define( 'AUTH_SALT',        '(;I^f0/@3=%kbOrP:b#X*q0YO|2w=kSEry)vul<]^FiNxi(lS)siLduceb~$QzUd' );
define( 'SECURE_AUTH_SALT', '=jvP#(r}Z:W|Uq!w(Acv=LP0ON1OHUaQx;D[O?}gf8@9$7}_f9j6>$a_{n<{c@oE' );
define( 'LOGGED_IN_SALT',   '0{nL3@z{4KIi.q)+e%HM` L?>#__@UOnkN)!&Gd7;q][t Db l(gD/)<FX;Ie)<#' );
define( 'NONCE_SALT',       'Gz-UDCEb`D,RPeHG?9({VYcb)<32&!@GcYEoadWnE/YWCvHkZ,Ch0S}RhPT z|b>' );

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
