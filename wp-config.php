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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '2N_%P1dzd5!FX89~3NJ,PspF,4WuH^raFG5NDjCY2CP*(A8>vDe`xMviX3rT`~kQ' );
define( 'SECURE_AUTH_KEY',  'u8ePt6K]2sl3jvfQE=B*udCx*#9UoD@YHm!,%S43yt.DK{KZbAHkOcO_>d*08`S$' );
define( 'LOGGED_IN_KEY',    's p_DN4dW}e**}]|hGuGfr@Q=v{I{~my;O3n|#FL$jz2Nm09I!#sO9IqlM)fV3u8' );
define( 'NONCE_KEY',        '8kgmrR5uT>k<.Nw`O]sy]y8X `7vFR?V2.JK$`OdFujeKNi+~!^r3@k$iw]:~aB7' );
define( 'AUTH_SALT',        'dXSp)*aG-[|w=FF%7-f4vZdN2,WIJ{xj+%;SAk+qn:L,`rM!zjE%ZV7{)Pp EvA[' );
define( 'SECURE_AUTH_SALT', '&9_3AMW3i~o3X!T:ahJZ[s_E3o)n-R<jXv{=ri~<i5l]3c}/#jl8I=Hz6<[lVEer' );
define( 'LOGGED_IN_SALT',   'EZ^c~^0KCt]/Eu^;?+9IR-7+e5#_A@I^8`K2}7sICsk?x9y T8=l^N})!x$KrBUA' );
define( 'NONCE_SALT',       'ucN7Nr)IRNg&YqI=/`oxi5=4/e;J#2+VxhM?hSCX|U3+G*wu%ep6p=|T&gEN0+sV' );

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
