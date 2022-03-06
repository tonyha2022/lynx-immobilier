<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lynx_immobi_503c' );

/** Database username */
define( 'DB_USER', 'lynximmobi503c' );

/** Database password */
define( 'DB_PASSWORD', 'ca37d3447154a7d5' );

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
define( 'AUTH_KEY',         'p=(QLwGbAXF!C$^],fd!d7HS[_E_07O!U?ONJ6sFIe0g4|bC{@NF/Bg6tIwd& nm' );
define( 'SECURE_AUTH_KEY',  '9_@7Kj$?Z3F^>x}e8.r|-EasoW|7gGq1HlXiRv~t&scVFX}5<JfeJb{aj^d/!~62' );
define( 'LOGGED_IN_KEY',    '_8`pK+Nf.v5U%ps>i=xC2;;FcXQS^!IISQy7y SsXpw7))@lI1bX{3>=CIAnO{=^' );
define( 'NONCE_KEY',        'D&(6X3<KC^s[Gk0Dxij2Rs)5Td&6GxB%E(h!msGKU!f v{JXwk& =;Mha8(Rm,+V' );
define( 'AUTH_SALT',        '6z{B=229Lg#&7!211|!CS>}Ox!O*KI~~9cwa>^gcB):@$okCvZ%lv~f4r/3u(zGf' );
define( 'SECURE_AUTH_SALT', 'g/{B%;?>ob=(Kjg><G)?xCHWo,A[3;ad&;FstUMu_F+OEzsw:vA7]7TgR/@/w3|!' );
define( 'LOGGED_IN_SALT',   ':dV%o7@,?87QunT$k~n/h(eYpr.j^4&,5tfiN+%GmtrlslwD=[s@W2y[TbEW{QNo' );
define( 'NONCE_SALT',       '{e$P+DYkwvFl4G`uRGk5B(AkJj!MqwWs`pj+pHX|}&ni>QiNfQDG<u,OUmig~.W ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
