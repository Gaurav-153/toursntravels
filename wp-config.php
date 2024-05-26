<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'toursntravels' );

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
define( 'AUTH_KEY',         'Ep3cWyn<d<)5.i]I^S;wLm&E;TTr6yNY(71VdslYr?I/?WyE+VEAPB5N{tBGJjXZ' );
define( 'SECURE_AUTH_KEY',  '+RphL$Sz_w/BCJ+EqLR9UO`4!T?m},][QCB$J |xBwA^r2lH*=pYM0E*kyu8uq: ' );
define( 'LOGGED_IN_KEY',    'Q{6(}eb/uJlu&APU.iU&f+q?h>N+CR$!Ckm9+x;qt !-#`b9s.qz!7YOSS/A)x9q' );
define( 'NONCE_KEY',        'j`xV$i@xW>>@5Q0e&n;{uRMiW9X+~I8sOwf%1EBui%QV;lDPe[5~^)I8/NyLGp5p' );
define( 'AUTH_SALT',        'lz[zX(6[$W)at3YxHYBD#Z/2/,Cy7/f}m,<CNqmbZ8zs{xD/)ezD3a|I<sj+X>W(' );
define( 'SECURE_AUTH_SALT', '~Hc=zmZNq9xRtXM.OkM]{%rjZnFOxIu~]T_1kRx)]2ohE6V]D DS!vwx2w{_K(eq' );
define( 'LOGGED_IN_SALT',   'bugYVjSgeJHZedaUqNteLcwlB;a&O5vGBFkVmg(5t 7elHm5GrzMF.Srk}qwO4&F' );
define( 'NONCE_SALT',       'KD G&p?_ 6=$sh[[xfE!`L3D.T`$GRF4Sb69_1ZQiQc0;JZNGG&T[tf-$l<5,bAg' );

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
