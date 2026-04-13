<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress_site' );

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
define( 'AUTH_KEY',         'EF!PEFMpKqaZOGxq[P+1z$np%?=HaW`9h~XiKv)@hX@B4 Y_CHkD,KUK=gzJPqH.' );
define( 'SECURE_AUTH_KEY',  '+ulCSpowB4fO)W}o$izA|;RoYOZ}8dDRc}n0iB[m.K{8svFI9.%ALu]P!PLeHxlL' );
define( 'LOGGED_IN_KEY',    'Fb#]o{Qk2m%kgKiY,[a1FL`*a0}Ib%@{K!Zk5Yj^Mo<i,v:j6/Q4^}IKKP.Em%kU' );
define( 'NONCE_KEY',        'gOy3jf(gwpUvXYOmkl;)_=]3&B#ypW]3qR*b$C2&UMY{ c.<M&PJzG$l$_(4bebC' );
define( 'AUTH_SALT',        'A+n=bbr!&V,@bjd$Ez.50HKMy$H.!HLY,f3X,Tpmji`7|Omm$`@nw|SVf 7u=*A|' );
define( 'SECURE_AUTH_SALT', '/?BW]emPb,$)0?4e+7Yo!#7aW|p.yx>eOgoDpx>L0b;6PGJmDS%DHV4G=8kJV[@:' );
define( 'LOGGED_IN_SALT',   'Te!J.e>6T.p,gf)K:o%P)~34LV=3*WId8[2 7WG_y7.)M}<M`w-N7sb6YR%X5z`Y' );
define( 'NONCE_SALT',       'sS}!Un8{D8 PIyi3]T#r,=7LY@4geHd:C43c[ZALRxj5-/.~|JzjB`.HwLr1W,F!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
