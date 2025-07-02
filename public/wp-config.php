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
define( 'AUTH_KEY',          '0703f9G~Ma>A6Znq|!|pK8g=>?h<2EA-ol-jU6u;,u&S8J%q5;w]p`i;!/VtFcY4' );
define( 'SECURE_AUTH_KEY',   '[_UGY BlCdcI/8:ovsbzW4U]~uJeMrac9)oC!ER`SyH=ElhR]x_OO3W>Xr)U;)KP' );
define( 'LOGGED_IN_KEY',     't;?e,j-cWvQj2hDW-P{K%z0l-s#>R*^ #O{zT8oF5ACN!~o7 CY:jUG6&MVQ8}N4' );
define( 'NONCE_KEY',         'q%Lg~a+}7N:#h?TC`QW[53]M0lW2D9hyY$3e@~jYDC+b25` U<ot;}w3/rlZsQ1>' );
define( 'AUTH_SALT',         '@~O=Q[G~.~M9H$Hv/Z%l-2oFIW&;TJneDls,IlUB|Q?,tusN{j%of;9,#Yyf&2)X' );
define( 'SECURE_AUTH_SALT',  'IdhQvNlFh|rMq3wC3TQ.W#bG[CaicQCT4Ih*}k/87ck:B<[pSncrCr(dS<)zf! x' );
define( 'LOGGED_IN_SALT',    '`#gU-}@wRMlVH<6/N4&/ B]sAG.A8DcvT=]zit|R;y5,/8wuP]$aZJ:[Mm2 %_X5' );
define( 'NONCE_SALT',        '&~HJZdWb,f$9QVkA]Twi:8Q 6~Jn($69IFA=eW5:NeK|>YDDNZAo]0Dxg]*k]|A8' );
define( 'WP_CACHE_KEY_SALT', '3.HV5%)NrpO%%DiW.=dyF.+`5S@JCjen)uOf3uzz&/Pk},=(9n8yxsd-7Rgn_]b}' );


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
