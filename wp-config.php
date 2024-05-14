<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'carouselwp' );

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
define( 'AUTH_KEY',         'V0??<Z=%q+aDArLD :ErAur xJQ$Y{Uc6TM~(L2Q.)T^qsVP.`n@ |L]PEOO30Wq' );
define( 'SECURE_AUTH_KEY',  'c=KHYCc-8|Qp-v,HPVUCBFr&nN&=s[9)C+l$8R|L):~Iuh@gFvbmu+F+A-ZGHR._' );
define( 'LOGGED_IN_KEY',    '`4<;2x[FzG&90d[rKmE*.ELlt14V+Rf2NcpePrc!E.K?m[|;RlY.:>N_f/xv|t9F' );
define( 'NONCE_KEY',        '#!nY^h3c/>pT]Wu}6pwbKTuI!k^~7grd$3kS8ni{qW~@oAEnIdSi8kZFmo+sm.u<' );
define( 'AUTH_SALT',        'fQ_=Q/16Njv_lYHVwaxL<0@TXtbRssc8pz?pA|?xH#cv.-IutLV.L)4k%n/[tUXo' );
define( 'SECURE_AUTH_SALT', 'Yp!wcG>}gS}.5--nxezQaB>zAIkAiNCLMGAs2QH|1C[ISrsTrlbi.M<L&dlf;S5=' );
define( 'LOGGED_IN_SALT',   '[^|N,4|2CL|*lEHiZ35cn]@yN=^V$<Z#f8+7^IdqeQb(B+DW9NuuSe)UWP,&%-Sd' );
define( 'NONCE_SALT',       'K4N4T=C@1(1k;NFlHn4&oc~wE3BdKu!+m#*B)*D{=R3FHS,/-4HAP02[y6Xd?;%q' );

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
