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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'd5i/vcDa08f4FBq/M48IIfaoPUAiCU9shDjLjDDOV4pJXNew7L8aJbiwYotD8qGKqRFLJFJXvVJAyoDfLmq7wg==');
define('SECURE_AUTH_KEY',  'u3l79RLh3dsML5Bb8tmfXgylhghyoSYV6LvFR2WgI9GWNaLTISqQkFp/6NR7IQ3KMA5LWxrCKVKqOLQBAFSVyg==');
define('LOGGED_IN_KEY',    '6Fj7S9Avvk8dfP3QcHdfAkoWAqYpVwdsnIfEvrEa3I41WYVlP9O9n1v1dkqFfEposphUdUhgz/ClWxYH2PkM5g==');
define('NONCE_KEY',        'wzvlU8lxTr5H9S+93+cT13nRnrI2BA1gF3LKYup5ZFl8anPrYidpKwjwyj0FfFpjsLIaraHphRBwBTK8CZU4PA==');
define('AUTH_SALT',        'mQtVEgmNPtdDShz56/r8O56/XIXlU8UYiGtsl2dZzqyNyUY00Wvt7XpC50SmCKAIn1RHTbKi9hcijqt1dWXMmQ==');
define('SECURE_AUTH_SALT', '0iTRVi39Y28AgbPDiffgnv3FvLZvzmoJG4CaIhKSwsqPqdMXkCzIgDdCHwLjrz0PooHxvltgNmE2/PHZBuqatQ==');
define('LOGGED_IN_SALT',   'sLQiIbMHOCQ/A0Id5j8Oe4EjoyWjNptKZRrrIaIP5sj5bvp95iVL43AJJj6NugGAEezMk7ks3CP5LmfX3h1eZw==');
define('NONCE_SALT',       'CSuhxPWajtIvmb1HRjMzsjfSiKLuwRUKh+p3mHq3dvFxHV07HkzXLHh/t/oeDSFHnd5Id5oXJ08QAMuP0uXaOA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
