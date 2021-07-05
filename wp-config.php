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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S3Ij+7CV/kFMf/w5GUl8GSzZUmKwFVH2c13airpEev74wcka5PCz/fGfmmuizw+aQ8Ez5unvRqfWoEvTxFlpaw==');
define('SECURE_AUTH_KEY',  '01dABt2xtHrPidMT9p0xtTh+3/5o/pru6zhHp8FScxOsuZbaq6vc8cYVij57/qPCqL6XBJxV/NwiGOOYMSm6Rg==');
define('LOGGED_IN_KEY',    '6SQGyKgWUAcJUMpqo3x2A30pBQpzp8dPJBU9s7W0raXXlx/ZcNa4ct3jXVIXY2emPYyMUfCaxQFmPmpGoZViPQ==');
define('NONCE_KEY',        'TX1MZ0nnlfdNUeEfud0l/rotvwzLJ08IDxHVl1Ly8mFilRn/tDuDkZh1J/unmnAPuLy3gPbhq6yY1LW3Xs0XQw==');
define('AUTH_SALT',        '3+Z/+Xe07j2HOILHXpRmsj7y5DKDJyLpz2oVAwB1y2USz6yNTcXnUthBVC4UG2Nu0p1E8MXCQNFaotazrvrMRw==');
define('SECURE_AUTH_SALT', '0xAc8alHn8ymdDWxXROsRxGWlntrOKfD2968PLcDLwQeptt+tT1mT0s3bUqD02XxazAeRpzE5Xqeswo93/5DfQ==');
define('LOGGED_IN_SALT',   'purYzCPzaxEYOFiqD0DwrERBHKCIfS/pwKBVJkIOEX5MRp+lLD35VIWMqjafo77uSIsrxhfmldDuhbiYNWn30g==');
define('NONCE_SALT',       'RjmB1lbyXXcgfo5EwiAVulP7D6a7XY6i9RGVDmI37DgVUEjbkwFRJTXaTtKRc2Q3d2T2BOnJF5VfBrx323xcaA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
