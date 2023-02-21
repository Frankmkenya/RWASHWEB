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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'timenews_WPCTY');

/** Database username */
define('DB_USER', 'timenews_WPCTY');

/** Database password */
define('DB_PASSWORD', '/SV3{[R<_pvo35R*t');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'c7527d7b1e4e78690433e1012c4b5ad69ca2f7f09dfed7982d080730c5e56e35');
define('SECURE_AUTH_KEY', 'e0917764c44ddee29b72f8f6e6b2761f017d1353601bd8d2010ac77940b9beb6');
define('LOGGED_IN_KEY', '11b1b5e91ca97913a2b158e8cc72aa81b24ed6e405d19ccef65dc66c67d42257');
define('NONCE_KEY', '1245b6f0af1ede0995fb485da302c4a12096ad580536dcd12679db2b1faa4a24');
define('AUTH_SALT', '51cc52bb768ebc590d533bd9f5d5c918c582e41331f8929942f0a26c8adf6702');
define('SECURE_AUTH_SALT', '3868f5482211ba1af5bb0499005b2906fa21f2dfccd09a1fd5c3f37aa2f16327');
define('LOGGED_IN_SALT', 'aa375feace50860e2bba6a5c4defa486e9791e05f42b3fe1079426795e7dd037');
define('NONCE_SALT', '33935806bbeb25659e702372dea97b7ef0abd8cca1246e61e19a3537c618a987');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8iR_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
