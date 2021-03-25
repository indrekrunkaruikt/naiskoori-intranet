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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tyan' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwerty' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R[86:Qs#|+YHo5SMHyBkJQ^NOSGu=#B21bLhWs&!8k*:`*h5?kF$mX(|(/,FTSD/' );
define( 'SECURE_AUTH_KEY',  'bNS|zvGA|gL&=)II65w ?4?$|<IpbOu<@Uv(R!qQer{M*D_9@%71<Y4i#p0I}% k' );
define( 'LOGGED_IN_KEY',    'kkNp]By|V:v&>/f.*Yq!BG@,E]sCl*RaOWlb3!3 kg;P8r#PWvJTP.HM|a&xhOi[' );
define( 'NONCE_KEY',        '.[FtE3Pg9Mal3+g{fws4+G{L#mdZlj7]>f6`1+L4HFv?I={lz)e5Ly2bxM$h5Ct4' );
define( 'AUTH_SALT',        'K</1KQ6M1XSNgyiFh{6#tN,WqeqB-DskVVTr8-x7iAPI5W6^Fh[C9dEq|t1?&HAC' );
define( 'SECURE_AUTH_SALT', '#XY2K^;I-z-)-454by7@i$;X>=ign/x&G,3K^VKa{qKZ_M?H-EM~`2%cU);=M__u' );
define( 'LOGGED_IN_SALT',   'ZD+TNk)}Tim%Wjzjenu cxNqkJwKi%_OpdNFJyqk(b)@u]9v0eYJ7TPK^G65hLe[' );
define( 'NONCE_SALT',       'pAr<sI6??nJ6Cr NhkEmygbp<.xDndtk2W^%VsO<ZY3G~VV}.+zphJgw]b3n{HpN' );

// Configure to fit the function wp_mail();
define( 'SMTP_USER',   'naiskoorintra@gmail.com');    // Username to use for SMTP authentication
define( 'SMTP_PASS',   'typcvrnawwujiecs' );       // Password to use for SMTP authentication
define( 'SMTP_HOST',   'smtp.gmail.com' );    // The hostname of the mail server
define( 'SMTP_FROM',   'naiskoorintra@gmail.com' ); // SMTP From email address
define( 'SMTP_NAME',   'TÜAN intranet' );    // SMTP From name
define( 'SMTP_PORT',   '587' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   1 );                    // for debugging purposes only set to 1 or
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
