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
define('DB_NAME', 'uncasg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7kM[)U0.LCLsd`oR+L,tt5cK5|+&~-%{pU#wO]}}8}~#pGji >,43?bFvI_j3*W<');
define('SECURE_AUTH_KEY',  '7.//4k[yOR(94-VRQ7,CJCf7IXpraL(.AFXz6}yb?-3#jR|LtX2rymr-<x}o{asT');
define('LOGGED_IN_KEY',    '>SRS6vgp9h`}Twdi`d1Ws5UddGm4tfcA9yKsY:p1^ Zxih+ 3I(rG;|h<=a5_]6b');
define('NONCE_KEY',        'C%bCDRVVU|+PD+`[x$-[$tr,n4Kqv>`MP#=)*-]K#.nNL7 m4U|hz Uk;?Dcq{g}');
define('AUTH_SALT',        'lYqEdR4(>X7sB$O9x0 -G@[|K*,`+KZUHsEfY8+N8~LGj_[4!qatR2y.-GW0N}A/');
define('SECURE_AUTH_SALT', ']g<ny%+J.:&{9x2y}JK#r65Nc^2Z~fFDI%r-4n|4=l.N?vF.TG+m(^0deHH|JN0m');
define('LOGGED_IN_SALT',   'WU?BLawnI*}+LH,F#HWRCwF2/m<h_OLAHS7D :03*zV/TadL43+1d-b;[VJy<*%;');
define('NONCE_SALT',       'H8w1 3SL~,20N$CX|yKf`OyB.wO[]LqB6vWNz-ZptF;lR+lpW/rvezw0N?A(KZt;');

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
