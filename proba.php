<?php
/** Enable W3 Total Cache Edge Mode */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/aiadstagingcom/public_html/x/base/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'saferemovalistau_db');

/** MySQL database username */
define('DB_USER', 'saferemovalistau_vvv');

/** MySQL database password */
define('DB_PASSWORD', 'ch0-ch0');

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
define('AUTH_KEY',         'LdlBUDHE47qJJsJ8HxrBeSaLevbz1yqVY0ZtCTMTyDlnbeRpgYsL8mZBpLKYDggm');
define('SECURE_AUTH_KEY',  'XAceW8E8wOFM07dj2NtFtdgsNZMjYmpLaQQ10w4rDf85EHOdjHeM0gFftdQXKCaF');
define('LOGGED_IN_KEY',    'C5iLguzdIs6biqEuDXrwgXKbX1q9p4Te2XfZb2TPcKe9wGExIlouiPmVTyNklMcS');
define('NONCE_KEY',        'xsWbTOkmN7V5zVSinjqv3fUx2oW2Qg8L953gQOJh0bXqDklHfSNCAbaKLmM7VhKn');
define('AUTH_SALT',        'QTtDdfrnRTk65S0Xjk0chR4jxJhmIM3q2iiVz0HNLJXm403FKPMi9TFapH1dsLTK');
define('SECURE_AUTH_SALT', 'BmtS0JCHY9E1Dm1XUHMy9r8r6tOhVrLsVLGjV3o31Tfq1bN8coI4XgWBxCMzwLiq');
define('LOGGED_IN_SALT',   'VJ0il3LLR0WBciEUOJU9el1DhO2MEEUk9rQ9umNL2L6sbRwy15BIITWpv3dCL3Ba');
define('NONCE_SALT',       '4fGIHXgjlAxz2kA3UjDu6if7yDPTVPg2c4oWPpZOT93VgJCTQWkPScfW7TpP3V5S');

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