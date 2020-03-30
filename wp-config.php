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
define( 'DB_NAME', 'my_site' );

/** MySQL database username */
define( 'DB_USER', 'my_site_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abcd12345' );

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
define('AUTH_KEY',         '|/L|?#$ho--lCfp|+|DE~o5*HW-I[Lt1w7iP<Pz:T0[Oos|Ha XF/tIdxC|1rhok');
define('SECURE_AUTH_KEY',  ';S/3ro)^:.F*YR~#`|Lm!!TKNNgt>#pwU~-;aBG{]t%j%<=UlGk~<@9uofXjNwy9');
define('LOGGED_IN_KEY',    'IwTw|F8V._25T]Yz=!KiWyGak>!!9dC -{Sh+3MM+%t+-_]c1rf]r$)H/_:+~y&7');
define('NONCE_KEY',        '7(G-A[G/8QM[iK`]g6lHs>+7zHrh{sHpzQ99.gv#<iJeZq0bvBQzcP63B6(A{x#g');
define('AUTH_SALT',        'uT:Lcu>#@>0w^+$HAlD-?1ijV J~=kPcp9}SsmP7#8?kDQN|lks=n0eZUN]4?+DF');
define('SECURE_AUTH_SALT', 'fg2t#q}}Q|(s|KL{h#_CcH*K~l?P|(sYBPXDVwjL5tBnO/qd.3ELO^/>HZ]|6(VR');
define('LOGGED_IN_SALT',   'JK$6|C e,j2|_6x$91(4NDO)Qd cvQY/=r)R1>(#bk7)&-#&T duQV&4)dRse|u;');
define('NONCE_SALT',       'K;4#Q9DLhA}CxO#8~s]r6cW72#3UcX}&VpoZ~^:5^}4V$H-4G4?p<&QB#AN7w4ZU');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
