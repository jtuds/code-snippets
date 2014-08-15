<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Define Environments
$environments = array(
    'local' => '.dev',
    'test' => 'test.',
    'stage' => 'stage.',
    'live' => 'flavourfactory-eliquid.co.uk'
);
// Get Server name
$server_name = $_SERVER['SERVER_NAME'];
 
foreach ( $environments AS $key => $env ) {
	if( strstr( $server_name, $env ) ) {
		define( 'ENVIRONMENT', $key );
		break;
	}
}
 
// If no environment is set default to production
if( ! defined('ENVIRONMENT') ) define( 'ENVIRONMENT', 'live' );

// Define different DB connection details depending on environment
switch( ENVIRONMENT ) {
    case 'local':
        define( 'DB_NAME', 'flavourfactory' );
        define( 'DB_USER', 'root' );
        define( 'DB_PASSWORD', 'root' );
        define( 'DB_HOST', 'localhost' );
        define( 'WP_DEBUG', true );
        define( 'WP_SITEURL', 'http://flavourfactory.dev/' );
        define( 'WP_HOME', 'http://flavourfactory.dev/' );
        
        define ('JETPACK_DEV_DEBUG', true);
        
		break;
 
    case 'test':
 
        define( 'DB_NAME', 'cstest_flavour' );
        define( 'DB_USER', 'cstest_flavour' );
        define( 'DB_PASSWORD', 'xdtI(Q,w$O4N' );
        define( 'DB_HOST', 'localhost' );
    
    break;
}

if( isset( $_GET['debug'] ) ) {
	die('The current environment is: ' . ENVIRONMENT .'<br> NSM_SERVER_NAME: ' . $server_name);
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ldgvep9uqfm8jxbfydcw3srmkkfsi8adklugkq123yumlob9alswq9cs3umpnzactkrep6' );
define( 'SECURE_AUTH_KEY',  't3g265u726lernbfu0nzelr9a0f3g71liwvgds8l123pdtbxdbrsgiza4lkofcduhn3vdu' );
define( 'LOGGED_IN_KEY',    'kt5lsssgdbytx15vvtxhn1djuhwzsddsmh4skulrh1231231mfnahcfutq2mzncnizehvmpoou' );
define( 'NONCE_KEY',        'y4sxm4frybzv6fftdyssbjsqvau8jnnpgc6bgv1231cs2123b6rfyncqfbvsfute9wq0zhziv' );
define( 'AUTH_SALT',        'n81s7zwyrms0ccpdpo04giusdomwsviezi9pow123assd1i2m5stakzeaquzaqjvooucs8z' );
define( 'SECURE_AUTH_SALT', 'mut4xy6wnpsveaxqojrfz8audixshdgosx62132ndunaspt4p5ikqrxtovz0ype5cvwp21' );
define( 'LOGGED_IN_SALT',   'kj7wsrljdksureo7fz7jn0voo0udw3druw123123axinnx5jzcd1jrmjkgjmony6nykq1xv' );
define( 'NONCE_SALT',       'dzv73zov3vkilmqucowg33amyt6mcfzhha2je1327lisbxuinspr9oryuv1ma27kbdg9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en_GB');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '64M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
