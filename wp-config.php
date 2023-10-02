<?php



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mjrlfwxw_wp310' );
/** Database username */
define( 'DB_USER', 'mjrlfwxw_wp310' );
/** Database password */
define( 'DB_PASSWORD', 'iyS2S-[p66u--m0(' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c0muzgyftvp9pyxkclrwrcu9loot1hlgiawx7y48vme3igljtyma6vkuy9j5jtya' );
define( 'SECURE_AUTH_KEY',  'f6snhylcxovlivif1sr7cfrc1fvj1vd0g8m4lf2patqss5gs9wznajwqhh3ocemn' );
define( 'LOGGED_IN_KEY',    'tjwu3x756k2w3yzykygu5akcwdbjoduqfbmjueta7uurmazofqqhl8tnvzoft8a3' );
define( 'NONCE_KEY',        'ekhntevv5fcvp7ug3sja2wtg7z7deegbqqlypovltvwdnve7hqhpdszm3dsnhxkz' );
define( 'AUTH_SALT',        'y2iy0qhmyvclwuqxekdu2vnkmneim1rscp12ye58z33mj1cyjsat8mgzwklucaqw' );
define( 'SECURE_AUTH_SALT', 'pzp4lxnsjpokdrpmdei6bazkz2ntwkmgwjjtfyo4dfcbjtbnf57gjjaknyisn2x3' );
define( 'LOGGED_IN_SALT',   'uw1bn1db08eek6il0zwvrlwkjzqquc7q02jkhtoxx9bjavxvltephcflx8zwyy72' );
define( 'NONCE_SALT',       'we8koixlafjfueozfc1gijxuinru1x19seshgph4wz58a91wxagf70cuf4nrytuk' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvividstg01_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';