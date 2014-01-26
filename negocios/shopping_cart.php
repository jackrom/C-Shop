<?php
// Business tier class for the shopping cart
class ShoppingCart
{
  // Stores the visitor's Cart ID
  private static $_mCartId;

  // Private constructor to prevent direct creation of object
  private function __construct()
  {
  }

  /* This will be called by GetCartId to ensure we have the
     visitor's cart ID in the visitor's session in case
     $_mCartID has no value set */
  public static function SetCartId()
  {
    // If the cart ID hasn't already been set ...
    if (self::$_mCartId == '')
    {
      // If the visitor's cart ID is in the session, get it from there
      if (isset ($_SESSION['cart_id']))
      {
        self::$_mCartId = $_SESSION['cart_id'];
      }
      // If not, check whether the cart ID was saved as a cookie
      elseif (isset ($_COOKIE['cart_id']))
      {
        // Save the cart ID from the cookie
        self::$_mCartId = $_COOKIE['cart_id'];
        $_SESSION['cart_id'] = self::$_mCartId;

        // Regenerate cookie to be valid for 7 days (604800 seconds)
        setcookie('cart_id', self::$_mCartId, time() + 604800);
      }
      else
      {
        /* Generate cart id and save it to the $_mCartId class member,
           the session and a cookie (on subsequent requests $_mCartId
           will be populated from the session) */
        self::$_mCartId = md5(uniqid(rand(), true));

        // Store cart id in session
        $_SESSION['cart_id'] = self::$_mCartId;

        // Cookie will be valid for 7 days (604800 seconds)
        setcookie('cart_id', self::$_mCartId, time() + 604800);
      }
    }
  }

  // Returns the current visitor's card id
  public static function GetCartId()
  {
    // Ensure we have a cart id for the current visitor
    if (!isset (self::$_mCartId))
      self::SetCartId();

    return self::$_mCartId;
  }

