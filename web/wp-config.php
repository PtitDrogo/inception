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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'Uh50pC_Ik,R,!AA{K3{aLh $c]~T-bhmJ=I!ro3yk|g8Q @lx|P_=Xyq0Md2cF@3' );
define( 'SECURE_AUTH_KEY',   ';tTn9D5KQH@w{ig_~ `u9brm`DrZNC`RZD#^1A?rvk0/lX!o<#VNvp~tc:KU6o)x' );
define( 'LOGGED_IN_KEY',     'wCnVr]?kc(a+Bp&wp$[@!--$Vsly^6cFcM~_/[2U}%QqE>o--3uOH<)!,KqM_+Dq' );
define( 'NONCE_KEY',         'Q5K,LPF~`?p:ARfJuKoo4!~HVvDe)PlsF#a[T4R)V7ez.qKH<>GWr>|pi/$L*|e<' );
define( 'AUTH_SALT',         'DyCU7|AWtk..+ {V)%(LjVK1BT B_Mp OcT5a]{#f@?u}7W~x={pXj-JvKZ z3>|' );
define( 'SECURE_AUTH_SALT',  '$6u~Q-XD{InM4 ;pHb&fi%f$,/iLW)I*m51!Y0J6{lPlF2h;*t?1;J`ebg+e_-kq' );
define( 'LOGGED_IN_SALT',    'f}G&?!Xwf&b}T}t[Xfb*)L~_^CYZtGu7.Tkp_PA^Uh*EMAUMoNAF#b]S9x-MIQ|+' );
define( 'NONCE_SALT',        'i4^@AWy5!qW%@}uPl#M:Gnd(X)8v,Fbb2JM5!ovy&A:J+s;vw>,!9Skf&Gi5~e`=' );
define( 'WP_CACHE_KEY_SALT', '6c8S13zb5RreA;Qk</VI.q=|$l#4S}c?M0^=Xu)rKP|]aP5a@S!^{Sp[!fKU_M!t' );


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
