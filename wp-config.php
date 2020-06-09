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
define( 'DB_NAME', 'isiotech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'KPjQUN(%3M87^[ge,x Yo+M=S.$@ZNu. w2iYTf;:/n5g=J0F1v>0iLbybMuvs|.' );
define( 'SECURE_AUTH_KEY',  '6inG,*G#%sHLdM1XLL3X._sr1=AXvn4FYc[OS5Y^s6cmM-)oL=_3P$=I*RVERtRk' );
define( 'LOGGED_IN_KEY',    'j8lID1+h^S)i4zK3+^wXoCv3N;FN39ier,4K}VI<-tQ)U.$BSnYJhfREr:c3o)D/' );
define( 'NONCE_KEY',        '#3NBu&=<>?^uI?`?7%+Iv49 3bGD,302AQOyI&i((Svk4L2An)N*AIPSv@~8P3]y' );
define( 'AUTH_SALT',        'Z</NwW4c<9LW3N}GOnu#685D}{Jp5v+|FTCM72Acd~*!Nl%E>t1d];{Z__(!T,KK' );
define( 'SECURE_AUTH_SALT', 'f@{Lm`90|2RO@ej_9E+V3Y6^j5T>6sKB=Ybn=Hd1pePlGp5qB>*r9C1u0Qkn]8uS' );
define( 'LOGGED_IN_SALT',   '#4zN-{}u`[$1BhL.6i54(RixkJ:&@Si@^TwTo@X@,]V?rGh%*iavW,*>=Cw.1I?:' );
define( 'NONCE_SALT',       '1=:k!?+#Oxu:q?#mrZAMV tF.boie[QBi|!9Rg:v>H*BP1]` ZX4Jz+v@^CqMF#Z' );

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
