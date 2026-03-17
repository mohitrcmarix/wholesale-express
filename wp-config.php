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
define( 'DB_NAME', 'newpro' );

/** Database username */
define( 'DB_USER', 'newpro' );

/** Database password */
define( 'DB_PASSWORD', 'newcmarix' );

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
define( 'AUTH_KEY',         '[5sI@BusnBBus!@JO)#1HIPq%UPH6~6{4U%C>Cd2IIQnG/lbR:b*3f0tgxG0=*SI' );
define( 'SECURE_AUTH_KEY',  'Nm7>5pdD),Ycy-v^?oG 5S<heIa~)t=:7lSLP`:u>H+1ZL&*+3.|ILg+?]oe8u&Q' );
define( 'LOGGED_IN_KEY',    '%{6cz[D`aN2&2v*9H8NRn1/8f27#a$F%: 1e8~OlQ<:LD#`@j.Nu:kIk^kb*rsm1' );
define( 'NONCE_KEY',        '[TVc}cvadib6U=K9*zU#a{b{]%u7@-WdT/NTc__#^7+AK1z x-)U_spV^.Mx]jPE' );
define( 'AUTH_SALT',        'v+fJqUR~<o&S/JeJzl=}SbLoTs<OS_MAQ8[:{O}nk8DaM>8G?m6&QuhS*aq`+wRa' );
define( 'SECURE_AUTH_SALT', 'V2[k$UlE$;~0LTn}&YSwh=&8*`KV}rWBK-wkrTNb]em!9,wL_3^x+1Z6 n({4R%I' );
define( 'LOGGED_IN_SALT',   '?nN@Bky{|uj;7zz5A3{VRK/M()2*d)w,EF)O!-!%]no1*dmYJr1s}c84b/)R`)o*' );
define( 'NONCE_SALT',       '?f~DWE!2|R`KF(!)4*_<_$For[-d.(ib_=xgyXc^_%>r)UrE[kF7BVcTXxas=&Em' );

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
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);

define('WP_HOME','http://localhost/newpro');
define('WP_SITEURL','http://localhost/newpro');

define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
