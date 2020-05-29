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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'villaluz_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'villaluz_editor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C&}2&0v8w8X9' );

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
define( 'AUTH_KEY',         '3d&a><Q/{ju8r8g7*n#!y>t~{/y%AJfT!^8H6#oi9BCyLM4k8G#2@R6.7;bSm(vC' );
define( 'SECURE_AUTH_KEY',  '(0Hm{*D1[0 <oy/}!Rnq,SPw9U|(_=f3,HpJVHH6(/~3Y+<1IJ_3YV8M|eg1`X`E' );
define( 'LOGGED_IN_KEY',    'jP`>,?_K?RAO>R7^6x)KT.~:3j*Dl!Y*/H$J?b=_QhEqQ;i6aDLA#ttB?liJdu+(' );
define( 'NONCE_KEY',        '2IbPOd-JcR %s2^%S(<_`$e=Ia>Kfd%L3dv*&8olhiEfe4/Bl>Ma_GhN@LDt=(1(' );
define( 'AUTH_SALT',        '^ChKX)js}6gfqs3fS0r(}|k#|52<dtIR!9^jVV5@5muM9mLc:]Tv=E,R/igzMw8w' );
define( 'SECURE_AUTH_SALT', '#obaJ,>B/PmNc,.$_@|cb|d +@~cSV~-(^`J)!I|*0NI]eTf[Eyf|-^1,WOa(<&c' );
define( 'LOGGED_IN_SALT',   'W?OTuS|oX X_itBD;C*PiBkrs.jZm==HM5erk0DR{BGYOGh^*Q:pY&?brz?(W%g3' );
define( 'NONCE_SALT',       'Vb:)oT!9nX*$zH)^!|ASV {Th-h&1KUrmvsV;L]Y@rK?KoYl7C(9=I(rB$GLC[tG' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
