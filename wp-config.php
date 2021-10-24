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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+7j$,YlOP,uVzYC{a}1Zu<OHCd_3g.k6E(f.Hj+_ac l/^G i4p+duPj2N%b9C<L' );
define( 'SECURE_AUTH_KEY',  '#[RJ0Cbl<yl)/;])M.-g24S-$VvcK:7/(,&3HK7rM!@`Z-OWaXMl2#cx#q].0c+z' );
define( 'LOGGED_IN_KEY',    'X[y9-_S-{Z)dQC2LOxQi$t#iPP=.Zaq6}u+:<U:S25wap-. Z)z9RNp)mxyJVbM{' );
define( 'NONCE_KEY',        'dDw9muen|M3g8j{71HWc$z,/M`p<uP?}-F5M!wp(nsz.W8ri<YXy?V^3c[6WBoef' );
define( 'AUTH_SALT',        'W-3,75`wbx5(}Jlm;Ist]eUOwjWyl$3`jYmk4j%StymXGZROiG1XwQ8Gql+! 4;Y' );
define( 'SECURE_AUTH_SALT', '`xcxLFu;`P0{2$@|}Gc`l#OdNUZ]YHPj9Ueg#?,WI}Q[Kgf4_aO&u[T>OG5:3n8O' );
define( 'LOGGED_IN_SALT',   'A0`4rw=wNBYs.IAt;KXDOycuQU/8S_l1Yp!2Y@m2Lf+qFVAOP&(->tRz)$F7BH*W' );
define( 'NONCE_SALT',       '?&o|*eN4&X8B~H+|5W(ToqOsuJZn75Nii#rM7q~t^*mXtJiVn},0lTepl>}S( H=' );

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
