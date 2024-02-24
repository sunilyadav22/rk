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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ekelectrical' );

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
define( 'AUTH_KEY',         'ngbyM:8sXJ@V2#9HZ?|cN+5]r+t):<KKA)!&;Q@hbN`MpMHbbJgk{S:e#R{$<UKI' );
define( 'SECURE_AUTH_KEY',  'qko<fm^S7g1;hs1iMWJ%Af=LX(<bGb4Jqs@yQhD*k(MY,Yu,Q,:^<EE>6hz4#X_=' );
define( 'LOGGED_IN_KEY',    'sk7LeoA}^;,smdyCGwb&.i;}n8!m&$7EtCCM@]N#+)$n` Cqgee?VF3TV6nc/W=n' );
define( 'NONCE_KEY',        'guW+i@:$fOMyJz+yXI#mf$-Sv!l7_Zu14N0:4jdBYgTn<e;3#U=i-SBzb+}SO]=T' );
define( 'AUTH_SALT',        'vzWytX ED.I1A5j#WL]2MC34PB-1$oUeA^-1Y4$CJyTVZ0%C8/)_k<F3D6`I4;fE' );
define( 'SECURE_AUTH_SALT', 'ly~^X]Xs4(cT<DW6oLyJ>gIg0u.<J}pk!$G;~,eD A{<Tx_71VrCfV_D^r{#%n=G' );
define( 'LOGGED_IN_SALT',   't.bn6Em`b(yrC3b`ImONi9V^seS6slzB~U1``M(On,w8D/-`.}HvuK)%U%Dw*P[|' );
define( 'NONCE_SALT',       'ZI/PO?(It)@5}cjhT15mXbn~)OXYFXM rOrGxHqKbU1c!-&>f<0lJ$yiOao0v=~,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rk_';


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


