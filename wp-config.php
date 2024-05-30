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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itma2024_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '8Uqq!MBkhh9|-}lBzMXCw^lz2Goq2GCiZ.HB7`I?Rx ZcNmM9O]Kf9|Jzg|4Zt~V' );
define( 'SECURE_AUTH_KEY',  ',@*fNqRW(pr`t8EaBZ^c>GVk1EnvcFc;TswfZV4;<?U5 *!p/% qm~YS,JwI:VMO' );
define( 'LOGGED_IN_KEY',    '485au{CT).*MgDL8jW|;~W>8NI!6fqf}-`[ogD,-}?wruFI|xRt}Zp+nbjTigimj' );
define( 'NONCE_KEY',        '(J5<j`A8 u4GRO{;,eg02?79oTx#D]I;E8!Q6-ClmJ+dehWt`R(Xx$;H^b*~ >V0' );
define( 'AUTH_SALT',        'wmM)]a/cl>M|=0D]}7NPs>7>M)^o1X3<eJDZIcA-B3.:AXVO$t4.X]!l,>+T)e!4' );
define( 'SECURE_AUTH_SALT', 'Ksvf@2MQX5#p87Y@M+VZ^Syj(F*a@>.-VNt_)X2}i$S9SbIY=6Sad/5oIHtC4ETo' );
define( 'LOGGED_IN_SALT',   '1:RP/kv7;ah!?8y_`EF&n]$yc*hll@Yz](,9`:hxGGqnD>{m?K{ptn0Rj@`nn1[_' );
define( 'NONCE_SALT',       'kc.HL/<r]6W2kn1uW(-3G4QL{5xjGBFz~ 6rpN0Le_4:/pJzDH^!H`^E8@th5Rrc' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
