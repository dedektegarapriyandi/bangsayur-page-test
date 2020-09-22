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
define( 'DB_NAME', 'bang-sayur' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l+$rzKSCh?nj[,=5h;rLDh Wz*,*xVJS_Ahv.BLk)-c}7$1,@QnGj|xcV+s6,;`L' );
define( 'SECURE_AUTH_KEY',  '==(a_5-vqG4_U|Z:DD{05rAi6P]4=E*g&j{!DVlszT@bL?=uoT~Ik*@/4y^5s.s=' );
define( 'LOGGED_IN_KEY',    'Vc,r~v}RAeZOZ>?xB9*c:^Y9hS<PK0IAG7q(5L34B>S5]bSu|9*LQ#+XagFqY-W0' );
define( 'NONCE_KEY',        '?XEHHu,vCvyGQ=wN,V,<v=muYj`0%(=d#hqsOk*Qp~~.Bv4<fvOQ]Z8~u=m1i{go' );
define( 'AUTH_SALT',        'VU>.uS7|Cp0tG8CH+zCc/:T0u{2{B5iv*+UDEuLbb^-c{Y_dmHx>jg)KbL~gpG&c' );
define( 'SECURE_AUTH_SALT', 'odkAJmkzfH%?J9vA%6N)iojAvZf|c]4}K:!nuP$<n!Jum_GJ$w3_WpM&w^%l&_PY' );
define( 'LOGGED_IN_SALT',   '6zs{&8&@rd^yu8&.,<FMI?|*K~1V>u.wMbI:GIh}&F41~<q^9;,/(BqFp?>{sMmD' );
define( 'NONCE_SALT',       'GLS>[A?B;.-TYI6}d|^6V$L4-Gkq8ZSDUeHZC._Rwh*l=U97Vy0.!zy*VddHjrT%' );

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
