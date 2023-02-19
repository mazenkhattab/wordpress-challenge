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
define( 'DB_NAME', 'assigment' );

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
define( 'AUTH_KEY',         'IgS!*?jYpm;@=8Xu$Z24NNGAw1Aa4KLT*:~D4jy< eWS0(B#QEp>9XL.RaT``9$5' );
define( 'SECURE_AUTH_KEY',  ')8%MuuMXiIw4<UkRl*|4U0R +QNi6Q`>D>=ALdb5%J9D{b@R#ST#/u&8?KsDw{g=' );
define( 'LOGGED_IN_KEY',    'Yj(4I l6q)gx?.qz/l3Ho<_f[{t/K6M.cE75Z#[Ro$!=?@$fZ*a+W%GyJlF)9U&g' );
define( 'NONCE_KEY',        '+s%p!kwM#,(^gv~ZM&^D6G+PQ]u;]LChNFRs|:?!XbYLs,FGpzG:lsI_t%P9e:P|' );
define( 'AUTH_SALT',        'H?l#7e`>Fx>}p]~Cyz={{8[I1?W+fu_2VHmV*3K(E9i1y&j!yiY|7Sq&tP%N2*7j' );
define( 'SECURE_AUTH_SALT', 'EbI3e@UJKE*]L-pY(bPbs[MfGY5b%MmU%#TkzrrJn(9QN}uUpb.X>m0t:MB&1e}!' );
define( 'LOGGED_IN_SALT',   'fEr .)X#f-oG%^L#,{=_{oG_<[|.SRn?wvXs@Oj8bIr9j6`|O,E2|K><^,I[$-E)' );
define( 'NONCE_SALT',       '2R*minUgM|=R5%Ymowr@2M(@[Y]R@g|+0(LRC(bw*s1cd)4CdvB3m?0km5>UOuRp' );

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
