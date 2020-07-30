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
define('AUTH_KEY',         'k5HpBm+xdh+7op5zMikiB3Uwske2YiilF6NFp8gmDQskZmDyMCqjEU6jUVjfkNIkgFNhuUfz1Qg2h4aFz/tZeA==');
define('SECURE_AUTH_KEY',  'k7YUF4QcurRLBRo3jwTbT8zc+MNpBOd6zvdf/S8UsssttU+tvDUIxYcjHF3cWtgc9BWPj6nOdsXpDxkFlZV96g==');
define('LOGGED_IN_KEY',    'mS8tIimpIXcLTdq6yr5UfTdRFoVgD3fCqC6/Xbu8BSI8HShOG88niOkwDO1+GQHCjv2VK7gbnSKwd1esvGKaiQ==');
define('NONCE_KEY',        'RP9ik2vPcv25c690J8kVDmdGz5gfVW4MNe4PS1yTb8wJzeyAtMeBkCByeNUbEak0bs5ZoE+7aMA3U6wm2X9UCA==');
define('AUTH_SALT',        'wHFkN/J1cP6i4rPhetFOQUgiNSxDnNJJ2Jsxx7MxC5UyTnSV9L29k2Bi1J7HHYYc9scJJaaiMfeIr3rXSX+isw==');
define('SECURE_AUTH_SALT', '6htGUppvbd/KRcn5raI6TVDf2yUB15QuuO0kpfRf7LNNp/TVSkW00JcfTVP+GCfOMzlhlRc5m6rl2M8GZQqxhg==');
define('LOGGED_IN_SALT',   '/kWSbzkqoGQx1h6PCWhRui6BFK6NjSn6jRDOS7GDDWiu0w6xJOUa5rrGcE+sUVHBp0m74xPNg0ephtgKk5XgtQ==');
define('NONCE_SALT',       'XbgFfyV+lkt2oBmB1kOJpBBnxEv5AqgS8sonoCTzmIll7daPs+8fztz1zZUi2OJ/n2HidXq3lzPuwnQ1zbNElg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
