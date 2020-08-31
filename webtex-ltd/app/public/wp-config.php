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
define('AUTH_KEY',         '0eKHLPuBbQx6BUlCgJhefFMWgEX4V+jPJD1W83bmUSMZJVBCdvUeJa6tJjdrrrtTQUlZ7zDJGzcXvfhjN1aW4Q==');
define('SECURE_AUTH_KEY',  'ibmkBPEWbrRHVo8JT1yutuFOgE0y66zNTRkU86eOgGsiLhFo7Zj5Xgxu18OgI3sD14aTOV0EkrC833xQTtwMOw==');
define('LOGGED_IN_KEY',    'YyX0ZJDK6x3I/l+45NnCzb3Vjooy7WFuhHUKblY9E729YPUCD562+uQp9M1vsDeMPh8z9KnWkqI5ylKGp3hk5g==');
define('NONCE_KEY',        'zPGWyTtX8/hbdFY3qbT6zYNcM5eMzGkUvYeEMF4YnGEJqV7F3XNu31eO20vn0bG4NYji984jHl6xsfnRrdPcVA==');
define('AUTH_SALT',        '7O8CRI/YA63mvispQ6Z0eEbiQUg90jywWELIvfQg65X/XIDiLlpAluUpTnQOpCWplmJ53nBCZejhn7hhuZjoUQ==');
define('SECURE_AUTH_SALT', 'JoSNZ8ZBJBqFL6UQQxMYfJ+DUUd/V5KP8otPV2ltjYQvda/TKc9NR1RfeCNsIaNSIshamd8EaViO579odnOH3A==');
define('LOGGED_IN_SALT',   '7ZZijHQ+QudcJQnfGn8PRhA8j4vZGyGpJwVMKAYW4IYOaU4ZQYFyvBUi4pmXssPQ/e1O78ljbeTolnO5DerhYw==');
define('NONCE_SALT',       '7DoP3rf1oFxFC2e+QZ3ro+oscPMnUEkl2Lgbh8bTCMaZFHHMraq14PBSaP8AVW0NcbZFL3CdR0LTD2G77+L9OA==');

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
