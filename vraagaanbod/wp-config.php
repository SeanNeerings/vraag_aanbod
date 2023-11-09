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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vraagaanbod' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'vLVzKYrVx60ajNdxUuxodwnV6oQdu9P4oqQc1Cz5piXcycIRdNZwAyJkhQkB27Y6' );
define( 'SECURE_AUTH_KEY',  'SbgQHjAEnjS7GeCdo4RsXUSGX7jKwhjgdYcXhjKzUPHa9tAbyeEXGawf7C62mRpD' );
define( 'LOGGED_IN_KEY',    'aoZJ6F5dpegNRd7FxNmWIAml0beB9y7O11Da74mZkdJIzIEr1MffLrT9AGNyn3IO' );
define( 'NONCE_KEY',        'iDEc59vv8diUqTanZ7xdA2jSmrtZ2AT1j0PiyaPFJsDPuotYQeXGoy9SAaMmgSHd' );
define( 'AUTH_SALT',        'n3YAFX6BMyVpcm1sZZa8kzGxoyWNtr2udMPTBl7e8k1m1ipnJP2D6iHhld9ns1i1' );
define( 'SECURE_AUTH_SALT', 'H63ysXpnR8HH0yIxB0dYe8K4LLEexUtLqjtCP2ULx5yuQjmK9ego6WKw4IsI0UZO' );
define( 'LOGGED_IN_SALT',   'gWu13tDCkid0ui4Zm90p0MWziVPIMMB7wfwYOi59YjKBBGrX6z4tt8Deuf8zERn2' );
define( 'NONCE_SALT',       'OMWsB1SSMtJBP3oq895R6s96P6Zc2FKsBazjNyfvpyWIm5xa3VQzRiwWVMMr0PMd' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
