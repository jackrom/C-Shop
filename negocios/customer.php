<?php
// Business tier class that manages customer accounts functionality
class Customer
{
  // Checks if a customer_id exists in session
  public static function IsAuthenticated()
  {
    if (!(isset ($_SESSION['tshirtshop_customer_id'])))
      return 0;
    else
      return 1;
  }

  // Returns customer_id and password for customer with email $email
  public static function GetLoginInfo($email)
  {
    // Build the SQL query
    $sql = "SELECT customer_id, password FROM customer WHERE email = '$email'";

    // Build the parameters array
    //$params = array (':email' => $email);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerFila($sql);
  }

  public static function IsValid($email, $password)
  {
    $customer = self::GetLoginInfo($email);

    if (empty ($customer['customer_id']))
      return 2;

    $customer_id     = $customer['customer_id'];
    $hashed_password = $customer['password'];

    if (PasswordHasher::Hash($password) != $hashed_password)
      return 1;
    else
    {
      $_SESSION['tshirtshop_customer_id'] = $customer_id;

      return 0;
    }
  }

  public static function Logout()
  {
    unset($_SESSION['tshirtshop_customer_id']);
  }

  public static function GetCurrentCustomerId()
  {
    if (self::IsAuthenticated())
      return $_SESSION['tshirtshop_customer_id'];
    else
      return 0;
  }

  /* Adds a new customer account, log him in if $addAndLogin is true
     and returns customer_id */
  public static function Add($name, $email, $password, $addAndLogin = true)
  {
    $hashed_password = PasswordHasher::Hash($password);

    // Build the SQL query
    $sql = "INSERT INTO customer (name, email, password) 
    		VALUES ('$name', '$email', '$hashed_password')"; 
    		

    // Build the parameters array
    //$params = array (':name' => $name, ':email' => $email, ':password' => $hashed_password);

    // Execute the query and get the customer_id
    DatabaseHandler::Ejecutar($sql);
    
    $sql ="SELECT LAST_INSERT_ID()";
    
    $customer_id = DatabaseHandler::ObtenerUna($sql);

    if ($addAndLogin)
      $_SESSION['tshirtshop_customer_id'] = $customer_id;

    return $customer_id;
  }

  public static function Get($customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'SELECT customer_id, name, email, password, credit_card,
         address_1, address_2, city, region, postal_code, country,
         shipping_region_id, day_phone, eve_phone, mob_phone 
    		FROM   customer 
    		WHERE  customer_id = '.$customerId;

    // Build the parameters array
    //$params = array (':customer_id' => $customerId);

    // Execute the query and return the results
    return DatabaseHandler::ObtenerFila($sql);
  }

  public static function UpdateAccountDetails($name, $email, $password,
                           $dayPhone, $evePhone, $mobPhone,
                           $customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    $hashed_password = PasswordHasher::Hash($password);

    // Build the SQL query
    $sql = 'UPDATE customer 
    		SET    name = "'.$name.'", email = "'.$email.'",
         password = "'.$hashed_password.'", day_phone = "'.$dayPhone.'",
         eve_phone = "'.$evePhone.'", mob_phone = "'.$mobPhone.'" 
    		WHERE  customer_id = '.$customerId;

    // Build the parameters array
    //$params = array (':customer_id' => $customerId, ':name' => $name,':email' => $email, ':password' => $hashed_password,':day_phone' => $dayPhone, ':eve_phone' => $evePhone,':mob_phone' => $mobPhone);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  public static function DecryptCreditCard($encryptedCreditCard)
  {
    $secure_card = new SecureCard();
    $secure_card->LoadEncryptedDataAndDecrypt($encryptedCreditCard);

    $credit_card = array();
    $credit_card['card_holder']   = $secure_card->CardHolder;
    $credit_card['card_number']   = $secure_card->CardNumber;
    $credit_card['issue_date']    = $secure_card->IssueDate;
    $credit_card['expiry_date']   = $secure_card->ExpiryDate;
    $credit_card['issue_number']  = $secure_card->IssueNumber;
    $credit_card['card_type']     = $secure_card->CardType;
    $credit_card['card_number_x'] = $secure_card->CardNumberX;

    return $credit_card;
  }

  public static function GetPlainCreditCard()
  {
    $customer_data = self::Get();

    if (!(empty ($customer_data['credit_card'])))
      return self::DecryptCreditCard($customer_data['credit_card']);
    else
      return array('card_holder'   => '', 'card_number' => '',
                   'issue_date'    => '', 'expiry_date' => '',
                   'issue_number'  => '', 'card_type'   => '',
                   'card_number_x' => '');
  }

  public static function UpdateCreditCardDetails($plainCreditCard, $customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    $secure_card = new SecureCard();
    $secure_card->LoadPlainDataAndEncrypt($plainCreditCard['card_holder'],
    $plainCreditCard['card_number'], $plainCreditCard['issue_date'],
    $plainCreditCard['expiry_date'], $plainCreditCard['issue_number'],
    $plainCreditCard['card_type']);
    $encrypted_card = $secure_card->EncryptedData;

    // Build the SQL query
    $sql = "UPDATE customer 
    		SET    credit_card = '$encrypted_card' 
    		WHERE  customer_id = $customerId";

    // Build the parameters array
    //$params = array (':customer_id' => $customerId,':credit_card' => $encrypted_card);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  public static function GetShippingRegions()
  {
    // Build the SQL query
    $sql = 'SELECT shipping_region_id, shipping_region FROM shipping_region';

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }

  public static function UpdateAddressDetails($address1, $address2, $city,
                           $region, $postalCode, $country,
                           $shippingRegionId, $customerId = null)
  {
    if (is_null($customerId))
      $customerId = self::GetCurrentCustomerId();

    // Build the SQL query
    $sql = 'UPDATE customer 
    		SET    address_1 = "'. $address1.'", address_2 = "'.$address2.'", city = "'.$city.'",
         region = "'.$region.'", postal_code = "'.$postalCode.'",
         country = "'.$country.'", shipping_region_id = "'.$shippingRegionId.'" 
    		WHERE  customer_id = '.$customerId;

    // Build the parameters array
    //$params = array (':customer_id' => $customerId,':address_1' => $address1, ':address_2' => $address2,':city' => $city, ':region' => $region,':postal_code' => $postalCode,':country' => $country,':shipping_region_id' => $shippingRegionId);

    // Execute the query
    DatabaseHandler::Ejecutar($sql);
  }

  // Gets all customers names with their associated id
  public static function GetCustomersList()
  {
    // Build the SQL query
    $sql = 'SELECT customer_id, name FROM customer ORDER BY name ASC';

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }
}
?>
