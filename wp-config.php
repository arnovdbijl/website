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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schoolsite_db' );

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
define( 'AUTH_KEY',         'W,wPVF^&/(;XH$fZXW`rt(;8/1BQE0 Hk5q^%cxQQ]_sG6Rjsrn5W`*L~TjyM7f-' );
define( 'SECURE_AUTH_KEY',  'Y|*#g,J;|Q>LcxlFw~TW)MT~AmSbx}x,M.KqRuxf%P4+^5<M*Fvi.O!zWb&o;q[/' );
define( 'LOGGED_IN_KEY',    ')4%`ZJe#R=6!pfpW*SX)N{T!eb!7(L!g!QBc+2n(;62g9g{i%log%/=3``UoawV>' );
define( 'NONCE_KEY',        'xx E7FcZs!>B/R+/FVPsD[UY@uJ4^M7YKNM!U/ey8Mjue8)^,RGEoCr:S^NYqQMn' );
define( 'AUTH_SALT',        '!Kf/I (rIg_m:os:|4m;}Tu-f<2ZVJ!DXRJfb@r3O*aH^])i/#%@qBPCP<,[;`:(' );
define( 'SECURE_AUTH_SALT', 'q+/vv+M~{b5A(/2p{33dq[#,M!(gD@ADYx;[@1+NrZvah`ik]mc&XDdk%?l*E5qu' );
define( 'LOGGED_IN_SALT',   'jh/o@QQirB{l=?sN$qM-}HKZy`x9BEOp1 &wf`!8)xb:g~:NyZQ2;NF>/r6zN{>2' );
define( 'NONCE_SALT',       'I<%@y=PdY6<pC9dSWyhlMuGuE,SF^!/,R,o0s ~7Sl(&d_<,sKoS#6.DJ{vXg76,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
