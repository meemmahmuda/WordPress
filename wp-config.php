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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'g1l)xziyY6;LxTKiTI/]_{Sq/{|sq5Q]Smt8L[NzS)oGXTu#R2QUF9I3Ll^*nh-i' );
define( 'SECURE_AUTH_KEY',  'f85Bk!v8$^:i:+sBmNy*S~Ysn8=v7m4!{~tR5~APA;(CzUp_,N6RO*$ ~joKV,1,' );
define( 'LOGGED_IN_KEY',    '=]TN;KlN.4X^P 6|B>jRz5QU}Zf;u6Xd?6BId2c0+WG(Qmq,r(U>;kjTc%3efX3$' );
define( 'NONCE_KEY',        'kG1L:jD+JWzy M4WXlQ.Ia?1_Cb;{tU_17P!Z^|TE>MYu[ZL&@JIV0yr1;AYpd|V' );
define( 'AUTH_SALT',        '^; -h`JQE K`K{fIJ+h| L^fce)7+#iiQ}L*B<r&$41W#}gaMfR0.uIV 8 Po:<3' );
define( 'SECURE_AUTH_SALT', '5c8>C5f&}Cxn:1WJ)<D_Y?iBzr*3K(-7e2177P_{@*.~.fZxILQ*Ox1;NCc$mn1}' );
define( 'LOGGED_IN_SALT',   '-^T&j&??F=S>`H!r)#ZKq&TKvH?KH4h=N?jOqdX6ux@J6MKW&:E~)BO9I`VW;(i-' );
define( 'NONCE_SALT',       '2Aw.[w62hlwQxelCFid)_U%0xd]{s?Is`Lfw;/3$S8 Sb+a*:bK3QX6nD<-:Z[Hs' );

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
