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
define('DB_NAME', 'shastacn_WPZH0');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');
define('FORCE_SSL_LOGIN',false);
define('FORCE_SSL_ADMIN',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '2f7ba3e13baeaca7bb29b795f5323f0953dd3dd4e7c1127b463cfd86b4f7d694');
define('SECURE_AUTH_KEY', '99f6f94c0b6aec334745ff8ae2e29011113ede2b4022dc066706dd8bcc4ead89');
define('LOGGED_IN_KEY', 'ac0b523253ea9d011560dc4d280ece38c7b04a2b3ee893510f13e8c66c6517ab');
define('NONCE_KEY', 'a69c7f66850c129206a493ad6b4ae1a64a44dcb9f4c687f7a3ec6d2d44a8b607');
define('AUTH_SALT', '0fae757dbef6c4994eb3ae6db3c8261a7ce2145e2cbd5b1863bd776339e56891');
define('SECURE_AUTH_SALT', 'a8f9ea1978855bee4970fa82cb43745a4446ca4b0da92bfe537abfd54dfde3d5');
define('LOGGED_IN_SALT', 'a8867e3b5618d2c345b415f44cde959e0d4c2f895967725f5204554bdd417066');
define('NONCE_SALT', '07743b2f01d05a497ccca75e98b3745a3e17856f1a425169e635cfbee0d0f8f3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_ZH0_';

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


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');