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
define( 'DB_NAME', 'cetprojose' );

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
define( 'AUTH_KEY',         '!}{x=-;_y1dc=[j2<GpXPH!+2NZ}Z=/X=e/MK[VYw-jjW~w{-N8dz{_(7xw{SfI$' );
define( 'SECURE_AUTH_KEY',  '289^Xb@AOSg<sU9Q91rm_T:F$l$Q]Ku;avykveT/-L!L_%]BT`XUZu8L1DsAJMP8' );
define( 'LOGGED_IN_KEY',    '?3 !$RezsYNh-,^7n&e2U+Wau|24<EGR;x [4D57V%Vo}tC{73*,Y-@PPzkpUqtG' );
define( 'NONCE_KEY',        'En(S=#r`|6RSDH}tN4ze$2dyL<*sC(G<D=rcLE&Yrz-5?8okD12_:$847#Yoi;1&' );
define( 'AUTH_SALT',        'kf{Q@{)VZ#J&?-X,WbpA1VH68=#RU] 8826QItR9vY%qx-J$inDmO)wH]/5Q4s)u' );
define( 'SECURE_AUTH_SALT', 'B~.XnQ*)uA>5Q4Bhg4>cJ$z6Z`ZyC0>ML-_{!5MOz=8QUjoizju}FQ5=j C,^k@i' );
define( 'LOGGED_IN_SALT',   'XN0/rL4PoujY[pQiWKr<{ $MeKk}]QLh5cU`]dlId}0e_g-wPKvoN~&nGL#PvXoC' );
define( 'NONCE_SALT',       'lm~`hqCBJ3`BJ%y8VNe?{M$o[,?J,BMbycs2:ghIcg]g!4Nu~2Ku2/)k 8<-(}W)' );

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
