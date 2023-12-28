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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '?gVb)TYA0${yW($Bs.yV-]@fAW^Bs:H6(ZMrMNI1.HP{cj{V84=5;z]u>rK!7^2R' );
define( 'SECURE_AUTH_KEY',   '0;6,5?1qY?q!6dnA]hYfaBn{@pAy#dy6%g=GY&gX3RaKO3lv*_;}~R;i+k;&}B3.' );
define( 'LOGGED_IN_KEY',     'DU9#O]0=^5(iA]:ZKW#2@XKB%rQXWTy$(9lsep~R{^=N{,,);9yB2S#o%vd D=6p' );
define( 'NONCE_KEY',         'b+x$!tdRF3!K`,NHKz&`vo`9y_F~qisd[?QWwxcvev70IXKY^*<LC)6?z18/PW]v' );
define( 'AUTH_SALT',         'i%@<KId;-3ozPeh6x:9Vw jfj[[gqiQizEd(n-qB1VIr{Ng]Cp zO&fn0N,HDK]X' );
define( 'SECURE_AUTH_SALT',  '^ZOY+pWMrX[+md9gf3hv_^3}.U%Va*,-6,x&FmIxQdO{W)*f4p;Mp!~mGK.!4| .' );
define( 'LOGGED_IN_SALT',    'jRiqJACwoAPk7KnPn`e*OaBuqM8*B=hrehYhhDr5ssj)n[6StZqnPA&a#i5&@[e#' );
define( 'NONCE_SALT',        'nzl^}s-?En+`fH&;iV;#P80xkJj7B=rvKwJZfo,:m!2*v4J_= a}m 9,l`Imwc?;' );
define( 'WP_CACHE_KEY_SALT', 'X6olU%yR8TtL<ag>.hJ.HUeKc4_4)uFxYCh:=}-[A*zy(Kq8&)l^JdJ&lmQ:9Y|#' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
