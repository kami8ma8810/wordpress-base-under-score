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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         '+mchF8XFNQUClCkyRSH1/t0QkMOeMHeUaUB7ASzE4ohTRyXAaTdb/ngy4AVDrWWHDxiKlwIvV1koz2sCWX4jLg==');
define('SECURE_AUTH_KEY',  'sKGiJ2Iu8Oj4kCJBm4nwtka/2dMx86kZv4Assnt1yFVyXHTAxCZor+NalZ0d9WqeTzkrinS5h5IINo0qReJa0Q==');
define('LOGGED_IN_KEY',    'cywvmtXLRrSXXO71DIMNOc7Ya/Hj/+o2ppgrmdjABg/91OMbo9ivGJdKrRDipXh8Lh4CF7dOvQn77ngEGS4lUw==');
define('NONCE_KEY',        'lN5NFuG0jqcD4PErJj8PZBy6wZy9gJs5+ACGPeFtclo+eD3a1UJkraJxqA9nY98AapXLPnuNV9mqXc1hIK4wgw==');
define('AUTH_SALT',        'YFY6SwgXgw1aErrKVt7Ycv+4CbLOso5F5MligJ0mrTm/6RPVYuLfJu2t31+jPndYvnMM0pAdCbM7m544q8hvfQ==');
define('SECURE_AUTH_SALT', '9hHnnk+o1swqT3T5zZrmvNKJktxFPs4dwbkUK9N3zDPYO/SUBkr0ar0SVEAg0ExAabbGer7T3J9LmRWH6VzODw==');
define('LOGGED_IN_SALT',   'TNrpfZ5dnHJ2t0phKwnTMnAzKWyepB5UJnG7PF5DAP4GgTPxrRQOCYicMKu583xbb87jvAGHTWh2bHI8Yn1Y6w==');
define('NONCE_SALT',       'OAwgdFg1w+GcYF2TKjpX0+yc07x/aVscBRoKqU3nv+KndGFXR3K2mAYI/pBF5lTwbkMlfcOxOMS1aIdGV/oNaw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
