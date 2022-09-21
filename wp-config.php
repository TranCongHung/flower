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
define( 'DB_NAME', 'flower' );

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
define( 'AUTH_KEY',         '=bP?~`uS@df9 maY}Au0ZD0MS9?3E3xc =Lz,q&Wxp@h{(ds8i~a,h%.9Y?4Bvem' );
define( 'SECURE_AUTH_KEY',  '~.JWeyFMKnoa}J~;2bP^x_MC,qe>p@7aVoax_|9k+2SV93Yn@Iaru_@(Ovez]I5R' );
define( 'LOGGED_IN_KEY',    'rlA$:A:{bc])~%}6$J&{VGP9cQ@-#]AU%9@c} 0H-5[z6E?XNlG>![/]}fD%B!Q5' );
define( 'NONCE_KEY',        '`$RP%%);JJ;q?WXN%^[&=|[]M:C_yP_LN4Dh$5B0gB!~n~5IS{#nk+d$L^Hl@f^>' );
define( 'AUTH_SALT',        'i!!ObW&.^R@vUyb ~ikVi|yNEy>azP$R!-b~nX7#LMK~V}ELWMPTq^t^3Boy}U6f' );
define( 'SECURE_AUTH_SALT', '29$yHTy=kK9ahTFE?,Fofy_1{YyiAX;je$P4*vSMoRdGYXeMhl~>W^ro=@e7={8S' );
define( 'LOGGED_IN_SALT',   '(P4)NqU?.;H2xMrk^puMHLl$si%8gYq9ICLYN6K|GcbI@IN{35h/nSwSOR^<tRRY' );
define( 'NONCE_SALT',       'T=nAPtCGtFN0~~kD9,Zkt$Z$Mzy__q1DbbS[bvZ[?XP>R`aekd-67($L:l%bvI[G' );

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
