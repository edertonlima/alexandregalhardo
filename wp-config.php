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
define('DB_NAME', 'edertton_wp4');

/** MySQL database username */
define('DB_USER', 'edertton_wp4');

/** MySQL database password */
define('DB_PASSWORD', 'WM6shQhLrL8y5F7Q');

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
define('AUTH_KEY',         '~t2`7RyT37(X=`0Gh{*QcolkxsMf>I|qYe.Q0mbqGe>|vK3!_3+@tus]!Uj[vWsp');
define('SECURE_AUTH_KEY',  'm,x@#Xtl3k/?WK@<qHcsu_`gUb{BIO4UZ(`m]cbJtt&(|{_UY&Udq@KT[QH^lm{+');
define('LOGGED_IN_KEY',    '-^X}G-+hER47-E8nTlnrE%@S.X0c6IVtc!sP}<jWMk|k/0=;zO+[^Ds]5Q?(j[H!');
define('NONCE_KEY',        'a-Qz)T#]+Ys1YVG?o2k!pX+QPI~gIO^tc{CRw:#=$|2^]2r_lJ?3-A!lO30--M>t');
define('AUTH_SALT',        ')v784rljG7I5V+tJ8lR&pB=L*4:HhkjqEAa3v`1||lCh N^9|xuE%n-P@9~3>7!8');
define('SECURE_AUTH_SALT', 'h p#fJV}+b2)s{2T:^g5*_g2Lca3nLm<QOt.3OntjII!r)J8X53f=i|[_`*?H4I<');
define('LOGGED_IN_SALT',   'D9I=e#2lU^c!(eizUS08KM@2~+,|cI^$ieP#;WCzn4y?LL+xG]67hkY3&?O=]3,t');
define('NONCE_SALT',       'e iBf|>HAsje#TlhoHAV$gQpX!0FGxU>9+46UWviocTla5C,)/9|<m$#]0or}{^*');

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
