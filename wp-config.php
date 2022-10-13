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
define( 'DB_NAME', 'uvact_prod' );

/** MySQL database username */
define( 'DB_USER', 'uvact_prod' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Omoluwanimi9$12' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'YYXD:xaDoA@{G|a*?>Vph!_b%u9j#/bR u$Bcx&<B]m@/,N3?)q16)wK1n$h]@vX');
define('SECURE_AUTH_KEY',  'O*se%p5on~vEs[G^)6/|BIoji#|0ZCM9!3`>a}FO+Ox6H[|Y%:_PEiL&yUSgxTz');
define('LOGGED_IN_KEY',    'G.Z4`,RR+9{_qU7XG8QUo77n0M,6?|{MEke)7?}/,t|Z/$7B-df+}d,oz-u#7!+6');
define('NONCE_KEY',        'FOvGJ8MAp46j,rvj#HB-yrR5^X6l_`@i0FzTs@~`zTP+YAT<q[Asn/beocE8,[&$');
define('AUTH_SALT',        'jKWO;!CAh<_P+-X73G^+_#3H/{6nP/R}u*RW+8@bg,yG^-kRRLE9%gWO6U$$:S!r');
define('SECURE_AUTH_SALT', 'B7^G2/KjU5%Z2`0l}}?tnwK]>[Z6x.s6YbxM.W<E-nccM)A}t6iTFF^s[~)?X9 w');
define('LOGGED_IN_SALT',   '-St=6_IZ*Fo<+v#~1pPNlFi,2>c^y&0,Ch2bE!w6TKcw4a.f;X]$K{TfpO`GpX+{');
define('NONCE_SALT',       'o_Y@eAnSG|%w-Ds/{y!*PeJEf:lkMY:()^$.W|l^fxX%l04<R e2oZ?|Y[qqo3dj');
define('FS_METHOD', 'direct');

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
