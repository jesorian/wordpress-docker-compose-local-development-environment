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
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '19?[r&<t6@SS(hj@@pF4:M<ypY^s|*(5V(DeGQm2w:Swb77pxj+y@&~s)7(DP<3|' );
define( 'SECURE_AUTH_KEY',  'b9n^y[MVo/w(wRvZAm}lICU_*(co}4,8FqDdZ_4,214WX]x|X:-@G4m`!v,Njk/]' );
define( 'LOGGED_IN_KEY',    'G9E9aPdN%E$Yx;4c#@W^(vA30t)!U#6LI#r+ZJvR 2XeG<R>c<}UuHd=^Bkr~mB3' );
define( 'NONCE_KEY',        'S/AUUG*459zndL#J|uTZ,|ec|0huS&YIn;91mm?ryuJD~XiE2 Qc]/;+I0_W(}jT' );
define( 'AUTH_SALT',        'vhl=Y[:<r}&$]^onTC1U9ibXa<VmOQ_iJ@em>8{*~evg4Vn02mNpOPAJ1#HvmG~|' );
define( 'SECURE_AUTH_SALT', 'd{)HHC^5[AvkuHJXr^fD&nS_x!niT7| @-G?9/`f*]J&*4Jz._W+*Wb3>RgH?&/e' );
define( 'LOGGED_IN_SALT',   'a$E^W~|nr|:R*p<K>;V0;`qn`HD;d094K 8QE{+d4]*Xqrt~O(nukZ@egN` udAF' );
define( 'NONCE_SALT',       '+5CL ]U,|>eI7`.I4Cy#[n56yZXoY4EPKTblMyg?}nQY+-aKq+>e#p.BvZIJlPxb' );

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

/** Allow installation of plugins directly on wordpress */
define('FS_METHOD', 'direct');