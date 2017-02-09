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
define('DB_NAME', 'wp-vi-2-03');

/** MySQL database username */
define('DB_USER', 'wp-vi-2-03');

/** MySQL database password */
define('DB_PASSWORD', '345@@');

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
define('AUTH_KEY',         'mh-@zRj^9C#diQyP@s]_A]zu2n$m=AN:LJ8#TV@Lir0PFjyZ`nGn<8KPP&^k v=l');
define('SECURE_AUTH_KEY',  'o]`D2G6[q;@9M|G3e,R3|;+Wc%h:U!W-(&doP@OZaf/:nbH*-6_:yA5{8SPUF,Zr');
define('LOGGED_IN_KEY',    '@%d-l PKj<]zBpIh+_G0wpg*pK<P(J,;:.KSn-dQ*>{6I|v^hvC]^dA=CgQEMY2#');
define('NONCE_KEY',        '``X{BGAGjC6xd^=h;;j1J+/U1fVzpzG/rgeOA9f~,ZAaMC sZ4rZ5.bAw!_vDG{w');
define('AUTH_SALT',        'Q@ >x RN5e-nIv>?d7l*t.t434pPS{A|cXDqfO]yU#g{S*t8 ]b^yw_sGL7nz`N0');
define('SECURE_AUTH_SALT', '7{<3ofr:O<1HanrGnzQ(sVAe$.g&h@$U)Ov;s-Ht{Q7As}6U$!uO*@6D3-Ltc^N@');
define('LOGGED_IN_SALT',   'J~:gX$6lL?.caw)+zS-T+z`]RFAmbsuG_SU`{faL#}NV9P 6kg;}DZvl!m|!n@+K');
define('NONCE_SALT',       ';(1E%o#Db()&2P`LONAhRdwI7c(vX}*6^)r*mn&wN@HLDbN#,gvfb8+V.>CD7%+@');

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
