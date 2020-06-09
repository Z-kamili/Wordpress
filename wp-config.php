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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ':H7F{`?A0do.w~V~PpMqhZnWh_``3~oeP)$aOgjlT|z5^o|HA(|[uCf 3[=AKd.4' );
define( 'SECURE_AUTH_KEY',  '>&JN>CX5*ir$W:G$z.2[ykxL :;Tp=F%N&5J(NxiEqXnx^DW<94B>rstZ^F:PkF[' );
define( 'LOGGED_IN_KEY',    '<j@pdV1L/X=h.*=1m.tZFj7i@)t,Y]>#Y:Wp+0TSLYb@nYsC}#|a>|UddS<c{PEM' );
define( 'NONCE_KEY',        'VY}88lDw<M@$x=19ppYz.;M{8[-M/[*nbXnH^90zIeXV>sKNUJwNl;HeIK:f3m>P' );
define( 'AUTH_SALT',        'gi@29F]JqJ{kISt9. n,(1v*{wrq_#`&SG=R=Gge.s={MSzS-s^kHGcH4K MLkKg' );
define( 'SECURE_AUTH_SALT', '@~jr=2WnI*chYxBG/]EbC^WP8tC<nIB}WnE5wHO~Lvws3U<t,RP{XaDl *FziMv*' );
define( 'LOGGED_IN_SALT',   'pTpvL5e7ih~7HNr&H O*<LQ5w[NQMy )2]4r#-9?yV!c?`1z)dn6qt?[4N@8lP~n' );
define( 'NONCE_SALT',       ':) LLr_cS*XKm}I#3aXi87:4i3#(~@t.@^t{k9[i9Qhkz;)b$==ov|x) KqGVf$O' );

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
