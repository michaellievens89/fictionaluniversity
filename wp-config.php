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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictionaluniversity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Schelenotter1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1]em!Se~w,nia;^.n?T;JcERMZ v?k@,:~Ww!h]mCJ,uJ`/wA-Wjzs>K.+@h&~!M' );
define( 'SECURE_AUTH_KEY',  'MHA%}NOM}K 1d:0iesaUJIyX_&?aNNydaa~lw7&a?rmA,;9!Zv*frb#.<=(+8365' );
define( 'LOGGED_IN_KEY',    '^8m||S*@Zhf?1SSYYY4Fr+|`p=HSd_.7*Bw/9+?h:3&J&Y?59]N31.<UL@;6)u=@' );
define( 'NONCE_KEY',        'BXTdfp,=WaYS[zi{]E1S2.egaNe8Pb((Kfc|.KXF[x$9;`aKIN2R;,_lh^3sz;g)' );
define( 'AUTH_SALT',        ';JHfr]K2c|]z)rCV!BM)]IQA&h_6|3IOdV)!,U72qQF)9nSmWzB)8*_9dDCd*i5k' );
define( 'SECURE_AUTH_SALT', 'pWOQ-JAVG%fyvvmvlKyEBp,e7Z) < (j<r8?8lmmE*,e)k4|zE8C;$L<UCD#JfcX' );
define( 'LOGGED_IN_SALT',   'SMGkui6Us@yP*Hn3jXC056P.*mAFoyW&+-,Mxm6`Y[%x1Ua3OA|gXu<{STca_O_@' );
define( 'NONCE_SALT',       '$P[>zqJtR/(BG7,}#jY6wa{.@?N[sd{2Hk<f5 {OIDj7HpFK27B-z&6x$,4S:8zG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
