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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q(0cxE^CGAvQ]5C v6(g @hxfo+&U8XrrHQt:_fq;[zfF!;:L,N_!IV6%Un0JW?>' );
define( 'SECURE_AUTH_KEY',  'UP~KfI*GmY3>nmrn*6$TTJ0y~hF8v%=]pwR{uh:&%bWyv7bQ1c]&`K0<QJSd-v3Y' );
define( 'LOGGED_IN_KEY',    '+Ab/5bpTsBa-b=jGCphh>Ge3 rCs?FdgNvPa8Nb8L&ed1Y5-{c_,;pLO($n~iHY6' );
define( 'NONCE_KEY',        'Ms/q<!46,4!1iwpF%bWec49+RWojD!!vrUgcn3VE_-<MU8#{&XEcx*M=4-#<(~W9' );
define( 'AUTH_SALT',        '%*.nKW4iTc*1mwrWLweZPqRnslt{l$Y )q+;*}Zmm|c$(hIU%G!B5fKEbqR{|gZp' );
define( 'SECURE_AUTH_SALT', '[lj*_BaKOPkCGv,8X[@T}[tXcE*_%8OJU<GNmsA3N&KSxe-5iW7,$yZU5,78@98b' );
define( 'LOGGED_IN_SALT',   ';h.|@~9Be3avlJ{.KU2+S]Z7>wU~>)m?Tz1][tNSA-[wuP^CdC,/V4s>F,M8)}6j' );
define( 'NONCE_SALT',       'C<dQARJ >_[E2#*cCtNxz%3>^AC+83eMfEEzi1Fe<>21wwz&n!]WsRYZAM%O2sNk' );

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
