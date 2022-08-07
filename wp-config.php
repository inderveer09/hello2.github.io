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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '(J>i*-6Mgl^@Z1l:*$eWuExA>{Y/%j}|U*}6];JPy8RO=f_uu0%ab?i%hZokWL+H' );
define( 'SECURE_AUTH_KEY',  ' $6`1mIADt8Y0}7mmh[(33WWC~v3:3*uYWBp:FweKIE>d9y28fM=wb@(JOu<SBuP' );
define( 'LOGGED_IN_KEY',    'l[5ss;6]oLU-v(_zxy,!zQ$}Kz<n)00y{V=vbey(Ra2Kl.>V|4R2 uwxZ%,&qkak' );
define( 'NONCE_KEY',        'XoaK3J3b>d{SR>{c?u8VNM5gni;h<{+AVeKqg;YZlan|XN6KJkX4v>&CNx4btvO~' );
define( 'AUTH_SALT',        '{(pofQ7Q}B#j*Z{ml(zKzIP<@lw8,(>) |:q^i)y(MQo2;Q``WlFUfd.lw&4n?y*' );
define( 'SECURE_AUTH_SALT', '>U.!4$_1v:s@MBYN{T^gJ@(Ovlvhb@2R8wm@(/3GvfG*mlMQ|w81@7,`*L:&qHt(' );
define( 'LOGGED_IN_SALT',   '5//iL%^7%n$mqY+~5cA8OlKz?L>tRbU<AMjP8%n{P,[2P[PTr]4qSG+o]?I gHib' );
define( 'NONCE_SALT',       'gIsqR2{e`Nu>PV%;.C&cr9MnsfZ3^t+>JK!7X!_`a-pKV!M%Z<`8y8J8HRqHQZS&' );

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