  // Adds product to the shopping cart
  public static function AddProduct($productId, $attributes)
  {
  	$productQuantity = array();
  	$cartId = self::GetCartId();
  	
  	$sql = "SELECT quantity 
  			FROM   shopping_cart 
  			WHERE  cart_id = '$cartId' 
  			AND product_id = '$productId' 
  			AND attributes = '$attributes'";
  	
  	$productQuantity = DatabaseHandler::Ejecutar($sql);
  	
  	if($productQuantity == 0){
  		$sql ="INSERT INTO shopping_cart(item_id, cart_id, product_id, attributes, quantity, added_on) 
  				VALUES (UUID(), '$cartId', '$productId', '$attributes', 1, NOW())";
  	}else{
  		$sql = "UPDATE shopping_cart 
  				SET    quantity = quantity + 1, buy_now = true 
  				WHERE  cart_id = $cartId
  				AND product_id = $productId
  				AND attributes = '$attributes'";
  	}

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Updates the shopping cart with new product quantities
  public static function Update($itemId, $quantity)
  {
    // Build SQL query
    if($quantity > 0){
    	$sql = "UPDATE shopping_cart 
    			SET    quantity = '$quantity', added_on = NOW() 
    			WHERE  item_id = $itemId";
    }else{
    	$sql = "DELETE FROM shopping_cart WHERE item_id = $itemId";
    }
    
    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Removes product from shopping cart
  public static function RemoveProduct($itemId)
  {
    // Build SQL query
    $sql = "DELETE FROM shopping_cart WHERE item_id = $itemId";

    // Build the parameters array
    //$params = array (':item_id' => $itemId);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Gets shopping cart products
  public static function GetCartProducts($cartProductsType)
  {
    $sql = '';
    $cartId = self::GetCartId();
    // If retrieving "active" shopping cart products ...
    if ($cartProductsType == GET_CART_PRODUCTS)
    {
      // Build SQL query
      $sql = "SELECT     sc.item_id, p.name, sc.attributes, 
      		COALESCE(NULLIF(p.discounted_price, 0), p.price) AS price, sc.quantity, 
      		COALESCE(NULLIF(p.discounted_price, 0), p.price) * sc.quantity AS subtotal 
      		FROM       shopping_cart sc 
      		INNER JOIN product p 
      		ON sc.product_id = p.product_id 
      		WHERE sc.cart_id = '$cartId' AND sc.buy_now";
    }
    // If retrieving products saved for later ...
    elseif ($cartProductsType == GET_CART_SAVED_PRODUCTS)
    {
      // Build SQL query
      $sql = "SELECT     sc.item_id, p.name, sc.attributes, 
      		COALESCE(NULLIF(p.discounted_price, 0), p.price) AS price 
      		FROM  shopping_cart sc 
      		INNER JOIN product p 
      		ON sc.product_id = p.product_id 
      		WHERE sc.cart_id = '$cartId' AND NOT sc.buy_now";
    }
    else
      trigger_error($cartProductsType. ' value unknown', E_USER_ERROR);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  /* Gets total amount of shopping cart products before tax and/or
     shipping charges (not including the ones that are being
     saved for later) */
  public static function GetTotalAmount()
  {
  	$cartId = self::GetCartId();
    // Build SQL query
    $sql = "SELECT     
    		SUM(COALESCE(NULLIF(p.discounted_price, 0), p.price)* sc.quantity) AS total_amount 
    		FROM shopping_cart sc 
    		INNER JOIN product p 
    		ON sc.product_id = p.product_id 
    		WHERE sc.cart_id = '$cartId' AND sc.buy_now";

    // Execute the query and return the results
    return DatabaseHandler::ObtenerUna($sql);
  }

  // Save product to the Save for Later list
  public static function SaveProductForLater($itemId)
  {
    // Build SQL query
    $sql = "UPDATE shopping_cart 
    		SET    buy_now = false, quantity = 1 
    		WHERE  item_id = $itemId";

    // Build the parameters array
    //$params = array (':item_id' => $itemId);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Get product from the Save for Later list back to the cart
  public static function MoveProductToCart($itemId)
  {
    // Build SQL query
    $sql = "UPDATE shopping_cart 
    		SET    buy_now = true, added_on = NOW() 
    		WHERE  item_id = $itemId";

    // Build the parameters array
    //$params = array (':item_id' => $itemId);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Count old shopping carts
  public static function CountOldShoppingCarts($days)
  {
    // Build SQL query
    $sql = "SELECT COUNT(cart_id) AS old_shopping_carts_count 
    		FROM   (SELECT   cart_id 
    		FROM     shopping_cart 
    		GROUP BY cart_id 
    		HAVING   DATE_SUB(NOW(), INTERVAL $days DAY) >= MAX(added_on)) 
    		AS old_carts";

    // Build the parameters array
    //$params = array (':days' => $days);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerUna($sql);
  }

  // Deletes old shopping carts
  public static function DeleteOldShoppingCarts($days)
  {
    // Build SQL query
    $sql = "DELETE FROM shopping_cart 
    		WHERE  cart_id IN 
    		(SELECT cart_id 
    		FROM   (SELECT   cart_id
                   FROM     shopping_cart
                   GROUP BY cart_id
                   HAVING   DATE_SUB(NOW(), INTERVAL $days DAY) >= MAX(added_on))
                  AS sc)";

    // Build the parameters array
    //$params = array (':days' => $days);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Create a new order
  public static function CreateOrder($customerId, $shippingId, $taxId)
  {
    // Build SQL query
    $sql = "INSERT INTO orders (created_on, customer_id, shipping_id, tax_id) VALUES
         (NOW(), $customerId, $shippingId, $taxId); SELECT LAST_INSERT_ID()";
    
    DatabaseHandler::Ejecutar($sql);
    
    $sql = "SELECT order_id FROM orders ORDER BY order_id DESC";
    
    $orderId = DatabaseHandler::ObtenerUna($sql);
    
    //$sql = "SELECT LAST_INSERT_ID()";
    //$orderId = DatabaseHandler::getLastInsertId($sql);
    
    //$orderId = DatabaseHandler::Ejecutar($sql);
    
    $cartId = self::GetCartId();
    if($orderId == 0){
    	exit('error en la consulta, lastInsertId = 0');
    }else{
    $sql = "INSERT INTO order_detail( order_id, product_id, attributes, product_name, quantity, unit_cost ) 
    		SELECT $orderId , p.product_id, sc.attributes, p.name, sc.quantity, COALESCE( NULLIF( p.discounted_price, 0 ) , p.price ) AS unit_cost 
    		FROM shopping_cart sc 
    		INNER JOIN product p ON sc.product_id = p.product_id 
    		WHERE sc.cart_id =  '$cartId' 
    		AND sc.buy_now";
    }
    DatabaseHandler::Ejecutar($sql);
    
    $sql ="UPDATE orders 
    		SET    total_amount = (SELECT SUM(unit_cost * quantity) 
    		FROM   order_detail 
    		WHERE  order_id = $orderId) 
    		WHERE  order_id = $orderId";
    
    DatabaseHandler::Ejecutar($sql);
    
    //vaciar el carrito de compra
    
    $sql = "DELETE FROM shopping_cart WHERE cart_id = '$cartId'";
    
    DatabaseHandler::Ejecutar($sql);
    
   
    return $orderId;
  }

  // Get product recommendations for the shopping cart
  public static function GetRecommendations()
  {
  	
  	$cartId = self::GetCartId();
  	
    // Build the SQL query
    //$sql = 'CALL shopping_cart_get_recommendations(:cart_id, :short_product_description_length)';
    
    $sql = "SELECT   od1.product_id, od1.product_name,
              IF(LENGTH(p.description) <= '150', p.description,
                 CONCAT(LEFT(p.description,'150'), '...')) AS description
     FROM     order_detail od1
     JOIN     order_detail od2
                ON od1.order_id = od2.order_id
     JOIN     product p
                ON od1.product_id = p.product_id
     JOIN     shopping_cart
                ON od2.product_id = shopping_cart.product_id
     WHERE    shopping_cart.cart_id = '$cartId'
              
              AND od1.product_id NOT IN
              (-- Returns the products in the specified
               -- shopping cart
               SELECT product_id
               FROM   shopping_cart
               WHERE  cart_id = '$cartId')
    
     GROUP BY od1.product_id
     -- Order descending by rank
     ORDER BY COUNT(od1.product_id) DESC
     LIMIT    5";


    // Build the parameters array
    //$params = array (':cart_id' => self::GetCartId(),':short_product_description_length' =>SHORT_PRODUCT_DESCRIPTION_LENGTH);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }
}
?>
