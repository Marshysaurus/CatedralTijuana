<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bH8bYFHvEbNKyt5ZeB8wW17egqSOaqgfRTykY1baxNtsGPxGBYGH4Y5YPo3KMn4bHcqzCO9I7H3eNLiqeYK0JQ==');
define('SECURE_AUTH_KEY',  'ek8zAL1sUnQgWbuH+OZYqWXDzkJbYTNUys03SSBCG8K8HmEYra79zLjP5SJr8ykDtICe5gUtO9/QDkeH0h3o+Q==');
define('LOGGED_IN_KEY',    '87gERXywNZTUd1tUJP4ZiyTiDepy5344KHzSVE4T6MAkaV4kLrjI1s69Xuk7RDrzXXzbDoo+30Xo+YcljdX5eQ==');
define('NONCE_KEY',        'TECRcG7pWl5ax4P4Tm/2kxPKujqA/MBj+TL6niJTfUnjD+3aOB7VcrE7OqdfT6luKnOKhIf3zTTjd380tbIXiQ==');
define('AUTH_SALT',        'AJ3/Ajq1pRahuzQiRaaUjn6kW2NDCdDVi6NR5HaHgAuegBZLXdL3zxESnTWS2BCSuiA9+VED8WhEg5ZHcUrMdw==');
define('SECURE_AUTH_SALT', 'oNRUeNHL4X16gIwK5XCbs/8vfxoLpUBdPE/Hadh69/hCvv0hgqtQAFxnI7DvW5aDJRN44q28sVrXqQSPVsfFGg==');
define('LOGGED_IN_SALT',   'Jd5weh228i60Oe6KWH/T7Hs+Mjl6ZnSvHMfUV5Pjs09VNFJ/X2HnfV9FrV8z+2C1QffS3aHHvnUBXNnJlkfoxg==');
define('NONCE_SALT',       'Bv2voLrcLAIhj6xP8tbW83YTSjjxtKGyz8wc/e24QKaJmDEQWsI/20w5qCqVYlZFJ47XFAuFJbSPKupoAXsY9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
