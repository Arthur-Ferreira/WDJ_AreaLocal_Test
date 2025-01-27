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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'areadeprojetos13' );

/** Database username */
define( 'DB_USER', 'areadeprojetos13' );

/** Database password */
define( 'DB_PASSWORD', 'e6m4j3' );

/** Database hostname */
define( 'DB_HOST', 'mysql16-farm2.uni5.net' );

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
define( 'AUTH_KEY',         ' TTSw|(,f#8X}hh)YoL&[}L9]Y5|E-[<1Ua>m`3$u|y&t;9l4VqA1^DaOv1]HAgk' );
define( 'SECURE_AUTH_KEY',  'scq[=,w0[Nq,6Ex_DS71Kd.w-OJ%zc9#ee6q# /0R,c*WUTu%5&6{VkT?OCCu~6<' );
define( 'LOGGED_IN_KEY',    'F8z*-N:!kn nPo#Bmy>m/1Xa;+qI~6I)Ccy$!>2b%2-5gTJXD0#u9@pXu=,5coE7' );
define( 'NONCE_KEY',        'K24j)pN#W%9|-~oVzh__R^)YkddNi7>{6/QMfz|67-j<dbW4vRQ&z1BBnsP7Vir)' );
define( 'AUTH_SALT',        'f8RSj*k9n?7S??4T-K,a[1uGxG*)dVzg%m=r19^c!yr49&nR$Qip!*Wp`n}bt=2s' );
define( 'SECURE_AUTH_SALT', 'Rh0{;rm3cmiBx*.U$=EmrV j9<x>W+dr|#*YS#?&R2u{m<9czFYlOgz_z<%74g!*' );
define( 'LOGGED_IN_SALT',   '?ItF`NFcRM)aW}VBwug?NF@IWOx&d2rN,<|=Vs.*@wtGl7OcFV`e2gZw8+-c~~Ps' );
define( 'NONCE_SALT',       '[RzX4[W m/rJ>DG4u^g>:-%Wn%2&H<D.EfJ:WX%e{id*5$SwqY:w111Q^X&uuiMM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);
// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
