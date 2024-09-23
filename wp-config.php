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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qm9:LnSri2;:SUN~glP1O6USDrT}2)Z00bHt51yz9q;Z+Zp=v*qf:SQe-@:BOq-@' );
define( 'SECURE_AUTH_KEY',   'XSG.*ls5o7 t}2hGoAUUVkQ]rTK~o5:s^~|#}TNg!AaH@tWy{m_(nr}C!iF[%cyE' );
define( 'LOGGED_IN_KEY',     'PBDp.)ntd@8A_<y+m[r!(8OH+;ovn_nFlKH|;Fav?G %whWuZcvozot?i|kKKWZX' );
define( 'NONCE_KEY',         '%@F%+g!Y1okw+vyq&Xxbok,,-)+u3)hM{3DGdvWhMfHH^#pgh./Jnfpvw9/z?DA@' );
define( 'AUTH_SALT',         '8-%>S*og,K>Kgm@fh-C.Jgar3`<fQa.<o`n=bayXIr5o~&VE;(an,C%o)n?J(edJ' );
define( 'SECURE_AUTH_SALT',  '_a(zPf?ptaFUC_^F~Ye+g|NFOEO}vn =&i837/vuLM{wpb2xhhU#YUS~MB%JbIX<' );
define( 'LOGGED_IN_SALT',    '2096^M.O_Z(eXQXqfn1s?NJMfQ}5O6Q>!cyG7 ,M@Oh1dqXHm~9_=-Ng8u`_?bRL' );
define( 'NONCE_SALT',        'N5rv$_{E8bo`Bb,#+50tuzqxTlvjP ;O,GX;.TBC.{&tWS*?y/f=jnY(FcM7< Z0' );
define( 'WP_CACHE_KEY_SALT', 'bomev+mDA , |LGP:tnF!h9X9nH/&:`VR$:iZ Rw08rG&vcjMNr`k1?l#@&=|jzU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
