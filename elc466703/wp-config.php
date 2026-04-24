<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elc466703_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cws2P9lc*Oln+$}yDT6??;c8;v883IZ}d:7rNiG>Jz8?I#{A__?<>8B+`O&H#l?]' );
define( 'SECURE_AUTH_KEY',  'uT:)?s(h2e8=wDADb.JxX&{uE0+|$=mwpQQ[7yvxPs!gO9gGGRIa8F=U=f8j H^Q' );
define( 'LOGGED_IN_KEY',    'GPu)}T|[zS{>|c7eBvElIerYVyGS1E>9Zr1Oy[8afdAKmDO;G;)VnDJ-dGA&yH]Q' );
define( 'NONCE_KEY',        'NPN?g`i(#o=(c(>,[,Imk}-(.A,G?<5hh0&XFw[6r{RrJeC9wU#uvf8`Ur^_Nb6|' );
define( 'AUTH_SALT',        '1xtpKNsEYt,~q-9 BBW[JprAWuC|3[LS7v4P}dio#T5{r@K>&wW@yx}AzBh;JIU(' );
define( 'SECURE_AUTH_SALT', ',|(waD3;-DcoB$LfgP^>s#(O*7;T387<qg||)?R;yeV}/orM:$D{3vJY[U>u>< m' );
define( 'LOGGED_IN_SALT',   '7VWph:@^ WirBTn,R#W+OiTkw^;vCgGvsBFLv6AX6Luj$b60g:~)V+VVR~%$& ?3' );
define( 'NONCE_SALT',       's(,3[!S^Y?_??>,^uIg;c}Y5e2K{I&KL/ocCj6`!mE`T:]F$QwK<K ^Nu*O.*AD_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'elc466703_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
