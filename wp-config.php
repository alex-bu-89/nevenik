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
define('DB_NAME', 'kupinevenik');

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
define('AUTH_KEY',         '|7jt$,&K9l:q$6#(JT:qr.JUmqZ.l.9(!P$`GE}4f$2ZCp.P/lD`gu0,!SVaE~,d');
define('SECURE_AUTH_KEY',  ':fSyT;3mEX1q1B_RVtw<aq8qLP+q$hHP1o0=fyLK>UZWznNWs5V:sEE|A,h#@#rE');
define('LOGGED_IN_KEY',    '_mC,K+[LdnpqauQp8],)6cxd(<?[*+)%|*k&oY0zsqlHd%8Q_uK+;26CR/3Y!f(M');
define('NONCE_KEY',        'Xi5 .`va(V,KZ4n&W-V/7FX,C.qdV:6zsl*$A5mnABfGUHJ.<s:e@<Bq(3)xlU|U');
define('AUTH_SALT',        '{C7?$h^<!di3]:mIDZK0*hLPUD3fx00;8~@U*X1D,eKtFFK]$:D^3w)QKlC{~ocg');
define('SECURE_AUTH_SALT', '+PUnaEBSV,|:0d~s}+~W:ljdVpPMfv)#_s/u+}aB:%W-:82&^SB:V3m8hSwwF$.:');
define('LOGGED_IN_SALT',   'DL_PicYmb_9$3.v?RBQgB Eh%5/&qmC>J[BN3$<&P)jU>OOBn>n7RL#Jt~dv.^Z1');
define('NONCE_SALT',       'Q[X^:.|0L;N]!u5T[v??sbk.y6:r`hVg&ees!7I!X}{,Y7^OASeKLtCE[=&LTxCt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kupinevenik_';

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
