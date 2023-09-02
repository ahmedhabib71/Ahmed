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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahmed_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Dyr8]+)?#596-%v&1XPc.fjcP]u+e)qR+QRjP} 8]R-kA7x:)}%RYdHn#JYaL$^t' );
define( 'SECURE_AUTH_KEY',  '+y`<(b8cSqooEF<hCJyUY;YS0dD*9kY@6n3/.]75)L,Io+6Qn)0~W`TDIZ}%v%}Y' );
define( 'LOGGED_IN_KEY',    '49u&[~7}3&v/ivRR_!iX=><fk.?JM;5{xG& ( T-~N(NvyYHz3L@G-~eGo<z8ps ' );
define( 'NONCE_KEY',        '_+b)C; xMzusJ3a4Tng!Yb8yoOSA#ac-~AG-TM:a9t^bU*j1^b%=@&X}Te<s!;qG' );
define( 'AUTH_SALT',        'mwJ,m`:;hk_@tnhuu TE0qW<AjbsAS%i:xeVu<)AD1QkzNz5 (K]`>9WzZv`,+Y>' );
define( 'SECURE_AUTH_SALT', 'g71 ^k],%z!bt^muZ;LkrexRRedY3ea]8+sl7Y[@VQ=m4$eeC$B|b0w)kZ!#(=^;' );
define( 'LOGGED_IN_SALT',   'g[:w5]k-vtZ~60&X{;&OdFH||ZB;fq/$>!BTGU[>=it*!9Id<i.sp.m}lA8*F|y ' );
define( 'NONCE_SALT',       '`dR3;!kG>`3FtVkk<+E{Gy1sZFH*{:No2JVDGb}u@`JYv^ew7jV7~9HKA.RX-os ' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
