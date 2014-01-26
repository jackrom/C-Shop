<?php
// Activate session
session_start();

// Start output buffer
ob_start();

// Include utility files
require_once 'privado/config.php';
require_once NEGOCIOS_DIR . 'error_handler.php';

// Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTACION_DIR . 'application.php';
require_once PRESENTACION_DIR . 'link.php';

// Load the database handler
require_once NEGOCIOS_DIR . 'database_handler.php';

// Load Business Tier
require_once NEGOCIOS_DIR . 'catalog.php';
require_once NEGOCIOS_DIR . 'shopping_cart.php';
require_once NEGOCIOS_DIR . 'orders.php';
require_once NEGOCIOS_DIR . 'symmetric_crypt.php';
require_once NEGOCIOS_DIR . 'secure_card.php';
require_once NEGOCIOS_DIR . 'customer.php';
require_once NEGOCIOS_DIR . 'i_pipeline_section.php';
require_once NEGOCIOS_DIR . 'order_processor.php';
require_once NEGOCIOS_DIR . 'ps_initial_notification.php';
require_once NEGOCIOS_DIR . 'ps_check_funds.php';
require_once NEGOCIOS_DIR . 'ps_check_stock.php';
require_once NEGOCIOS_DIR . 'ps_stock_ok.php';
require_once NEGOCIOS_DIR . 'ps_take_payment.php';
require_once NEGOCIOS_DIR . 'ps_ship_goods.php';
require_once NEGOCIOS_DIR . 'ps_ship_ok.php';
require_once NEGOCIOS_DIR . 'ps_final_notification.php';
require_once NEGOCIOS_DIR . 'authorize_net_request.php';

// Load Smarty template file
$application = new Application();

// Display the page
$application->display('store_admin.tpl');

// Close database connection
DatabaseHandler::Close();

// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
?>
