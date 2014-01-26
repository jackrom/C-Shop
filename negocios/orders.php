<?php
// Business tier class for the orders
class Orders
{
  public static $mOrderStatusOptions = array (
                  'Order placed, notifying customer', // 0
                  'Awaiting confirmation of funds',   // 1
                  'Notifying supplier-stock check',   // 2
                  'Awaiting stock confirmation',      // 3
                  'Awaiting credit card payment',     // 4
                  'Notifying supplier-shipping',      // 5
                  'Awaiting shipment confirmation',   // 6
                  'Sending final notification',       // 7
                  'Order completed',                  // 8
                  'Order canceled');                  // 9

  // Get the most recent $how_many orders
  public static function GetMostRecentOrders($how_many)
  {
    // Build the SQL query
    $sql = "SELECT     o.order_id, o.total_amount, o.created_on,
                o.shipped_on, o.status, c.name
     FROM       orders o
     INNER JOIN customer c
                  ON o.customer_id = c.customer_id
     ORDER BY   o.created_on DESC
     LIMIT      $how_many";

    // Build the parameters array
    //$params = array (':how_many' => $how_many);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Get orders between two dates
  public static function GetOrdersBetweenDates($startDate, $endDate)
  {
    // Build the SQL query
    $sql = "SELECT     o.order_id, o.total_amount, o.created_on, o.shipped_on, o.status, c.name 
    		FROM       orders o 
    		INNER JOIN customer c 
    		ON o.customer_id = c.customer_id 
    		WHERE      o.created_on >= $startDate AND o.created_on <= $endDate 
    		ORDER BY   o.created_on DESC";

    // Build the parameters array
    //$params = array (':start_date' => $startDate, ':end_date' => $endDate);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Gets orders by status
  public static function GetOrdersByStatus($status)
  {
    // Build the SQL query
    $sql = "SELECT     o.order_id, o.total_amount, o.created_on, o.shipped_on, o.status, c.name 
    		FROM       orders o 
    		INNER JOIN customer c 
    		ON o.customer_id = c.customer_id 
    		WHERE      o.status = $status 
    		ORDER BY   o.created_on DESC";

    // Build the parameters array
    //$params = array (':status' => $status);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Gets the details of a specific order
  public static function GetOrderInfo($orderId)
  {
    // Build the SQL query
    $sql = "SELECT     o.order_id, o.total_amount, o.created_on, o.shipped_on,
             o.status, o.comments, o.customer_id, o.auth_code,
             o.reference, o.shipping_id, s.shipping_type, s.shipping_cost,
             o.tax_id, t.tax_type, t.tax_percentage 
    		FROM       orders o 
    		INNER JOIN tax t 
    		ON t.tax_id = o.tax_id 
    		INNER JOIN shipping s 
    		ON s.shipping_id = o.shipping_id 
    		WHERE      o.order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerFila($sql);
  }

  // Gets the products that belong to a specific order
  public static function GetOrderDetails($orderId)
  {
    // Build the SQL query
    $sql = "SELECT order_id, product_id, attributes, product_name, quantity, unit_cost, (quantity * unit_cost) AS subtotal 
    		FROM   order_detail 
    		WHERE  order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Updates order details
  public static function UpdateOrder($orderId, $status, $comments, $authCode, $reference)
  {
    // Build the SQL query
    $fecha = '';
    $sql = "SELECT shipped_on 
    		FROM   orders 
    		WHERE  order_id = $orderId"; 
    
    $fecha = DatabaseHandler::Ejecutar($sql);
    		
    $sql = "UPDATE orders 
    		SET    status = '$status', comments = '$comments', auth_code = '$authCode', reference = '$reference' 
    		WHERE  order_id = $orderId";
    
    DatabaseHandler::Ejecutar($sql);
    
    if($status < 7 && $fecha != ''){
    	$sql = "UPDATE orders SET shipped_on = NULL WHERE order_id = $orderId";
    }else{
    	$sql = "UPDATE orders SET shipped_on = NOW() WHERE order_id = $orderId";
    }


    // Build the parameters array
    //$params = array (':order_id' => $orderId,':status' => $status, ':comments' => $comments, ':auth_code' => $authCode, ':reference' => $reference);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Gets all orders placed by a specified customer
  public static function GetByCustomerId($customerId)
  {
    // Build the SQL query
    $sql = "SELECT     o.order_id, o.total_amount, o.created_on, o.shipped_on, o.status, c.name 
    		FROM       orders o 
    		INNER JOIN customer c 
    		ON o.customer_id = c.customer_id 
    		WHERE      o.customer_id = $customerId 
    		ORDER BY   o.created_on DESC";

    // Build the parameters array
    //$params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Get short details for an order
  public static function GetOrderShortDetails($orderId)
  {
    // Build the SQL query
    $sql = "SELECT      o.order_id, o.total_amount, o.created_on,
              o.shipped_on, o.status, c.name 
    		FROM        orders o 
    		INNER JOIN  customer c 
    		ON o.customer_id = c.customer_id 
    		WHERE       o.order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Retrieves the shipping details for a given $shippingRegionId
  public static function GetShippingInfo($shippingRegionId)
  {
    // Build the SQL query
    $sql = "SELECT shipping_id, shipping_type, shipping_cost, shipping_region_id 
    		FROM   shipping 
    		WHERE  shipping_region_id = $shippingRegionId";

    // Build the parameters array
    //$params = array (':shipping_region_id' => $shippingRegionId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  // Creates audit record
  public static function CreateAudit($orderId, $message, $code)
  {
    // Build the SQL query
    $sql = "INSERT INTO audit (order_id, created_on, message, code) 
    		VALUES ('$orderId', NOW(), '$message', '$code')";

    // Build the parameters array
    //$params = array (':order_id' => $orderId,':message' => $message,':code' => $code);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Updates the order pipeline status of an order
  public static function UpdateOrderStatus($orderId, $status)
  {
    // Build the SQL query
    $sql = "UPDATE orders SET status = '$status' WHERE order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId, ':status' => $status);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Sets order's authorization code
  public static function SetOrderAuthCodeAndReference ($orderId, $authCode,
                                                       $reference)
  {
    // Build the SQL query
    $sql = "UPDATE orders 
    		SET    auth_code = '$authCode', reference = '$reference' 
    		WHERE  order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId,':auth_code' => $authCode,':reference' => $reference);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Set order's ship date
  public static function SetDateShipped($orderId)
  {
    // Build the SQL query
    $sql = "UPDATE orders SET shipped_on = NOW() WHERE order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Gets the audit table entries associated with a specific order
  public static function GetAuditTrail($orderId)
  {
    // Build the SQL query
    $sql = "SELECT audit_id, order_id, created_on, message, code 
    		FROM   audit 
    		WHERE  order_id = $orderId";

    // Build the parameters array
    //$params = array (':order_id' => $orderId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }
}
?>
