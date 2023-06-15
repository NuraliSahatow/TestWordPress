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
define( 'AUTH_KEY',         'Ms|.*dQ4AFv#WK+0grGXK=OC`BlXg>PNjkNNl`<jeE/v <~z,f>Etzk}iAQ$7Bgn' );
define( 'SECURE_AUTH_KEY',  'E3Q)Nx+#6%]dB)r6LYb5HUA&uKf*fzY5,t/7qx!bNK98xJPk6Q2aEa6Y!-mae&gu' );
define( 'LOGGED_IN_KEY',    '^]cnRhHvd@YM(ei]c%1=V|s?.q|2mm(|U+Sa+I9x:IM>sn;:4Af)Z#INUY2W/]a+' );
define( 'NONCE_KEY',        'ie?sooM8jnufvD~Jl}s%fLwO801h?(PNwdsAfJ9m3KbsxGlET-KmEuyHG[k~l`qk' );
define( 'AUTH_SALT',        'uzxl#Ls+:!p6IZ`l^M`yGj^]kjJJ#983uj[17G=!`30b:;C1$r4.hoxj?shjIu2,' );
define( 'SECURE_AUTH_SALT', '%Ru@&z$.9i*{-4:EC~9278@gX0+Ks]ga`<dlh#o`jI~^.2k#Zp.p4h]:-[.1D1ry' );
define( 'LOGGED_IN_SALT',   '!8qK&/,3Y$5YGin_s^wZ=/m/Mu$OgJ8b}aBvdg?9,).=vq<`gIb-`EsJ[_x8vj<1' );
define( 'NONCE_SALT',       'T%0uHU14oxAs[2KKz<LFYt66+y5hj}D-Ml+3SIe5wq}S[1WHL#w6rv4#AH+XP53]' );

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
