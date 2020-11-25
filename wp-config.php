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
define( 'DB_NAME', '1base' );

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
define( 'AUTH_KEY',         'K)*8YwBu0R,V</,*_FK;2ie$RvHrEoNG26rI@ZYJQ+/4YXQwrh18.M_?Y9>>PI{3' );
define( 'SECURE_AUTH_KEY',  'jAe&F:nus>v7[MMB)2lv{vvU40eih8*Cx.QR`HWZ*l[:97@yrV_H9~9^[LIzBW51' );
define( 'LOGGED_IN_KEY',    'F,W$E?j*+^xiw]@P6(K&92nQ..5jn2$w; x_TnaVcL6:d)9T7[!,aj]N0,)uQPbO' );
define( 'NONCE_KEY',        'KWj6&<FTW_gF(ae-+m)T6aYRF&xjnKKYz@<{k)7b9rw_Si_?]w*(QI)Kp5@_P($M' );
define( 'AUTH_SALT',        '*zT^jA!vk.1gmp7zRuSe^Z^[[RZc;!mfuuh:znoxw]45+kw0tjlggKf#5DY1jo{h' );
define( 'SECURE_AUTH_SALT', '`nZ`aX8,7|o<%Y?RVJ98Nh3cD[14h@_k[:(W2h=/j/0C@;XBq;7My2>Ba.<*W>kK' );
define( 'LOGGED_IN_SALT',   'GX2zkTV/^up.`0a*#0LOy@-)N&#Wll?LQHMROb?GO_.p?tjr~5kCC&Z1qSu<#bMu' );
define( 'NONCE_SALT',       ',mC]k=:JY@n>%[ANGmF# AgJ;-M+sLRvtSk:>Yz-8TA(`;4 WY*HHmfcxs#,az2Q' );

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
