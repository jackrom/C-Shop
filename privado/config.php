<?php
//date_default_timezone_set(date_default_timezone_get());
// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// Application directories
define('PRESENTACION_DIR', SITE_ROOT . '/presentacion/');
define('NEGOCIOS_DIR', SITE_ROOT . '/negocios/');

// Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/lib/smarty/');
define('TEMPLATE_DIR', PRESENTACION_DIR . 'templates');
define('COMPILE_DIR', PRESENTACION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/privado/configs');

// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// The error types to be reported
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'jcarlosreyesc@juassi.com');
define('SENDMAIL_FROM', 'jcarlosreyesc@juassi.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', 'c:\\juassi\\errors_log.txt'); // Windows
// define('LOG_ERRORS_FILE', '/home/username/tshirtshop/errors.log'); // Linux
/* Generic error message to be displayed instead of debug info
 (when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Juassi Error!</h1>');

// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_HOST', 'localhost'); // database host
define('DB_USER', 'adventistas'); // username
define('DB_PASS', '6662115JcRc'); // password
define('DB_NAME', 'tienda'); // database name
define('PDO_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);
/*
// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_HOST', 'db438466692.db.1and1.com'); // database host
define('DB_USER', 'dbo438466692'); // username
define('DB_PASS', '6662115JcRc'); // password
define('DB_NAME', 'db438466692'); // database name
define('PDO_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);
*/
// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');
/* Name of the virtual directory the site runs in, for example:
 '/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/
'/' if the site runs at http://www.example.com/ */
define('VIRTUAL_LOCATION', '/tienda/');
// Configure product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH', 150);
define('PRODUCTS_PER_PAGE', 4);



/* Minimum word length for searches; this constant must be kept in sync
 with the ft_min_word_len MySQL variable */
define('FT_MIN_WORD_LEN', 4);



// PayPal configuration
define('PAYPAL_URL', 'https://www.paypal.com/xclick/business=jackrom@live.com');
define('PAYPAL_CURRENCY_CODE', 'USD');
define('PAYPAL_RETURN_URL', 'http://www.juassi.com');
define('PAYPAL_CANCEL_RETURN_URL', 'http://www.juassi.com');

// We enable and enforce SSL when this is set to anything else than 'no'
define('USE_SSL', 'no');

// Administrator login information
define('ADMIN_USERNAME', 'jackrom');
define('ADMIN_PASSWORD', '6662115JcRc');

// Shopping cart item types
define('GET_CART_PRODUCTS', 1);
define('GET_CART_SAVED_PRODUCTS', 2);

// Cart actions
define('ADD_PRODUCT', 1);
define('REMOVE_PRODUCT', 2);
define('UPDATE_PRODUCTS_QUANTITIES', 3);
define('SAVE_PRODUCT_FOR_LATER', 4);
define('MOVE_PRODUCT_TO_CART', 5);

// Random value used for hashing
define('HASH_PREFIX', 'K1-');

// Constant definitions for order handling related messages
define('ADMIN_EMAIL', 'jcarlosreyesc@juassi.com');
define('CUSTOMER_SERVICE_EMAIL', 'jcarlosreyesc@juassi.com');
define('ORDER_PROCESSOR_EMAIL', 'jcarlosreyesc@juassi.com');
define('SUPPLIER_EMAIL', 'jcarlosreyesc@juassi.com');

// Store name
define('STORE_NAME', 'Juassi Shop');

// Constant definitions for authorize.net
define('AUTHORIZE_NET_URL', 'https://test.authorize.net/gateway/transact.dll');
define('AUTHORIZE_NET_LOGIN_ID', '[Your Login ID]');
define('AUTHORIZE_NET_TRANSACTION_KEY', '[Your Transaction Key]');
define('AUTHORIZE_NET_TEST_REQUEST', 'FALSE');

?>

