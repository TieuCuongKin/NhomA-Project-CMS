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
define( 'DB_NAME', 'wordpress_v602_core' );

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
define( 'AUTH_KEY',         'GNN_r~_;{Yy -vNFhl>3)!k{:m0=>&{5<in*FW9$fNXOt}7ShSB-CsXuK3mZ[L3%' );
define( 'SECURE_AUTH_KEY',  'hI7<z@}9=`lJ_m7s+f2!C_L@Ee7et_Y.]/M!%7`^NS3`Wf`]bgm#Eh3fj2NZ&#FJ' );
define( 'LOGGED_IN_KEY',    'K|*3k^&d0HKwLr_aF4GM,`6IN< xl85~3maeq1yKG!.tTy5jr}hULnhWB!)u@;3K' );
define( 'NONCE_KEY',        '4<` &h#HjpH]hSKw$uTjRd5H}-usB!+32QhI+>g.VVYvNbx@U^NH4OxZb)ErR r%' );
define( 'AUTH_SALT',        '#k~o)(^(T:^]+(m_! 1:d4p0##}O4DI0_-PIq:/OTVtZ7}fe!96tPevY%md*F dj' );
define( 'SECURE_AUTH_SALT', 'xoi^}dWTp{%X[=1S,T)VHQ50at0o;nd7*+3^,5ROgSL(zmgt*=H3b2!B?gZ;m:;:' );
define( 'LOGGED_IN_SALT',   ' o.+NvY}rBfOBYgdn;*wYImxa{Lkr$EiE<mW1V4r_Amp92tL~sm3R[YnZ$X/,Ue$' );
define( 'NONCE_SALT',       '2/#&jP=,KYbqH>n.o(>BtG$=j]r&$t2;)/S5Nz12Q>AT1biY7@r`j&A;rXJ+@?.J' );

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
