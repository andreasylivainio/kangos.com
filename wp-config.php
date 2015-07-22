<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '7e1e97615b');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', '095fcfd3acef2f12f85a10b0007cfc56a4603df7d19125d0e6058f453201a24a');
define('SECURE_AUTH_KEY', 'f2153163a9d7adf7e762c49ea736bd2bc561e91ba44a55db64edc2ec03375141');
define('LOGGED_IN_KEY', 'c0b2294992cdb11997d24fdccd85998dcace688798cda250b9a12d292eeae214');
define('NONCE_KEY', '6e973c6fd0d61c630b1d1ea506999685c04fe4df4d5d72ebe602eb56eb1b35ac');
define('AUTH_SALT', 'bb5d92f17ab208334c040a766b4fc69a22cf77c60f96b9f058fdc25461065584');
define('SECURE_AUTH_SALT', '6a4b0d2685073b715d6620797bdfcb0ac2d7b1738ab98e9f54d587c507973939');
define('LOGGED_IN_SALT', '67cc7d0fdafdbda92dd00a25fbaa6b8633eac0fb61e9f5fdb0da281cd8c9d9f5');
define('NONCE_SALT', '1925e6c1c28dcaa799b42769f6d9c144f701e53fa328f8148ec068b79311702c');

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/opt/bitnami/apps/wordpress/htdocs/');
define('FTP_USER', 'bitnamiftp');
define('FTP_PASS', 'E5fWLwt1tk6IOFG2KVteFQGX5Zw824UHYdSRukNuvnyzrdI0vm');
define('FTP_HOST', '127.0.0.1');
define('FTP_SSL', false);

