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
define( 'AUTH_KEY',          '65&d>#m38Fy/f9M~VN[{u`WUe*DwRCEuSyHL[S]yb|I!cm1=I&?7A+l4Yj)4Q&`E' );
define( 'SECURE_AUTH_KEY',   'MqOM,6BARkI>qT)JedP@PxSV{H3^`)*g`KO&*$7^;q4EiFkI:,$5[{A4V`GM6[Z7' );
define( 'LOGGED_IN_KEY',     'PjdV}JMYzk&|rz2|#3(e+f%jF8[PJ~i6V3Xrd=dO>#ojc@#xP)O*Q-Pq67G5He?Z' );
define( 'NONCE_KEY',         '6<U6[[XHn08s7T3d.d58lhd.. WDI8G?DXNMI+D@mU}@caO1`/reB9S<Cz./vBLA' );
define( 'AUTH_SALT',         'D^A2a %DIS|Un+Bu|&h}uFmNc^Si1K%*$_/)?ZELb,,Iaka@8}s)v*-yoYF8O~G_' );
define( 'SECURE_AUTH_SALT',  'e!Kz7X6;+XbE13e5 Zjw#M,Ph_tWq+1,`P}%P>ZkLBO[U=1PfUD|y!e&:Z?^T=10' );
define( 'LOGGED_IN_SALT',    'c+WRnW%&q`+ndxa$uB8^n;px9HT;>9+eKEj4`$ThN+6AofN,Yd@+TD| WA2WY:f]' );
define( 'NONCE_SALT',        'Q>fx3k55Gi,Psg$2v_r3GB=Rh[>Df]F,7hhj1TZ(UX$1P^07+5Z j/.#_H9{*@XF' );
define( 'WP_CACHE_KEY_SALT', '30y1])X{9/n.0~K<9U}{!3;.^VgU~hVQ{xJW>Q_rC6|X0s_/ wqfY%[U[yg@fh?~' );


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
