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
define( 'DB_NAME', 'dbko594wzccwny' );

/** Database username */
define( 'DB_USER', 'un1pwvny9ggkg' );

/** Database password */
define( 'DB_PASSWORD', '4bkuevxksrkf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'zi,*=1I&<[*WN=1/$sx>}|#,88OO.Bk.(Wifg/o=ebl&Jm-oC*QwnR&R,pgmjn]u' );
define( 'SECURE_AUTH_KEY',   'JC?6}o)G^V{b!(`CGV#Tss5Lpbl$(/Woi>L_9b!y03[N,Qx*ZFe$X`Q:2VvvOPr{' );
define( 'LOGGED_IN_KEY',     'mYnOlY^I[cF^kLDdb,;Z~OZ2f3IoO^8RR!eG/:4Q^;S7>m0vE#%^YztdXGAX]qN9' );
define( 'NONCE_KEY',         'akAj/dd|{v]2uCY0_|V;~UYJudEUlQY5z`en{B;8:}fW@.WuxtO5wV%}t&.U.mgP' );
define( 'AUTH_SALT',         'b#%<zR`z8~TIjMei{6|hBo9`V?0lUJw3L{?R xMs+&8}]dCdU*(NS^ADT7^)u?a0' );
define( 'SECURE_AUTH_SALT',  '`!#v_^ZNfpl1q1d`4I cv@Vc#Uhh;D 4r5d[bov#lOAFmyF:~w`jX7mmCJH(q(VV' );
define( 'LOGGED_IN_SALT',    '8lyCZO*I]iDHx}I C2aYS2gL=9!$4j>GvQDJ=[1#:x,C>wD =<5Cv39Eddr;o}`.' );
define( 'NONCE_SALT',        'G3=yOtX*NhFFMyh}Vn3&KRODs$ y~D?JFp9ZNK%amfQf@@S<LA[gWrjvKr4ue)|(' );
define( 'WP_CACHE_KEY_SALT', '<}4 ahw=l2.9eJt3N_L}@wXla^EJ9]Kff04;7gm ]|%nZCD72v%gk4:.D/=mUG*x' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nlh_';


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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
