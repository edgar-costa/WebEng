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
define('DB_NAME', 'we_onePage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?q>c@6jFk{*mlH#wN)DgPQM_Mn+Jw .+P`t831;ix03KB&Y#!f*E}qMd[|`xPrz8');
define('SECURE_AUTH_KEY',  '@<X%h=q xNz4y=_+}MnEzoWC,iEX&6(Y6`$ZdVW{;?;Mc_cesoYVup].V0V5I@9Y');
define('LOGGED_IN_KEY',    'Z3ZPECRGofN}2Ko:{y{@?dZ_&PRcl?=Pmvo`WP`UZkg|?1d=M(%:23ZL1X.tPrv{');
define('NONCE_KEY',        'daaC1T%+b!m?1XDERg?1{ATg_0MHixO0!7L|jD6TbgV_Lg4<d?p_5hlEyvhV~A@L');
define('AUTH_SALT',        '#b[jV3e1Jc*F5xik kJ}nHj@9wbx{M1==Rx+ar)AVBHL%E89>,4`)MYU[$81%*@C');
define('SECURE_AUTH_SALT', '{x_oY<<$)EWS.liccHa[S!(b5WkQ)b+}rHa`PVMS,HU.uL$Jq($!{6UdQcZ/(i;6');
define('LOGGED_IN_SALT',   'uJqp ~FwAZ86GSF>8w;l8Y[bez.tCf[Xo|yVuk~OQn fOgWpaS1f*zA]QL.d)F;q');
define('NONCE_SALT',       '>,=[pr,X M},{EJ3tdp..?n%[X U _&#sm9id@Zyc|:(+r{j{]^K!;:/B _z,7WU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'we_';

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
