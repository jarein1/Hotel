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
define( 'DB_NAME', 'db_Hotel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'TFf${W3p`PY&|4xL_pZV%<(FCPV8r;7)moDN~K;]6jq]eS2n.j/WKv8+DgeYlfY-' );
define( 'SECURE_AUTH_KEY',  'D~M9/?:nj.[PPo&oNFo9*:X$^gHPZuhXN7WvBqZ~rS&!,#@{7&|T$SQGw:sj@*li' );
define( 'LOGGED_IN_KEY',    'XM_~T_j2<|ihe~5)n;8!+C*?tAL7;am9V~:5Ue*lJ1pV.r:q:_4WJGe,W~]noLKI' );
define( 'NONCE_KEY',        'PAzSxK~)@K@+?+VJM^PT*AUv#5gLiCA]I<l3}#]6r|J8+ny!7O:DCL;h+M:z$Y3F' );
define( 'AUTH_SALT',        '<_3C@{,,H3M n>e/g4{`ALO.;l/Ig7Dxl;9T|$KfW*!NXUEmfr!AFNTFs%C5yLxp' );
define( 'SECURE_AUTH_SALT', '/#f,a9E<=>7v`Z|xA,z,NoS]dp16IU -:!&@M43qn.`8*n:a5Sj1(m=A!`0% Ex~' );
define( 'LOGGED_IN_SALT',   '/(nKsVS=t;*+S2#A,4kUt)w-+]FgV|t?RwRYVl/1C:8Uil$T.fZy)EN)5!23<8/2' );
define( 'NONCE_SALT',       '|ZmKqqn)Fo[Tg^RS#<d1/8J?m_}p`,7+/RZ*Dks<$#!v3T/9g`jeJl]OlW@v1HUN' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
