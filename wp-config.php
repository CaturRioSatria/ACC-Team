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
define('DB_NAME', 'db_ptjayasampurna');

/** MySQL database username */
define('DB_USER', 'userku');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}i8+?|msP7OfP$0oU1CCNS1kVIT%d,>h`9wsAej!f)p98:uk#p&fUaJpcUg8LQw%');
define('SECURE_AUTH_KEY',  'Qv$R8z)j/7Cvc/dj;(`n5vY|lO:T9jth{wjZ^a#2ym`D~A;a(I{M{r8b.?oL4Zb%');
define('LOGGED_IN_KEY',    '.[7||+03{_R0Yb7&arrz=L;Q%js}2ik-NF@HaE4lj%tD}B0SdKCVN%a2AACj+]MH');
define('NONCE_KEY',        ',dRil9mX^0|sm(n<+n9;0=(mMcBy|*!>^P5p[:AnA(Y+x%#TUi7nxG?,2].sBs50');
define('AUTH_SALT',        'R0<!KO9&({TD6e&e,9_[tA8Yd,/!BNJfHB[YU?1PW9zyJq!&|J.gguC?]#|M)p#)');
define('SECURE_AUTH_SALT', 't(R~=Krh,/NlGW?!`hMMhSS![Wzuft kj7dm4b5drvjAF0=uNB+c(xs6Z&y(5u^d');
define('LOGGED_IN_SALT',   '}sw`uiN^Q^P8yBgh-d<_nh5@sUFpzF9K+n+n!7rg%,nFD>#P15+2LM Gbe7-Cf*_');
define('NONCE_SALT',       'WB6V;z~LINH)n{v{jk&[w X|#/:h1`:;]mvo DQgO7sT [egHd_PJ;L!{t=Bg:AW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
