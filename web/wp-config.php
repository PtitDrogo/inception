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
define( 'AUTH_KEY',          'U>uYI-`<# -$8T]N5-0vyk41[Uz@ZFoU$74( 9.V_td@Lah0~0VkKe[v&7%s<yp%' );
define( 'SECURE_AUTH_KEY',   'I.mB~3]3xx^U79Y3e%G]+m>mRB3`fg[X;Evn>RTy`V4F#H0}|3Ccq0MYwhf1,[x8' );
define( 'LOGGED_IN_KEY',     '6-DWOUFY$V:uw~|2PI5r6S-Fcz)`~4v}j$qOsBn)t)dEUw<Ihiz3S6!/I5[]GzKq' );
define( 'NONCE_KEY',         ')V,7mUfYYZ#3}Sz]NPJ8#T9|(qWaFqDeC+)c(kg/o5KCL]KkljIQ#k=)@dLX?LJq' );
define( 'AUTH_SALT',         'S=sUZzSTENV5/9QUE!>EMbKUjs1r^_s.3w8d_5K0s/bS7:*!G&F;L~nT^YtQp@Qy' );
define( 'SECURE_AUTH_SALT',  '_LYvSGb~YZsm5@gG*mQ!;8}^|6Up^]Ah0)w&S)g`rzBn`>xc<nIN|1Ga6$T8Wf}f' );
define( 'LOGGED_IN_SALT',    '_zjD8jTD:&aeOE?/U-f guTI!2QVm]&+tQK,*T$DUIeMyBQ2w`tg7Dn]Sif,9b~X' );
define( 'NONCE_SALT',        ')aA/6K(e}VDHRA0W&$5q`W?D+k6A%ef.BnApSD*)2XjiNYkagSJ4D^! 6,hcB/w2' );
define( 'WP_CACHE_KEY_SALT', 'TR$&2!5,ow:,XG>Pz4iID{kt.$T_Q6p94WD>VDX02Y|M9]C/a~d,-3/;{>2ekQ{o' );


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
