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
define( 'DB_NAME', 'mytheme' );

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
define( 'AUTH_KEY',         'r<lc7]r}L@F5h_=k^DQ@N)kU5E%+>uOr2TC)Q,>u&eNWV6*s*Z$?Jg^fs+0bDC*,' );
define( 'SECURE_AUTH_KEY',  'z<V>sy1huKx;X ME{;dSZNH2J$(9<V:!25{3e_93,=NDs8KZw!JR_u@25* 5yZN?' );
define( 'LOGGED_IN_KEY',    'r_<;#>%Wg34W;sgph/.-cfL2H`*zbR.ZdoX6Gy)2V2Xeak?<U:Zu}ZAwPAZ]Jmc4' );
define( 'NONCE_KEY',        '-jpe-m+~ev_aLmc,%,pQ!%D]uRpvCGl>^S@J*IKn~~0fa~j8BV^O5ZgjBGHT/9Gl' );
define( 'AUTH_SALT',        '=|M^Pq9vJnL$}W|r1W:&j304b8Q8aS~7fv%{ee=GgF6QdVmwFF=j|jV.FaeJTjP=' );
define( 'SECURE_AUTH_SALT', 'eHy;0HkQzjK S,>c$o8fzG0;iMYoVYg3u-?C3oW/uj jK^N,;V^zZRLHi(7Co7ag' );
define( 'LOGGED_IN_SALT',   '5831Nn/@!aBSg:(&XAwFnkONBD0Xg6f/St5k8&w$emx&vii_vipmcD~=LU,~S[-8' );
define( 'NONCE_SALT',       '}i##J!p]/)VJ l%q_Jb u 6=r]zGVsh|d<8Hr*+GPsi:J,ky=_gGz@!fq2Z11kTw' );

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
