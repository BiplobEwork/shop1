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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website1' );

/** MySQL database username */
define( 'DB_USER', 'workhost' );

/** MySQL database password */
define( 'DB_PASSWORD', '900300' );

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
define( 'AUTH_KEY',         'K`$w,{{s!bI03A?#>bXPgzK)bltI_Mv@rIg8M%_xNeK_!Sf`Lo~o&H[d.VVusWqE' );
define( 'SECURE_AUTH_KEY',  '-anF+1)+;b@?CeazP#gyl%e48bw7PZXN .]p(s^3,hl5SqHN1f1_7{,-iO<-/bLB' );
define( 'LOGGED_IN_KEY',    '2V3KMXcau2d[=KP@t:?ML6<LJi5)Lkj[P) CD#Y1pz SUn$}TBZGj$6~|0_}Od|j' );
define( 'NONCE_KEY',        '8rramNO&675+51ZOiA*,Id0C]-dD<JKOy1B _%Ci8ys6*~Nl;D62>RK%Z6`#ZXFR' );
define( 'AUTH_SALT',        'M`,L+4<O;ghY:vgf !;OM;>?.0^-gSNU}k$Bltcgnn0}w`@,6-5d5#;W2,e7bauF' );
define( 'SECURE_AUTH_SALT', 'eb9M8-PbMT;n,oNLQ.pRGtjZn~pZ(whZ7f?8]c<oiYVTt{1~&mov?HZujVO34B|n' );
define( 'LOGGED_IN_SALT',   '/7p@SXLpJQ5BFSqs&vsJIq[9^3s_sdByV+3@2u;];){%Rhw:;wE])L`PIP`gFv^a' );
define( 'NONCE_SALT',       'tK].Le:IeNF*^^SG=q127QKEfwR:fw<87>brMfo~<9SzaSdE4vuj~z{<dtS2PPXc' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
