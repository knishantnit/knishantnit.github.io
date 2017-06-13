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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'basilwqj_wp224');

/** MySQL database username */
define('DB_USER', 'basilwqj_wp224');

/** MySQL database password */
define('DB_PASSWORD', ']P2Q2ASa]3');

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
define('AUTH_KEY',         'huef9gnglamdcdsctg8atoacnz32tuu552isxkavwlumjrbdd4v5jxm3xrzeywfl');
define('SECURE_AUTH_KEY',  'mr4bohu9ip9ppxtjndyuxpqbzhsioyt6lntuufga7ejiepmag8gbnp0yicwtdem1');
define('LOGGED_IN_KEY',    'rx8prktftytgygyfarnw8ezlwnprhvqrybfygswynx6owrym7yyzpyugvanydk7y');
define('NONCE_KEY',        'ilcbxubqdjhoijq8uhggwb4akqwydco5qff6ux9sadzzjce0pa3eyen6hiwkgpsc');
define('AUTH_SALT',        'xphstluh3sszutprlgu9yeze0bfi8valvli6chmmx4yppugvsjksm7vftjbnyrgi');
define('SECURE_AUTH_SALT', 'wziw9yvpqh6dzzo1nq3bolyjfxo1epjuufiub7xlaebzrfjgi7xqmw9mqovtde0y');
define('LOGGED_IN_SALT',   '22hxrvkysgd54ekybngdpyl3jqxvti4pomxxd0gjawswdiuilid3ulgnn9ctdlge');
define('NONCE_SALT',       '7hbppc2blrjnbksabj0wxsdchniv2ckaly1h3namhpoax4sr0atvs6036xmjwdsm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
