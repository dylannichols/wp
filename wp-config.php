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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$_I?4Pft>$ . ^&gR9xL5]MFYaoOs:|E=1E] rbBbXh5r^#AyFF@~+:ab5uO3H F');
define('SECURE_AUTH_KEY',  '6;YPpwq_AA~PXogXJbmDAS#zJc+wGF1h.f#>>mh?Cce`jW)|H^=@UY)10;2*y+y1');
define('LOGGED_IN_KEY',    'I/~NPl/lArs8]Gl1uYhfvV@N%tC8~@l6-ErkPcXIBVz].lu.Z^]._N(dC}@{Mi`e');
define('NONCE_KEY',        'I(2:,zK7/vJbjU]S7H4/m/2Zpo:k<aetnD>rFBJO9mL.iQ2Fsfl<:z]HDMR{_!45');
define('AUTH_SALT',        '3JW;T,L2?}[W@Q[#u`D|WkA85^eRy0{KIA$KoXjgAcl[$Q|m>{eq&:Ps8YEB[lI`');
define('SECURE_AUTH_SALT', '5Ld/y<1|Gv5gb}F=jF1sS~]Fa<`KqXZ_{:(-<Bw=@/;&{nkN-e4TQg=XVa>2xo[x');
define('LOGGED_IN_SALT',   '6[SL;xi2`l=]y@e_6PRLmMC8pX?h!GFX-@`Wg<*YP&tz=e1}y|[udT!tHM2<u#u0');
define('NONCE_SALT',       ']R&bKOQX66d Uen_-TSXEw$Ic9typfKOI|e--kDcUfmNNqx+%:(F(fl&NRHN^-C,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
