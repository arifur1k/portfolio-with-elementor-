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
define( 'DB_NAME', 'elementordb' );

/** Database username */
define( 'DB_USER', 'elementor' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '+HzGo2$<Y@:#r9>XjlWI; JalJ^+^$|%y5I&?)K$]RMo$XGqT+2Ctj_?!-&!1/:U' );
define( 'SECURE_AUTH_KEY',  'hO<^d9:O0+tz.b<=D24e,L4<t,RSPfK{(d.I1;:T,M`i&%lw34|lUTdtQ/:YgOj{' );
define( 'LOGGED_IN_KEY',    '~9wL7:)WjSI=kNBh9ZD=o8)|)1zJa6)N;VB4+%Oiga8ncijaN(jfCA&02zH$}s5]' );
define( 'NONCE_KEY',        'lrpyvwFd,NIjHqR.U{zuP)JuRU#p<N_@m2&+2!bMj(4gA(>b>H*p1Y8nn}a#qfuE' );
define( 'AUTH_SALT',        '-w)-|^3frx#sCI]{K_*q2} w=zr$S}(vzNsb2FtW`=(Ljdd&?&-d$^nXs^|-nl%(' );
define( 'SECURE_AUTH_SALT', 'jOx-OY6q:*n8KJZwn1%4xm`umkcK }wpTN5.8XgnmHLGR0,?v_kAl,S^7& @Yl]Y' );
define( 'LOGGED_IN_SALT',   '?18!@|{,sESmq])%tU/Fn.5i<KM!* ;Y;iR-]<HBm;Ogl=U3D;z>M:3l48;4~.gp' );
define( 'NONCE_SALT',       'a4qWBy3ojP%=<1j-p8w/_e[{P#~x|O-bcxH[[#X)Q5?Sxnt,i,Tgt7W[HpuXORC@' );

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
