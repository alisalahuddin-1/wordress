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
define( 'DB_NAME', 'New folder' );

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
define( 'AUTH_KEY',         'Q.YPo{OE3U=dO2&,Y5{#1i;oW%|JRldZ@rk@,z=f?&Qz6(CxeFZUMKxMpLsd_[cZ' );
define( 'SECURE_AUTH_KEY',  '`O]D>f~prs_p=LtzXm4zY;TRY~][-A8 Zp!v&yLdyN$R__.[~rQefc=uMXDGKh9@' );
define( 'LOGGED_IN_KEY',    '.,>&i,{&3Bjfx#BpuL2;9t>4+w!9ZjbHjg#j:Q6KDa##$0!^5Vc%d+tRTk.g?S2k' );
define( 'NONCE_KEY',        'i<9)ZttHVD93wT}k+IQ7wE0!{D%W6]D.USah&H.*Kk>$yByEtoOrgE-dx.a%bHJ1' );
define( 'AUTH_SALT',        'owM~PuQ91mK.bpZ3Ght}/9M?Ri3ylMmZ93s&Oi5-izY9;-D*obAo3_X_t#s)%t=z' );
define( 'SECURE_AUTH_SALT', ':b9bg7&PjZ9j9qi*^8qRTFwNJXuHR->KMEFG9Y@h^Y!k.|9Hz3b5A|2C&*KV+2<-' );
define( 'LOGGED_IN_SALT',   '@La`JIoOS?_%u%MuGl +#^oWNWi%`XuWJfERL7$bo/q4jJ8MDnd|K0)fTX=I356U' );
define( 'NONCE_SALT',       '2 b.l]YLlHm}HB9n^I(ofL9dLto%W%Eqn&^~CB_l]iIpq&+vaQflpO1]1`6D|~$I' );

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
