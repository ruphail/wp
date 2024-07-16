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
define( 'DB_NAME', 'ruphail3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '5565' );

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
define( 'AUTH_KEY',          'l vI%?FW193=oXzb6`22v:XT,bP=I6!oc3VvKh&Mllibb;xThjA a42e]x5sxvX~' );
define( 'SECURE_AUTH_KEY',   '8!pGoadS(ev.r1MbnJli>ltQNyLO4aPF,OYZmmW<_!f.&R11<QbV/~H/Rs:HFr!n' );
define( 'LOGGED_IN_KEY',     'R-&hru[%@j9<*,[_r^&,/)q5>)cb@ IfIqHavR-x}WGx|Upu,84/.Q#@2i;>8p) ' );
define( 'NONCE_KEY',         '`a.[S@H}F*aMrG8HjUd~f&U-7gTa>3*1M^)kncEJ5heL9D(rdx17q ~8sM!/D`Z^' );
define( 'AUTH_SALT',         '#a6.l`>_{P!W;IZ#_(DS]b&|CAT /Ujr%9H7p=!6hPsx{{$?v{YU,P9dES)`q|.}' );
define( 'SECURE_AUTH_SALT',  '}IY~o*M[~UZiU$ v`5BbKW3!MakSk)xnl5_H-c6[~ftoCV!J,$_%X%>s$3aL95Q8' );
define( 'LOGGED_IN_SALT',    'X^p+tfP_2;BuQ=vWVV>jzR? 0_+F+=VZy{1XIZ]mT-!tS6LrP_C%Y7z$m+}kp1cc' );
define( 'NONCE_SALT',        ']PCZZn%9fR1Z*0(]t8Y0[;] kc{z$# s`Xp#4a[_(8>E|r<`t``|oF{:ytNV}Re8' );
define( 'WP_CACHE_KEY_SALT', 'r]pRA|mG,LRZ#4}f{& b_-c,(!kW95u&K4~?(Z]goBq(.wBEKh4jMD;jDMja [e`' );


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
