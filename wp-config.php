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
define( 'DB_NAME', 'react' );

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
define( 'AUTH_KEY',         'w.7bRz>$b qH&WrZz?QY:E9c6p!~HzTUyqW&Fglf7qYu)3%_vvxO|b]Q|E0{~@+l' );
define( 'SECURE_AUTH_KEY',  '9Y%0N`{Z?`-;eWD(%Z5M9h*40:fGgZ IaVDr*{h2PIm@S?oW*5_DDknP]]op}UE_' );
define( 'LOGGED_IN_KEY',    '5Tt)x}[xt;MW7*:KaF4i/N^}r@bcS8=kx&~-dC:Y@Tc|w[%s35)};`Tk.9QBg!Z^' );
define( 'NONCE_KEY',        '`-74 6LxZK>6b;WFz)WGwEs+p|}0j(7z9mxMoq[eZ7zuUvM8)oAF8oB^xbQdC:Ep' );
define( 'AUTH_SALT',        'RFnl~-^A|@7BiO`cLVc4!S[C^^*A{!7r;P(t? 3ZuW14f-etDgF@-[K0di>r$Wja' );
define( 'SECURE_AUTH_SALT', '1jM=T-^b=~{QB/U5N29%GzfFKDTa@i3c6R;#}dh$;D#(o[FJJUIA^}CQ6HBJ] N^' );
define( 'LOGGED_IN_SALT',   'DA7UHKl-DB.y**l&^Yf8tHbCH.-?x3X4u{7-CB>;#V@PUhICi=/rdpwjP#iw)-Rv' );
define( 'NONCE_SALT',       'THd|Shju],A(qbY*~zcOP3K|#{%lQ 1`~,_{e9#~630ay}0^)yX{jdlEM3t-7_+-' );

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
