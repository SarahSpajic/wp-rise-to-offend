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
define('AUTH_KEY',         'QbiBwa/tQ6wYvc5wIsT16H6yKje8pV4izbiBVb4/YTjjWffVKBFrV6tld8TNxFgxrgBZCIfTSIgFcPjxymkQuQ==');
define('SECURE_AUTH_KEY',  'cPEmaNEyVgQieqGhglmc6fTeHJ8OXsIRi4GtQgK+BSBojacTHNEEzygsOFx+hkhFmgy85dDmu+f+SKK5HBHefA==');
define('LOGGED_IN_KEY',    'RLNhKMipooJ9myN7jA0ARIgdHll062MfAetn9X/VQUOqWDesjlCS6MprkPihSjEB7O1LYsM7lWfbAlnFwx30Ng==');
define('NONCE_KEY',        '3O6hR05ttJw1I/cNzEGOWO1ny/DIdp/DRsKs1sN17RJGYq+fce+LHYJAb7lNNcSwYwit1Oe2yMUnnvbpjhLpjA==');
define('AUTH_SALT',        'Q3W39wZJjcyEFq//g11fkcn4ZqbvxdP8JDci3niNjcnNcskLTCtl4tdrNzFg+X3UNRTNmap9Tz2s2FFX3m0+Fw==');
define('SECURE_AUTH_SALT', 'vyJQ3zXn9/TptGskTmXjxUMPBFGIWNGkeKX+0q5+HjzxeAH37gK5KfGgICdLNyUB2q0ow0cuV/05DGMwtqEqpA==');
define('LOGGED_IN_SALT',   'Sxaz0LzVBUTJ3kbFx8RwrsijWGJF/hpfr7jbF0jGnGWIKmpccnjgS+Vau7kqUkf1hushBiR3/Y7/zGfNK3Z2Nw==');
define('NONCE_SALT',       'FsaGhhsDL/KDk1jyukQzp5d393MBAmkXXYB95Ka4UTBYR/UwVZolYz5NU5gTraP6efdN5xxyqcFM7PDswXqrEA==');

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
