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
define( 'DB_NAME', 'wordpress_v602' );

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
define( 'AUTH_KEY',         ',0`ocY#>)b_v;vay= #_%9*LVU-QAl4D7+f]j%&DijDsDJIu}:$oCERfNkXt~If6' );
define( 'SECURE_AUTH_KEY',  'rUQuXu +<QM#3L4k,o9I`NBdR:nWFPz.<3;sn %AW8#-gypXgioopexW&<9RBrE ' );
define( 'LOGGED_IN_KEY',    'o:AXlup>]J<XnjZo:|iXoPTI>z6G3;{+Apt/5{|/0U`+63&J3/^#b.%s`7/6Nn)d' );
define( 'NONCE_KEY',        ';&Nf?h8]d$s?)K6Qqrs>/B*i{xw=_jDQ(cJYs-<t<!Tb]LtU<3LuBb>F56CE6zsK' );
define( 'AUTH_SALT',        'lOr;l/DY;AN+_86?grB={)&2yN=:.!sm0}-W2l,$F=;f+.r?rO8YEYU`WI6dH^zF' );
define( 'SECURE_AUTH_SALT', 'Q|!dd87r(Q>@Gq3.R.D?n#>D9P1xD77(Ja$=#j.,ufD]ulw+mqgV<}{<ryLgmt``' );
define( 'LOGGED_IN_SALT',   'IA]P]y8I5zKbt&Tk4d,`esZsF[`!F0@UP?Fvx6MyDz[ i#ya?t;lGvMQLH&JMxa2' );
define( 'NONCE_SALT',       'znrpi-oPNp/A9(^0o-92lpBZ)YvsWOY0smT_enlM`d;ejNXh9XmwD%{CXdrE]4y,' );

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
