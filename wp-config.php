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
define('AUTH_KEY',         'NttHD1kNQQowMzQ5YCRxbwTe7Y5fD21vpysWXxkYK1U2+80NUbWtoWWtiB7wygWiEDgQ46DAkG/x+jcvx1dS0w==');
define('SECURE_AUTH_KEY',  'S9OlmLhGhKwkT2AmqBMVJeQkduehRtzg7e5hGomm3iiAPqyhGltGcX2d0zmsAOSlkWVnp4SLqDSFzAeVfCap2g==');
define('LOGGED_IN_KEY',    'ZSohxbSZ79o3KYNgp3oj0Zr1haXFxcEJjeS40yH2B1duyOgKRFlIO4wbXGSU23H2EZpIfb8xFI9pfy5mSC7eCw==');
define('NONCE_KEY',        'C36Jh16+fA5FlFrWyONkqzORa8qckFTnqb6Frr//QZa/8h3pnw+kI9rHt35o4wqPGplWEkap9NK1KPk26gTVgQ==');
define('AUTH_SALT',        'N733aLShyIhxatBsE8SFnt5nllW/rx+paxQGe5Ar8gqmutj4Ig9NZEXVdFynco+qL0AJ7SW0mRoKn5/CN91BOg==');
define('SECURE_AUTH_SALT', 'Y7+Wd9F/H49t+c9ELFBHhjmiuR23OHho1gKVjAb8G8HapBMU1PqAE90kfxcSXJ2TmFoX/h+YTaxjTxNMPgpJtQ==');
define('LOGGED_IN_SALT',   'jlIxF6ACAFTB3GOlDwvyhppdqWDNBX1be7MXGuuwHO2i5DOnVcqVJWMl7d2lFQgyiigdwFx7jgXhsWTzARlGYg==');
define('NONCE_SALT',       'ZHJthEZaHDlLM+ieFQTveYbKi2o+JXU3eThTr1u6Cgf3nJF6vibE4bSbMsX4k0aMLJUgBUgFynsTkuJ7zZs/NQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// Delete this before pushing into development
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
