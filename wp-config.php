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
define('DB_NAME', 'netplace_paz');

/** MySQL database username */
define('DB_USER', 'netplace_paz');

/** MySQL database password */
define('DB_PASSWORD', 'vB7TIj7lZ');

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
define('AUTH_KEY',         '9$rynip<jy2>96)*]7gi*p,BKtwPKK,R*KSqJOGc^l4ufu6<*m=42w|#-u.3GWuv');
define('SECURE_AUTH_KEY',  'Rq5!w$3~(.#J@Da,1^nv#LTQgDjw,Cd0uDq7q(GM5$f5n87l#]m+vg_b]owcN9ay');
define('LOGGED_IN_KEY',    'aeMYE(4g0[gFL:lgNX{sf)+_cf1YS2tT)*,,Ewt#hipA!RuudY(KaQQrwT9|@q~Y');
define('NONCE_KEY',        '!LG|-Fc ]T*`3L|o1EdKJ0>6 jkj_n(soe6`F5],.^^,Qry;.SkcRLX-zAOu+aum');
define('AUTH_SALT',        '|09G8=TiUBoCoq8@JOI0UFw<kcoaM`-1mfLBwUX5a]$E{()+0~}R)p7AIj:g=i{X');
define('SECURE_AUTH_SALT', 'y~jTJTOj+l@;GN<^`?V2MQpudvoEP-;`PqrA^f&C3(Z}#<:DQ#@3NJC(y1EBykPf');
define('LOGGED_IN_SALT',   'D~LlA*@;x.~C_aQg?A9}:JR*oS3~fNV> [Lfq2=mF]Jn;LvMXcsJ294E&o[g1{:C');
define('NONCE_SALT',       'c>pzm2qvva#%x?oqfK`_BSQ;FaOZ&^GH|44`FRo:A)F41~a#qoY5eX#jC%&V6)Z$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'paz_';

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
