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
define( 'DB_NAME', 'zone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':Xo+z.AB<pA#pdujwPPWRH#A9X!%L6Ckh=}DwfkK$yz6J}n-<]shDKPqrHQA:fb/' );
define( 'SECURE_AUTH_KEY',  'tY5T)x:|g:_CE|`1;US.K3;SZ>kKnyl G__qeA#Z5WyfMxS/(`*E/?k7gt7_5&|J' );
define( 'LOGGED_IN_KEY',    'B?6)Rg_t[vJ%FCTC-:Yx6|.?>)LPZX<BN9I6z8Bq7;V9=SY 2[Cwb!?c`jyiB!Xp' );
define( 'NONCE_KEY',        ':_;g2o%*6d%(VPAwOVP`0q*OwcYy6/l:TbM*C[l&R5Rgv5[1vPy:F~OU&e`~T;:h' );
define( 'AUTH_SALT',        'l+j#=vhSh$fmId-|{&[V(LrSD/4bra4w!1LwHB=Ss%g{?OtNKl)/Fc$%*dWqkkA;' );
define( 'SECURE_AUTH_SALT', '{7idekMzbtJ>qKaP%UnM55oRMA[dWD9#S/4JQyxg|M=YiLR!?OAIguN[4YiS4;X ' );
define( 'LOGGED_IN_SALT',   'wuDrB_7Uiv2~2^s(L%I<~~ML<HImoMeB{+u@sGVwfnayYrab7OE[CIicyo3&=qhI' );
define( 'NONCE_SALT',       'p0t(a<VJhT}lI&#=!.Q@ap|t2fKH5>q9~|W-(+O$3g!s(=k{^l{5]]ScGX8#k!y!' );

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
