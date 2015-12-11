<?php
define('DB_NAME',       'wordpress');
define('DB_USER',       'root');
define('DB_PASSWORD',   'root');
define('DB_HOST',       'db:3306');
define('DB_CHARSET',    'utf8');
define('DB_COLLATE',    '');

define('AUTH_KEY',         'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('SECURE_AUTH_KEY',  'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('LOGGED_IN_KEY',    'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('NONCE_KEY',        'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('AUTH_SALT',        'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('SECURE_AUTH_SALT', 'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('LOGGED_IN_SALT',   'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');
define('NONCE_SALT',       'd28d4325-5c1b-4600-87b7-80a1bac0a6b5');

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
?>
