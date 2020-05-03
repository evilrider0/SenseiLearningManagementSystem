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
define('DB_NAME', 'auroratec');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '1hk9fKnF/Q_m&v}3_/w^#Z 3DIZ!]~Fh0w5U$6+TFpSC`ytb~m{@B:kiQV@Af;Yc');
define('SECURE_AUTH_KEY',  'Bj~5@kX{;BU_3DQas<>|<4$3o-Hp~k6Kv_+6)R>-vkKRCy@1e;G{^$$mD0fPKSfc');
define('LOGGED_IN_KEY',    '9brfW/cs8|jdIHjKv9bia{ToZEae(&6#eR~NW~:~0&H+]XN @ys[U@$7_qxeprpo');
define('NONCE_KEY',        'qCdth59Sqam=#R@{{rxn)$OA$tlqF<7>ofWxo]KjF>xBx6#]q&Q>M0kixv<k/yW5');
define('AUTH_SALT',        '[`2BONp1mi(]~lk(~(WJ[b`2DvbBmjo+A-dB5rU!lWV=X(73#]ew/(tR9*s+:|6_');
define('SECURE_AUTH_SALT', 'zBH*+GZ>QlY;otKPKmp^6rHr.Xn?K>n8aB>Cu_I1}w!)@,iX$&fWJDmQsTHM,xYV');
define('LOGGED_IN_SALT',   'tot=-# [tw3emmE`mKt_4gBMW^Ph>rzz!}iC0(bz53u8J#=^NDR~+|qOdAL!ZY,U');
define('NONCE_SALT',       'B:[!uPZ:^=a~^Yf@H0h5Se3LE0op5r_0Y$ 7BvQ{p5g^eIietn.S$59hW]dNy?*4');

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
