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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vodanbrsite' );

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
define( 'AUTH_KEY',         'V<bVW77j5i&]@{L(P1W0H.7nhVQ`iP(^bWNy!u({He8no=#n!hGSE9;Jp.lDCp8/' );
define( 'SECURE_AUTH_KEY',  'aPsInkAy8YE4`8e6D3m#:GPX$6Y<8LjlXTx56yr!K;ayQoRqi4F}s>gs1i1c[hLY' );
define( 'LOGGED_IN_KEY',    '5;&4Q/}yK5V?|hFfo:j;]54H)_;ppNB)9/#7^ED]P5eECd#v)A=OAq6-8x%bFNv#' );
define( 'NONCE_KEY',        'r#hD3.v*|#aA~w@!%Se~#6cu3WlI_f7&}=f.cX0y[3Z9vQ(`~OmaAh`7m2}:Araz' );
define( 'AUTH_SALT',        '[{S3;b5eW>YOe$y6xfLck:$2u>OGc Wd!o!LHNP4BGyR&v@Lsw&5i;Hp3_PG>9N`' );
define( 'SECURE_AUTH_SALT', 'nXwBTzjl 1HxvY|]yY58-md+L>cHfuq/%;&Nbts.qX*GJ[pm]Iz>=,@ lWF)PUB0' );
define( 'LOGGED_IN_SALT',   'I?)A])OCXEM5bsI6DLQb_P.,GdjEH8Sd#7201`~-.@KEBspEVj8=t}@6#ty$-wQr' );
define( 'NONCE_SALT',       '#Aih4M6@}@FLc7oO+s1L)NQUZgxuX,QqvTVFo~Y0M7nBza^.xgH1f)U;K#A67=PA' );

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
