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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'mUapmOR3u7GK/Fw0k7JRQBRC/xtV1c3ft3ssQi/HyjkP5BYkjlFI48oQY0lRDSH9ifnT3HXwzqCjWwxQCg1Xyg==');
define('SECURE_AUTH_KEY',  'mGY37Tl1HlP7vCLLOXaGwzXzasy9Ui3o8oS8rpfeYwS+sFNtSbct6P+pacRuTCAPLr2KbFljO6za+17RTis0kQ==');
define('LOGGED_IN_KEY',    'M0xl0wVnlqtGW4vK2/CJyD4Y3L2mAf8h9fz8n8q5OaNt4ErIqz602GNvyPRaU88PDS3snTytiIpzqPDyDw4XpA==');
define('NONCE_KEY',        'u5myC1750TLoPvFzffBK/mHLmyy0ceQFxeywaGxbmd0we12pT4AgrNOscSdnsr87F2HhaRzl3Jm6/NBpBEkDmA==');
define('AUTH_SALT',        '4ZfKZ8Mg8ONuDlJQ6gohw8hIqlhBII4oZQndTlANQr+euvCdk1pkQjsF4NvcCKtZts+Sc8tJfgMLmskhrRJyeg==');
define('SECURE_AUTH_SALT', 'RqOEA/anZx12Tu5YxvwGWFaRUHmwUGs+NRGvOLnis7rniiIZlZj7q+uluvpf2PEoj513g+euEB8U3KpjmqBhlQ==');
define('LOGGED_IN_SALT',   'V/+b45hGJiZqgNo6j+QpJgFAOs9GeBl6KwTybNbw1U3w869Kbiwav75aya1/CRu9dztw9SwmURch0vxBmng0EQ==');
define('NONCE_SALT',       '1RBO4wvPYyeG7/zIKPqNyrmZywF5A62jA4BPCmniqFO+lWN0r5Wzsdr9850da8mU6FnKFjmv+AxcxQAH6wECIw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
