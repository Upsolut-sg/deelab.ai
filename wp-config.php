<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tailjayc_wp463' );

/** Database username */
define( 'DB_USER', 'tailjayc_wp463' );

/** Database password */
define( 'DB_PASSWORD', '[S]nC42[7e3[HEp@' );

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
define( 'AUTH_KEY',         'vllhzqmnvzaz2unxxoageksvniwxsmvaaxayvd6ofmhlr7qn3xbh6zxgljgjreo0' );
define( 'SECURE_AUTH_KEY',  'g3clvhgtex8p9jsuagfgptligvxjbbszcpnh7vqorfjswoy0oep4mugjgtoolxfk' );
define( 'LOGGED_IN_KEY',    'cldyvksmdryonw4ctm54eruqbae55bnfvsiziszbidebv8rfpxitntusixasojpb' );
define( 'NONCE_KEY',        'ks4nboclfxgneifwtzcqck2wldvdgkespddb5abl7nb2ycdndpjlgqtek21oe00h' );
define( 'AUTH_SALT',        'i6ih9nsgnfhktcayss0gtcfmhbnkkyuehoxpqtjqgkrobhwyqc1kwlohtqaeks6t' );
define( 'SECURE_AUTH_SALT', '2ti5vbmiu7vwgftcjuktowq3ygegcmwzfqynhrey6sn5rwzx7wzv8rvn4dttsh5f' );
define( 'LOGGED_IN_SALT',   'kjp1stzg0f7foygsxxrkgikp0mjh3zhrnm4pxh06gyxfx5papjxgbme0ajvbv47l' );
define( 'NONCE_SALT',       'm6pd4olqjbgewypaq9i4dl1dcnxm1zcc7xvuxs9jmiaybe4w8ddteyygoukti8gl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yHF_'; //'wpnk_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
