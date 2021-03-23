<?php
/**
 * Basic WP Config
 */

 // ** MySQL settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', '');

 /** MySQL database username */
 define('DB_USER', '');

 /** MySQL database password */
 define('DB_PASSWORD', '');

 /** MySQL hostname */
 /* define('DB_HOST', 'localhost'); */
 define('DB_HOST', '');

 /** Database Charset to use in creating database tables. */
 define('DB_CHARSET', 'utf8');

 /** The Database Collate type. Don't change this if in doubt. */
 define('DB_COLLATE', '');

$table_prefix  = 'wp_';

# Rememeber to get your salts at http://api.wordpress.org/secret-key/1.1/salt/

define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

define('WPLANG', '');

/**
 * Custom WordPress Install Path
 */

# Sets the site's admin location and the site's location, respectively
define( 'WP_SITEURL', 'http://localhost:8888/recycleabike/wp' );
define( 'WP_HOME', 'http://localhost:8888/recycleabike' );

# Sets the content location, related to what's defined on composer.json file
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content');

# Sets the plugins location, related to what's defined on composer.json file
define( 'WP_PLUGIN_URL',  WP_CONTENT_URL . '/plugins' );

# Disables the embebeded editor
/*
define( 'DISALLOW_FILE_EDIT', true);
define( 'DISALLOW_FILE_MODS', true);
define( 'RELOCATE', true);
*/

# Disables automatic update functions
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/**
 * SSL
 * You might want to force SSL on the admin page
 */

# define( 'FORCE_SSL_LOGIN', true );
# define( 'FORCE_SSL_ADMIN', true );

/**
 * Debug Flags
 * Use them under development environments
 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SAVEQUERIES', false);

/* KEEP OUT BELOW */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
