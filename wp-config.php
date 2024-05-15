<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
 
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
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "websit19_haura");
/** MySQL database username */
define('DB_USER', "websit19_HAruaa");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
#define( 'WP_PLUGIN_DIR', '/home/u1571057/public_html/hauraaqiqah.com/wp-content/plugins' );
#define( 'WPCACHEHOME', '/home/u1571057/public_html/hauraaqiqah.com/wp-content/plugins/wp-super-cache/' );
define( 'DUPLICATOR_AUTH_KEY', 'n=!PV1q1q P|^t`qg[L1fgfn%W:]$G}Vyu|k?70(5jv)Ui!Q0E@*tHDj#L~N+di)' );
define( 'AUTH_KEY', 'vIG8ncb0t9PzREF9ttNiXfUsoRn13IJLrpYP5esWdnxWrX4nBAV2FrzAJK7czYMC' );
define( 'SECURE_AUTH_KEY', '9XD0VcGCIeDEipHybKjCT5cJq9yDd5LEyNs9FsBJW0TsXKLeCnNSsU4Yih3ov4Rh' );
define( 'LOGGED_IN_KEY', 'iVRvGr8v7KhygIyPf4LbmI9iQPQF8cFtG6Xdd5xh9w5PocTBppi8sHL0E0EDJ7hg' );
define( 'NONCE_KEY', 'vXmMPxP4n8UWVbYHIsfIUVFcAzuNRImWn4L3P6uFJYox1V2FFfsXK3YxJxLG1F2T' );
define( 'AUTH_SALT', 'n5qH24QpgR3suWuvmazexUERFfsEiwTLs4HcB1WTaWH3KWvVRPsSSSEKCybyuAUK' );
define( 'SECURE_AUTH_SALT', 'h4KxnfPGRyt0505r9r1Uhz2AaCKF9Fr6aatf34tBj76a79YwLLscTRb8jR14QcaJ' );
define( 'LOGGED_IN_SALT', '8srtK1DfE324tudJ476wqhBe8HBAASNqnIqVFG9PoSTXBz04zrmXuvHFvs11ecDc' );
define( 'NONCE_SALT', 'igVWLCV82uWfprniAsPJEQtPFhYyYqJBr3qFpN0Ju5EcVonb2v2gTDp9QWWVLUMo' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');