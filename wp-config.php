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

$isLocal = !empty($_ENV['LANDO_INFO']);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $isLocal ? 'wordpress' : 'uniprospnv2' );

/** Database username */
define( 'DB_USER', $isLocal ? 'wordpress' : 'uniprospnv2' );

/** Database password */
define( 'DB_PASSWORD', $isLocal ? 'wordpress' : 'Uniprospnv2' );

/** Database hostname */
define( 'DB_HOST', $isLocal ? 'database' : 'uniprospnv2.mysql.db' );

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
define( 'AUTH_KEY',         ']u:_@dF@2cYX-C_NeZl{V;`8u,[NqC8c:B>a}>YTQP*<W16Bt(bj[EDnCVHz~y[l' );
define( 'SECURE_AUTH_KEY',  '$zb4fLoO;cH&yS+Jbb~wSYX~f6(i)vwOz9a;t<w!d1]^7C,~x{5_o7Yy>Ai=z9BP' );
define( 'LOGGED_IN_KEY',    's{=`CO]q9hs>Izo|fTcD&du7vt5oaN-j+fTc8$3umM}Zbs D2LDEz;1C2%^|/X/$' );
define( 'NONCE_KEY',        '47bXk&k/9.tHaSkrjQ8E@rm/<b~C8j]o7fT7^c,PZ,TMAwh[dq_YVSi;jHtrAI0p' );
define( 'AUTH_SALT',        '2u}/6|v/,47laQaM&On7.ziX<#_aTZ]-hunzdCQ )LqH&+4%4sk(A:bGN aS&LO*' );
define( 'SECURE_AUTH_SALT', '<hW^JBnCAa@t$0m#gyL+fN&@&o;1^>(vK.==_ZZ<cA;NY}m(e~|L/0<=hu#_ik5y' );
define( 'LOGGED_IN_SALT',   'O_umyV.+oZxAw)/Y-P^AdW~eKSC~SJk5EXY}uU-{ SRGeK&%.T-m2xcivu3j=_yO' );
define( 'NONCE_SALT',       'Iy{@Y7F.7{vpI{sGO3-(xwFW>L*PCD(Fzg6]d@c^Avz^Z^bdm4d}52$+WV23FO`p' );

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
