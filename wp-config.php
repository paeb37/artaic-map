<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_map_db' );

/** Database username */
define( 'DB_USER', 'wp_map_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_map_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|%H#b)>?y?1;v(`aS5nn~9tPi^LtLAHjt1mm6;mVmD}tT[_h/^; i/dgp).Nmd:j' );
define( 'SECURE_AUTH_KEY',   '8qb#~?KvOAAdy5Wg?Y^/%`quO91&i,PF[gF0vK>}X1?cVQ=Aw3ZgOR>dF[)11^,m' );
define( 'LOGGED_IN_KEY',     'pwF5~Rxt1Y{Pm`g[uEFw=oXu}I[|EJn]32YBe9r.>2:q~71nG!|} fXp/+tyxUk/' );
define( 'NONCE_KEY',         ']mYn4|)XG)>n?crSjq{%qz1H=k!Q8iP)%.1&nE#Mv@!CYEVYm`,*tUVio/!,:D O' );
define( 'AUTH_SALT',         '+[Wi}>5*]d!-lK4hOGTc*/yFd.*#`_To)J@F1]mt L%d>):$bxJ0/L$dE|%|Bv* ' );
define( 'SECURE_AUTH_SALT',  'Q%O9/Y]USUDd|wc>h-uqcJZ,p1Jo#SPtLgnDlW%qmG^Zb`uu%Zv3cl!k 4hg}8F_' );
define( 'LOGGED_IN_SALT',    'cG}l*v;nTw3q^4zZo7WaMt-w6WIAnOr>>rU|KB`24_I2/_6|HwYp {GCQ!]ek.R>' );
define( 'NONCE_SALT',        '=(ogQ0X%%UP`j{.MfS{Hw=opp<Q;[~Y:CV`z-iRSzc/s(w,w^t18A=J48rJX=Qq[' );
define( 'WP_CACHE_KEY_SALT', '/xL>_6Tt?^fC$m@M>7|{qY?:tvqK**Q_?)<be}Anuu8x)C;sZ=nAj?aU_uFts ^3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
