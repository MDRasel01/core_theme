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
define( 'DB_NAME', 'core_theme_dev' );

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
define( 'AUTH_KEY',         'rd$^O@;/hq[X`;J{kutCPO);g)*gJWG3/{lyp7JKX0 8-[]Rd:DNN+r((SpeT4a=' );
define( 'SECURE_AUTH_KEY',  'VLWBv9bwqVCLM4|P>50WJ}?d.S+g8iZ{=GL)AzexK..c(tzcX2@@6[$:cc>p4_3`' );
define( 'LOGGED_IN_KEY',    'hJu W>FYvhXkX!EN9^HUcNS!SyNz`$Oq55LGX6wxoL;,icxi,=mbKzQcj!0pDBrm' );
define( 'NONCE_KEY',        '8FKzyT~SG~]F}ND*y|6q)}@vj&&C-}1.{rrkakav3(0;.7$bQ9..6r{G#2{<OV]8' );
define( 'AUTH_SALT',        '.ledr7_V[A/+Y_9!E#zY&BP=VH6XdLjzq1b2E8Ay?<,V)$Xc}EpCFuDq@<})biKH' );
define( 'SECURE_AUTH_SALT', '^F?MY$t K/TTmG}]&JI&*0myC@$=MnzS|^j~i$;o(z;;byddY6%?DNVow2r3Xl?4' );
define( 'LOGGED_IN_SALT',   'o.|[*s~cUz#fOR%0s`i+0ij}0Dv_)lB>Ou8P-p7zP/&BpuM^F7,X;NP3]Tqo<R#}' );
define( 'NONCE_SALT',       'e[#2)|/h> 6K.8n8h;L0~I;|LUKKItdQh9`@}]T#L-bV1oQK&6(Y<Oz!,V0kYy&~' );

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
