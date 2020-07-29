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
define( 'DB_NAME', 'my-home-interior' );

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
define( 'AUTH_KEY',         '?FVvqQV)G[0=*[jb<sAOY.3)8R9>}Sy1m?h(cZ-%q=@Nu]].nCT,, 4t46IaD.{x' );
define( 'SECURE_AUTH_KEY',  '  0l^f;?uH``?v]7Aa++DyE{wYwSYp4c,5fuXvR8uH~+X{c884HV,_:p!i>XdTlQ' );
define( 'LOGGED_IN_KEY',    '5w:$RFa/komGl3W/Vz|7}bS7#3K)B,P;2#xbF;b&C^zlk(cDB}@n+6E&aS)P_}>d' );
define( 'NONCE_KEY',        '=Bw+s{vkQg@CblVCNgGS,;>BzI8pt(r~UnuZNORNz8T.Q/6.kPSCa!!)C0Yjg}RZ' );
define( 'AUTH_SALT',        '@1,WY*-}rmpI-AG1u-9%xY1h/yeLQL%2c;`N8FEVyz.$dY!/nGTyVVZwU<B[/4s{' );
define( 'SECURE_AUTH_SALT', 'S:wF2#7KnC;do)~Eb]^6$u)F.6;u|{1mCDn~Y|,>u>NzF.n#nG;kogBt5EXo!.Z%' );
define( 'LOGGED_IN_SALT',   '%=c5x(HSZDMUnl{t8wCV294~kR[uIJ*+HH~j?/~V3g<ao4DGBT99?6vo UHO3_Zz' );
define( 'NONCE_SALT',       'MyBPL-A,H6jF@h:.[/iV>L}b?XaOz]P)_dWn8?s9~Z{M9>QCZbE?d_L;& U(J(6o' );

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
