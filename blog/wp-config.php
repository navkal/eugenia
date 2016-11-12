<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eugenial_wor3');

/** MySQL database username */
define('DB_USER', 'eugenial_wor3');

/** MySQL database password */
define('DB_PASSWORD', '7Iuk9dWe');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>>jbLTZh+#Ucp3<1|c#L*zi-wiO?k6n2q!quhJ+MU8+X>5%iwu-k=LGBAu`.$yeH');
define('SECURE_AUTH_KEY',  'lMOpZV5eFju|>-Qz-plhMm:Du#E9-i4b3%}-BVr SSX=R-eYB2I_-_g/gGQJrP?d');
define('LOGGED_IN_KEY',    '(^WX?0O4RN}LyN7(]2V|) Xcw/^QlX}LEE]dG|h^A`6uWU55pczc_(yK)/ZeED!#');
define('NONCE_KEY',        '-5bjOwfI7=bsp0?%PAOPGD0` {Xi`EDJ<Fn`sX8ZB14s:VX|4i`HNP]jy}~vY9Bu');
define('AUTH_SALT',        'o=?d1^2Wy~]va+08fK6 }PXzox>JpANje0[%vF@Pak(,$vYl-s-Xa#WKv-eG/H{;');
define('SECURE_AUTH_SALT', '>-[Eh5n ?3!+<j]XRH1qw5#uI@2yT?6xUM!S&n.O^)?[|-Ps~m }[Qi5w57KZ._t');
define('LOGGED_IN_SALT',   '@OUqz8E CLc>mjL:^][16}|`-PDLq%%gv*+2g[lZ2;JrBKc<=/K-jB)5.+|uAO0m');
define('NONCE_SALT',       'R4IMA3U `Albx Jb+}#;k]4Sq%+I4;S5^[|m p/H2(-O_)/R4C~%G0|q%GG2aWx-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iwq_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
