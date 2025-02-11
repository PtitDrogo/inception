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
define( 'AUTH_KEY',          'rlpDux#N#e3l7Qgty]PVD,T=p@!]c2]n:!+Gji.1$tUrL;5c#C]t:9%T-VDb12rv' );
define( 'SECURE_AUTH_KEY',   'GdbqI!5at7y4%?X:iF&$)iZv(B;!r`[H]>fN$bs6sX3p@E^jKTL4p=F9<q |~sw8' );
define( 'LOGGED_IN_KEY',     '9`rQzvAo|wH|eUw^F;9!H~C#@82[ Ru.K5z.pi[9?Hxl,$x}OlH _ZW{%.dHYDTh' );
define( 'NONCE_KEY',         'Ps^*m+@.rDmy-I,z,*RkL[~?*ggIUue{BO)<urDH9~/#cmK-Z9=_tLZQ<;`+ t8Z' );
define( 'AUTH_SALT',         '{0uYtGX ^#BY<^k/xHphI>Fo,#Hk~,3l:(.Z?mvZZ=Q[/ <Bh%&RRX#?2u@q3FS-' );
define( 'SECURE_AUTH_SALT',  'm)%F[WhfU+ &6S|T%Sj >7bB3Ms>3L[_6QfgmI*4T0gCdO9GeL=r0t% 5Y@}.7k>' );
define( 'LOGGED_IN_SALT',    '(Aa1V~y!wB @;tam`m+/;9je#3{kPj2m+,y8g5OCL^B 2<7#u:1o1Z-_TaIXj.N{' );
define( 'NONCE_SALT',        '6$@6Z{VQGdK`2T=gdK2~xMHS.W&vB>:w_M$9e3lD}}cYCrkY~%Q H#YFR?uX*5WD' );
define( 'WP_CACHE_KEY_SALT', '~kpV);@hK)Ko+w;D_4V}3`xA3+@xZP9^*>s?|^<J/G=htQ~/WFD!&$QI`?I~ix+u' );


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
