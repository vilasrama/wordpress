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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pp' );

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
define( 'AUTH_KEY',         'S&4zQ9|Fox2xA+d:`L0h.SE]5L3@N#VC7z($AmF0U:ygPKQ_]NJ7Jw?U cCTj mi' );
define( 'SECURE_AUTH_KEY',  'os,l5D{X  -~o_J/R`09.w1aG|YO5Gj,QP;D#PwOe1R[6Ar50S+ak_*,q~7VR&)R' );
define( 'LOGGED_IN_KEY',    'q3k^1lIeEhF1+uD!_{KRv&O;[)F{^hCiu$j,1F%gWY 2`  _k)(xc}n|JFFzn/G&' );
define( 'NONCE_KEY',        '_(Ng9AQ/P/vD/o,f;3J5G)O/>W]Hmzhv:w7z^~^4xrtzk>+-4$,vLcIdmre;Fj+B' );
define( 'AUTH_SALT',        'Q<IEDKe3@*u[*,FoPz].d02ym*^*/-);[$hz`GU!2~qYe|-6@sc[]xsD^%DXAUlg' );
define( 'SECURE_AUTH_SALT', 'teAuZ%.g-uitV&a@cT}u~m~Yx@.T9GU_~L<r|k^qaV{D>cW/Jdn+DFU^,VlS?q,n' );
define( 'LOGGED_IN_SALT',   '.Tp|SdMi1004fUWORj?<aA<tow*GWj{la|,4H`V6D,qJ>k*NGaU[mQfkptKwx]}1' );
define( 'NONCE_SALT',       '6Uv}:WB$b:NW^uq^r:]@t)wehi .)Homl8yM2^<Od<WC?K1V42ZwsuE*ylP!?v$6' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
