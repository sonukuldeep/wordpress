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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'snNm.C54jm%{&!$29:H_@(BpL/3QEtISe^oNUDO(istGSU0^+`C+|l nhNyY<^83' );
define( 'SECURE_AUTH_KEY',  'k-[WZE&&;kPVV[qpERdBpFg5^FFnyC%>KdDpUs_EHY!#iB):&}-T9CCxYB0E&~TO' );
define( 'LOGGED_IN_KEY',    'Vn.Z*4Y-bmjrq7nVo-a+L;dOI0vJ4e~k0m`Mo<kf$C1#~.77d?+H<gC@R>D/`pXy' );
define( 'NONCE_KEY',        '&an+hm+SqB^z&rtI |@g9@RC%kM* Cr9Vr,E>3aUnhg0tB#i6RmUC|sT`k|ic=)T' );
define( 'AUTH_SALT',        'gLtts(u~Ga(wK<BTEk<=1LKr9g+6hjBD* R0zw@Og)Z QCTNuw0NHF2?ib;9~e~F' );
define( 'SECURE_AUTH_SALT', ';rBXsRv8W>L-}Gdgp`=g*k9/>U.PorW)Z&@P-GG0f[-;j}:2DfVzXB,cJdX8-KPA' );
define( 'LOGGED_IN_SALT',   'sDQuZ?fC`mU12pO_Kgk5]b2IKQ<<0I**<RQ*DB g|`j/Pz?tb:p;:0%{MJBVxJmj' );
define( 'NONCE_SALT',       't,aTJ@(vx^[MODl>h&;%wV[VvuvAMz%+nlOgzPC=I|FJu80 ,,)nL731,v(:pl$w' );

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
