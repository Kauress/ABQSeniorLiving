<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1112201_wp1');

/** MySQL database username */
define('DB_USER', 'i1112201_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'M^Q30wd~Gw71&&8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PzgGqALoqhj8XOmGM0BveXhhr1L4OaABF0bJC1Kp1vNdLuSQlqpLjANFcG0TlLyG');
define('SECURE_AUTH_KEY',  'eIgZScBM6ktUEJo0Fo3A9N1rNpToJ8uFwsZi4mbWultHNQvp17GPR4hvWVT48hIV');
define('LOGGED_IN_KEY',    'J0HBSJKrxy9ujTXJfbh6j5ZVn6spvvhJeUlseSMcWxhGG28NTowazJmO5ayM6Ha8');
define('NONCE_KEY',        'U9aoSCsh3DOWpeYcyvyA6A7vTXJZPHOLkvJLPAwUVCTpyLuGbDa9jFOQoVx87cYu');
define('AUTH_SALT',        'cybWjGDX95TxH1jVHlOam9fFZ0ZwhhaA2KC6sGFBmzkv5qmOsTLiQY1pMZlFBZGp');
define('SECURE_AUTH_SALT', 'usPecAkRxVU7Px9dh4YXLl2JTh24ZlUNIMqIpy7VKbpZi5C2PZUq9dCbk7wnuWXz');
define('LOGGED_IN_SALT',   '7ed3xO5e106a2kCD8LZdi2MYb7c3zE7QpZDprijsflrIUnMPtNKtT1JW4fWU0S1X');
define('NONCE_SALT',       'X8Bn2aXAaHdxM24nfD8NgvvcswWInqCH9mzonEw9YrouCPuwbottuO0UomvaLiis');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
