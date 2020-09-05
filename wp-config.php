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
define( 'DB_NAME', 'firstwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nwmtN|CfiW/n1Q^TyYcS&&)]h!oG|,-9xVQE(z4D-t5,IJ7v<K=w+vujS50J;{pg' );
define( 'SECURE_AUTH_KEY',  '%DYZpsYtCf#50M<f$L*09[KjZ!b_(m!Uv/f}+ohaxQ=k-noN$+>z_Ns6-i2_;%(2' );
define( 'LOGGED_IN_KEY',    '*hq(I#TcKN%~yuFy}JUUS]9t|PcX4[1G]Ql>3)8l$Z=k2t|eTckSqavG$#Tb|_l#' );
define( 'NONCE_KEY',        '!gjR`uj2_N4P_=Dp?F>].T8b|x6@w99Mn;OUz05(Y_|[9^m.vkG0MMa&n3$]IVvi' );
define( 'AUTH_SALT',        'X31`KGwH<kdcevted5U=80K4YDB[]|i%+z2Ks#4qTy~e$O[;CBR<{t+tYl#j:*ok' );
define( 'SECURE_AUTH_SALT', 'Q?QCvf0!oVK<sgl)XG{!S{2vVbo~V[j !6DG2Wwf-J>,^sc4L^R?fy%oC8^?+Gu,' );
define( 'LOGGED_IN_SALT',   '?um3m!`Y@G`V84bAmQDhb*CD5UI9ZM3uBq.PUMklqS;LM<$o9TEQcrj2S:&inL&f' );
define( 'NONCE_SALT',       'nz ]B_CmrHS;-L3vMW+Ur9Jk-9xcz|Y~W$!lJ=gXp^I!uhVoLEK.`j*KYo`L%Au-' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
