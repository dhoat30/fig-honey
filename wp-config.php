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
if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
	define( 'DB_NAME', 'fig_honey' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
}
else{ 
	define( 'DB_NAME', 'dbhm9rb73g5bcz' );
define( 'DB_USER', 'ursuparsb95u6' );
define( 'DB_PASSWORD', 'yz14CJSmNE94' );
define( 'DB_HOST', '127.0.0.1');
}


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
define( 'AUTH_KEY',         'v-.=W2&ThMEk`C5?Gbw?;SbZ;QCH?6Oy_myZz2Y]]&olZ0zYl_dIL,896kL_9q.D' );
define( 'SECURE_AUTH_KEY',  '!OC?&k!$v?UX} Z39u2q>4)CZ%K?Tgj+eh,?oVEI=+RNz*WM|6~i<&y. [k[30&]' );
define( 'LOGGED_IN_KEY',    '?>.&#BQ,wVj_$AqXkG[$=%BIJx28x~Cij_b%0Fz5;1<i#.GIr>a|CEdvx6RLrI`:' );
define( 'NONCE_KEY',        '>-n%AWbhrn{`eB9>s)wApkp]k<e-Ed#1KiD]^8ztWY2~#k#e>pOxtS6`SW?T-zI3' );
define( 'AUTH_SALT',        '!1y(ixD$Of5:FyeQ-sA.L=#}2RcWnQ2t,|o+Ozzp[ko%e~Rpz.U`$!#=RAfa}x O' );
define( 'SECURE_AUTH_SALT', '1%>u#v2$32xY/dK<i_i<9ij$nvw;Tar#W&XdN6Ac*URxk8%?$+r8,`-s1PBOS&j>' );
define( 'LOGGED_IN_SALT',   'W/BHis32Tw<QZ5A839]NvwU$_P}Yu;Ao9.#E[U~W-#>z9)Zm>T&UNNPFs$4pAXl;' );
define( 'NONCE_SALT',       'JO7p1yd#b/CbDy/A{}g3+MItuk?y))9gKX?qL670TS:]0c`=gVH.tZpwG)kP]Cd4' );

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
