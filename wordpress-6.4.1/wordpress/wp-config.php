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
define( 'DB_NAME', 'vraagaanbod' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'a' );

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
define( 'AUTH_KEY',         '|,@F~VC]]864_BG$~:UrOjLpF9~|&NFM.emL~0?bDKAq?)$lhl#J74xyz[#n(<jG' );
define( 'SECURE_AUTH_KEY',  'I?_5RC{W6D<<Fm^o2M}1{ROONij[i=t3`CJ[7YURnVKKk4;(j] |>/Gvv`wqn57v' );
define( 'LOGGED_IN_KEY',    'hJ5|%/(BKn]0id0e)V1Hc6^9X88ne$RRNM7|SIKY#UpL,laYXQE0_%1GA4^ISh%,' );
define( 'NONCE_KEY',        '`tI1]&?nu%HIl Jmie5&Br0zWw7@Z:{Q~`sEjn8^c9DzC@H];Ll]4}-g^,Sx5xLt' );
define( 'AUTH_SALT',        '}0K50T>pKn_hugs$91-go_H<>-*H<2l%qhEtC@*wTv][y@*Q:qvmM>CAjJ5HWuAn' );
define( 'SECURE_AUTH_SALT', '@--keg~A:+t:5Z<luYCm^Xko<CXGAQ}d-/l4&O*fBGg`pElxLYo{s>]YT)6%LBr#' );
define( 'LOGGED_IN_SALT',   '-w0dD OS4XZGD?5$S,aT}vrtD.NSZ{P*1a6?T/M=#ixeH^L?x2dE,7j V7&%aCSX' );
define( 'NONCE_SALT',       '}xk/l[KNfqVh$zuhdb3kb6dzZNaYiJC_wcycGE/4|2j]uZoH$;#zSE4&#->$E<+p' );

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
