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
define('DB_NAME', 'leegardern');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '++Cl@@xrTY1!/n4@)ftvP>cPCoJahc3-qK`]M.P_u>1!avtGp7xA~<?Du<yTkt3l');
define('SECURE_AUTH_KEY',  'L4Gmt^aqcK+jd6I1c#!+%w4}7GEb1 &:Z1m|Q,N04@BGRqP] M^jug;[H>,q2nl7');
define('LOGGED_IN_KEY',    'Zxg~)/1:_]b{!jT{Z|]po8TZ1~Yr0ey>`zk-TTcUUi5Gq-rH4VQQ+(F}}*)Ng9Jl');
define('NONCE_KEY',        '=Wbc>{8P&oiwGA(V)#$AKsVzdQQybm2~tP0mu{)yN Ruw$rB+9=u[-r{U;{6~.gN');
define('AUTH_SALT',        '9j0W;c|m@IX ~$=QJD^6sYP||_N^*VdgnfOV|]G+70~mWQ%D,JXCTTxYRo&:<1I2');
define('SECURE_AUTH_SALT', 'Ij),I[<.8q#r5jiOe$hL_XN:/xMuME(aWUM^#eLcyCl(J%#cjGUm9CAqT:FH>#;w');
define('LOGGED_IN_SALT',   'N:r5:|M2$9`ZpIsONB(hV-Gb_RTTen$A.Qcj|()YN&na8ea=&+(=u;|GuZKwH<D1');
define('NONCE_SALT',       'utq4sUK7U8+WlVGE!E=bujhh{4y,eZXe&awA3(db)Vx@$0NC9efCX-}TEKJX^DQ1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
