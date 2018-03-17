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
define('DB_NAME', 'wp_luigi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '`Sd-,7PQDgGBB~ojm561;P$`4EM*T)q1Blg~9o>y1upk9.s9H.2Ep~t7R`ZYFrLY');
define('SECURE_AUTH_KEY',  '`nc5^~G<qEYE~t&^ijZcjD#d(}dHIYItw5jo-(No3&zihGNh7&[i)G#m+ov?>RdO');
define('LOGGED_IN_KEY',    '%~YC_HmylG6ffl;=:kM1#L2pm}V];_1#WB1t4AmdjJ:/o:& ,Ii4M5k()yp$Hql3');
define('NONCE_KEY',        'rYv`9(@s[KnEIOjpTi6+g~,-m9/&c#zOocBXJ^+WNEqFnSVfQyA!GJ^[jCe_sfO)');
define('AUTH_SALT',        'jGg,*F95WtY1/=rEcgT0SW,{dsl3<{HdyHg%+~@F<p.4^h#E]E(S:SCHU1m6Ddcw');
define('SECURE_AUTH_SALT', 'dQU!aU 6Q<)OQEq`}!ZD&1o:MI@u[Xa2mDP+@pB#::lbcOc|_qW$}U(v q -aD.B');
define('LOGGED_IN_SALT',   '!aJTG}K~ggCePk`lCU_ISKd9uL.8o[3iz8z=MwBZNV.ZJ!(>#!gOV-HC /p~2[^1');
define('NONCE_SALT',       'ev(G>HyTxh5<pF[nB#601w@%_D;MgTjScHZdZu;f1zMvHdp`|w|OU@:_=R_, !Z,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_luigi_';

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
