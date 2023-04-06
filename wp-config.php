<?php
/**
 * Hello
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
define( 'DB_NAME', 'wp1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Gli011' );

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
define( 'AUTH_KEY',         '@h1b=*l--CuiDT*bDQ#(6?#YzTD@37bt-4}YyX(h.c%aRXu*/K8t s?;a!UX8J*f' );
define( 'SECURE_AUTH_KEY',  ',_z>D?XU<q0tT<KUBth,w-4tbOBM!lO]!I.cyz 8d1kO)-dauw-/dA;#s9<i$SF{' );
define( 'LOGGED_IN_KEY',    '@X>46{nJ{gqf$Le`;MwkWRH*6my^udF_^6DUAIF/JwH]n7yBi,;hc^bh.8a5hA]Q' );
define( 'NONCE_KEY',        'q~e&4%P]i|=#n?|_yF_WCxuA ~Q^chI!qnw$4kjX#+i8,pW,QO|A;c$!Y!6[d5m5' );
define( 'AUTH_SALT',        '&:hvdxlU7PIRhNx7}xr/D|_a!rK_763p~0_0{q{oJ:8}->f@DSoWHbqLGpqgh6)~' );
define( 'SECURE_AUTH_SALT', '4E.,7m{,m<gRAOzR+qUW?)n4s__Ultwm]POLzWGL%tf!~*0WE/onOU:nlaX*,3/g' );
define( 'LOGGED_IN_SALT',   ',Mej i93d1^]JG91q1N@Z.;0D>:8quu:TO!=%B8! 2r%G4NS0{<1T6Z<j?2{_V{X' );
define( 'NONCE_SALT',       '=)XBN~?czP>aSR~2R##)O,Qyz(CjagrIH}}nRapUv5A+FEFg8Qy/e -c6UuVA^(t' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
