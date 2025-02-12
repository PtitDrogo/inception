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
define( 'AUTH_KEY',          ')`;2uk[uvs-,@A(Djn,*q/RM98K@9i)wNGdb8<.$Y*Y,3&,`o3)gy%eiBX`;YcId' );
define( 'SECURE_AUTH_KEY',   '({r+i@.*i|)l^B;!Uo>6tSn{f2%swo-w92MLT{Id0 1Tx63^wBwkYk5*5GBgBe:y' );
define( 'LOGGED_IN_KEY',     '=GI= ^*;vsIKEB8+e0!ghiR-i$z%f{saC9RW9<DrjI|(06-S9&ymYCi1I8UD^cqK' );
define( 'NONCE_KEY',         'aDM<[ZiHp}K<J95vO5hr<Ric_Bw|s<@[~v? }kjmkl{u<f6`vjFCncWzmCEhu)E!' );
define( 'AUTH_SALT',         '}({f1r()1Yo!0ngG_aWh6o5-Q3BXUoz%q:r{&Sy`/w[6dlPQWHlznXCL5^UZVZY8' );
define( 'SECURE_AUTH_SALT',  '(0kSBYnEpl~uCtjY7/9B8D_$r2a<]NZIkxDqMz<ASPyo=Zv@=~Th++Y 3>za5T$<' );
define( 'LOGGED_IN_SALT',    'Vqz5Xoz:cDL5C13I*D61k`,e=~{bBZD C8xtMslOgM(xv@Yy9<GuIs;r ?tKk9ON' );
define( 'NONCE_SALT',        'v9xch^  )ZL=d=&3X_EN)NPw$/@<(xNK)Lx-um6LItn8:zlF?pz!gcw{_!UX?F6!' );
define( 'WP_CACHE_KEY_SALT', '?wia@xT()H1R4XT6S5nDIEc{=Y(sk5yAV$/<1O(xBnltFhLu`W6y,/Tic t8~8PP' );


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
