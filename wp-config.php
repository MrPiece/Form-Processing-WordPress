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
define( 'DB_NAME', 'wordpress-by-myself' );

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
define( 'AUTH_KEY',         'T5EY;?j?T_Ar-I6v^ HPRrvo!7p}UR.Z[J7{{aO2CmD oCPPY<j|k^p&)8SiJ>+V' );
define( 'SECURE_AUTH_KEY',  '[];4r>0F$Tc1BN3_+aUL.b]wO2tX%xjj V~%xf,`#3&fHhPZTM5k+Emm[NR*1/N%' );
define( 'LOGGED_IN_KEY',    '<DKk<OT8Qg@{e$B&>M@L_bfKM-@QVS-[shND{jHrxw{3j^%XRE>^0Dxo xr5g;GF' );
define( 'NONCE_KEY',        '@G-dE<gVHYmJ)H?2,%_8PYzGF:LnbT,QnQjc7:~Y>.</J3i)HQ~g}eV#r7BYJaa+' );
define( 'AUTH_SALT',        'ITbE_HR5H5iykCQ5.duk*DYdM>W4E=UqLc}n2_1OlNO4Z{=:#Q84_rhzONC0w:If' );
define( 'SECURE_AUTH_SALT', 'dF4a?e9R?Q;.xO$Q0Va<dBDm/ j5~~{Ksy8{OSb8Q!Y}LalHlfIM0<S$+Yf(]!yO' );
define( 'LOGGED_IN_SALT',   'a5Gb):XFTtx04Rn$Ti7uO7xq0m#:I2fS!1)@s;UVjIV[N#%4RZ?91`rMFI]la$!.' );
define( 'NONCE_SALT',       'e/B1K3fo1T{2ho8_>>>r-;x<Pc%O<`|uRMNd~+XA]z}|b`Sq~6E{3JD{*lA|& df' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
