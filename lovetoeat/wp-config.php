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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lovetoeat' );

/** MySQL database username */
define( 'DB_USER', 'edwin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'edwin123' );

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
define( 'AUTH_KEY',         'uL1pcB<%11677&]tLz>^MO6aG5|b:$Laum;j.dh__|Ra5pxms6,dbo83X~n+AxJ7' );
define( 'SECURE_AUTH_KEY',  '$iEq8yfcfA?V^qiVvSSngtm~ET[aK,ebNe5[I<F#g)u/rp*O|!,6eGW9iu]/|pRC' );
define( 'LOGGED_IN_KEY',    '=T. n9EYv?#_Z(Y|z5<<h/nY~b=GT2cJYp@a2Dj ^YLz)L$Z7<}pl`wp_v7[)4l3' );
define( 'NONCE_KEY',        'G8p6t-3-cDCM%D#Elvq{4>-_To@@Nu!5L{V%cYy:swgee6/$R!:W4U)7}+<k^H!d' );
define( 'AUTH_SALT',        '}3~lHyDi9}?!5U4D:v.$]p6is:n?{@@HkCos!z<)_Tx~/u?I!qHeC..->pqKkk4M' );
define( 'SECURE_AUTH_SALT', 'LTwf1jtV($T)O5935zr  sL-m2x7Dv2UT7I|$$v^B=JbW`-kVFr]KPqs6C0>mEer' );
define( 'LOGGED_IN_SALT',   'x?2h@ol_lHLE|(|l$o+F WK_ydZ<%a6=WnmjeFQ:~6M!H:DTsAaHykqT>^*l1E_?' );
define( 'NONCE_SALT',       '}sOO!A1,i:<<I`t7*#Cg^H=PyVV*z>hB.r#IB|]5K-jcYmdb!KQDw](5sB+ZY)J(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
