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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'bono@2018');

/** MySQL hostname */
define('DB_HOST', 'myaurora.cluster-cmx9lwjftula.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h(T8WOrH6]53?sy=IZ!%0d%e-wPQ)|t#FU&|1#}(J0V)0DH7-j53D?nmHwBVfoD4');
define('SECURE_AUTH_KEY',  '%YkQ&[R+0faf >5<>0}j|_emo#Yv+Mw+}QL)=!M1a1M{{8q+e;c~m:rMQnkB/$@1');
define('LOGGED_IN_KEY',    '6ciQg3F2,3Qjj_7fGjHDxMpVPsCKey)V&cQM8|mdE_%Y3`L:XXArxgiB+IG^90 H');
define('NONCE_KEY',        '|Y=HPwb!?h_w716juOc!{{u&Gl6FzG`-%~gLa CHz68{`5K7*xj6VsISWe-K T@G');
define('AUTH_SALT',        '91MX(Ij?z,3Cj=(:o*B83=#VEU->e;Sox_+ah-RB_Wu:!-!H{y<R-nVYuP(iUv,$');
define('SECURE_AUTH_SALT', 'Z7`rvs<KP|EmXg+UEYP^|v%~[(^nLXph<6]|ALLy-:v!1P{e|M -ujiP+Q!}/z=d');
define('LOGGED_IN_SALT',   'HF98Jv{+U}Y7APC}N9fA:H(I-D`[5UlEW2)iVy|H5-Ho?nSRm7:FhC1EVj)*S%Gu');
define('NONCE_SALT',       'Dwrds~;&QEj4@QmqjS1{Pyp/>FHvb7KH:O?q*-BG;~RQA8wi:UB(|/gi+J@bjeIn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
