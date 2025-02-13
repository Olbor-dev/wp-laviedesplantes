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
define( 'DB_NAME', 'wp-laviedesplantes' );

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
define( 'AUTH_KEY',         ',g99yw5=KN4& s,3De[1iU4}QS>.V4eR:e:qDr7(Rn>$BvC|Lgs==QyZsGODP^cS' );
define( 'SECURE_AUTH_KEY',  ' ;vk,!HRxDN,`vZg`bD9~/TDXxFSa@OI{)%0b7Hc{H_hIX6ZT}pL|NeN[0[2R#Tp' );
define( 'LOGGED_IN_KEY',    ' Pf]-4];VA3qGUgzR6_j((ZI_&f d LUVWrNC(FFfLtc#]VzC*|_DN6oNtAXa+>$' );
define( 'NONCE_KEY',        '@HKwv<87t`+1m*BGP}.^ >kT&&4)903tG9LHY5|755OJDJp$jSfLF[Z)F[o#0$aJ' );
define( 'AUTH_SALT',        '3n[3.PN(8cTnsAq,xiPXRICR,Kh>aJZ{c8*FLJ&{e/94qQ%TbsVjk|~c#Uycy7dH' );
define( 'SECURE_AUTH_SALT', '+bSnxQU[,S-}@/7m^Wh@bqhR^rHMLPa+}B4q<aIV~4YgyaEwt<r~7beI({zXA=(q' );
define( 'LOGGED_IN_SALT',   '}Vaj&pEoRuWfgZp2MB,vRr%/sl-+T[R(J83YD}ll8zYJB^MMvRr_D?39*Jgc&[~G' );
define( 'NONCE_SALT',       '0:L9=V^v9)|~rvN|#P#(nPi>9TZ8e5dRxa;~k-$cUMw<.1+!d47Mg;{WFg.6BJ)6' );

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
$table_prefix = 'wp_lvdp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
