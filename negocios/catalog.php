<?php
// Business tier class for reading product catalog information

class Catalog
{
	
	// Defines product display options
	public static $mProductDisplayOptions = array ('Default',       // 0
		'On Catalog',    // 1
		'On Department', // 2
		'On Both');      // 3


  // Retrieves all departments
  public static function GetDepartments()
  {
    // Build SQL query
    $sql = 'SELECT * FROM department';

    // Execute the query and return the results
    return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Retrieves complete details for the specified department
  public static function GetDepartmentDetails($departmentId)
  {
  	// Build SQL query
  	$sql = 'SELECT name, description FROM department WHERE department_id ='.$departmentId;
  	// Build the parameters array
  	$params = array (':department_id' => $departmentId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerFila($sql);
  }
  
  // Retrieves list of categories that belong to a department
  public static function GetCategoriesInDepartment($departmentId)
  {
  	// Build SQL query
  	$sql = 'SELECT   category_id, name FROM category WHERE department_id = :department_id ORDER BY category_id';
  	// Build the parameters array
  	$params = array (':department_id' => $departmentId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql, $params);
  }
  
  // Retrieves complete details for the specified category
  public static function GetCategoryDetails($categoryId)
  {
  	// Build SQL query
  	$sql = 'SELECT name, description FROM category WHERE category_id = :category_id';
  	// Build the parameters array
  	$params = array (':category_id' => $categoryId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerFila($sql, $params);
  }
  
  /* Calculates how many pages of products could be filled by the
   number of products returned by the $countSql query */
  private static function HowManyPages($countSql, $countSqlParams)
  {
  	// Create a hash for the sql query
  	$queryHashCode = md5($countSql . var_export($countSqlParams, true));
  	// Verify if we have the query results in cache
  	if (isset ($_SESSION['last_count_hash']) &&
  			isset ($_SESSION['how_many_pages']) &&
  			$_SESSION['last_count_hash'] === $queryHashCode)
  	{
  		// Retrieve the the cached value
  		$how_many_pages = $_SESSION['how_many_pages'];
  	}
  	else
  	{
  		// Execute the query
  		$items_count = DatabaseHandler::ObtenerUna($countSql, $countSqlParams);
  		// Calculate the number of pages
  		$how_many_pages = ceil($items_count / PRODUCTS_PER_PAGE);
  		// Save the query and its count result in the session
  		$_SESSION['last_count_hash'] = $queryHashCode;
  		$_SESSION['how_many_pages'] = $how_many_pages;
  	}
  	// Return the number of pages
  	return $how_many_pages;
  }
  
  // Retrieves list of products that belong to a category
  public static function GetProductsInCategory(
  		$categoryId, $pageNo, &$rHowManyPages)
  {
  	// Query that returns the number of products in the category
  	$sql = 'SELECT COUNT(*) AS categories_count FROM product p INNER JOIN product_category pc ON p.product_id = pc.product_id WHERE pc.category_id = :category_id';
  	// Build the parameters array
  	$params = array (':category_id' => $categoryId);
  	// Calculate the number of pages required to display the products
  	$rHowManyPages = Catalog::HowManyPages($sql, $params);
  	// Calculate the start item
  	$start_item = ($pageNo - 1) * PRODUCTS_PER_PAGE;
  	// Retrieve the list of products
  	$sql = 'SELECT p.product_id, p.name, IF( LENGTH( p.description ) <= 150, p.description, CONCAT( LEFT( p.description, 150 ) ,  "..." ) ) AS description, p.price, p.discounted_price, p.thumbnail 
  			FROM product p 
  			INNER JOIN product_category pc ON p.product_id = pc.product_id 
  			WHERE pc.category_id = '.$categoryId.' 
  			ORDER BY p.display DESC  
  			LIMIT '.$start_item.' , 4';
  	
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Retrieves the list of products for the department page
  public static function GetProductsOnDepartment(
  		$departmentId, $pageNo, &$rHowManyPages)
  {
  	// Query that returns the number of products in the department page
  	$sql = 'SELECT DISTINCT COUNT(*) AS products_on_department_count 
  			FROM product p 
  			INNER JOIN product_category pc 
  			ON p.product_id = pc.product_id 
  			INNER JOIN category c 
  			ON pc.category_id = c.category_id 
  			WHERE (p.display = 2 OR p.display = 3) 
  			AND c.department_id = :department_id';
  	// Build the parameters array
  	$params = array (':department_id' => $departmentId);
  	// Calculate the number of pages required to display the products
  	$rHowManyPages = Catalog::HowManyPages($sql, $params);
  	// Calculate the start item
  	$start_item = ($pageNo - 1) * PRODUCTS_PER_PAGE;
  	// Retrieve the list of products
  	$sql = 'SELECT DISTINCT p.product_id, p.name, 
  			IF(LENGTH(p.description) <= 150, p.description, 
  			CONCAT(LEFT(p.description, 150), "...")) AS description, p.price, p.discounted_price, p.thumbnail 
  			FROM product p 
  			INNER JOIN product_category pc 
  			ON p.product_id = pc.product_id 
  			INNER JOIN category c 
  			ON pc.category_id = c.category_id 
  			WHERE (p.display = 2 OR p.display = 3) 
  			AND c.department_id = '.$departmentId.' 
  			ORDER BY p.display DESC 
  			LIMIT '.$start_item.', 4';
  	
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  
  
  // Retrieves the list of products on catalog page
  public static function GetProductsOnCatalog($pageNo, &$rHowManyPages)
  {
  	// Query that returns the number of products for the front catalog page
  	$sql = 'SELECT COUNT(*) AS products_on_catalog_count FROM product WHERE  display = 1 OR display = 3';
  	// Calculate the number of pages required to display the products
  	$rHowManyPages = Catalog::HowManyPages($sql, null);
  	// Calculate the start item
  	$start_item = ($pageNo - 1) * PRODUCTS_PER_PAGE;
  	// Retrieve the list of products
  	$sql = 'SELECT product_id, name, 
  			IF(LENGTH(description) <= 150, description,
                 (CONCAT(LEFT(description, 150), "...")))
  			AS description, price, discounted_price, thumbnail 
  			FROM     product 
  			WHERE    display = 1 OR display = 3 
  			ORDER BY display DESC 
  			LIMIT    '.$start_item.', 4';
  	// Build the parameters array
  	//$params = $start_item;
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Retrieves complete product details
  public static function GetProductDetails($productId)
  {
  	// Build SQL query
  	$sql = 'SELECT product_id, name, summary, description, price, discounted_price, image, image_2, thumbnail
  			FROM   product 
  			WHERE  product_id = :product_id';
  	// Build the parameters array
  	$params = array (':product_id' => $productId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerFila($sql, $params);
  }
  
  // Retrieves product locations
  public static function GetProductLocations($productId)
  {
  	// Build SQL query
  	$sql = 'SELECT c.category_id, c.name AS category_name, c.department_id,
  			(SELECT name 
  			FROM   department 
  			WHERE  department_id = c.department_id) AS department_name 
  			FROM   category c 
  			WHERE  c.category_id IN
           (SELECT category_id
            FROM   product_category
            WHERE  product_id = '.$productId.')';
  	
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Retrieves product attributes
  public static function GetProductAttributes($productId)
  {
  	// Build SQL query
  	$sql = 'SELECT a.name AS attribute_name, av.attribute_value_id, av.value AS attribute_value 
  			FROM attribute_value av 
  			INNER JOIN attribute a 
  			ON av.attribute_id = a.attribute_id 
  			WHERE av.attribute_value_id IN (SELECT attribute_value_id 
  			FROM product_attribute 
  			WHERE product_id = '.$productId.') 
  			ORDER BY a.name';
  	// Build the parameters array
  	//$params = array (':product_id' => $productId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  
  // Recuperamos el nombre del departamento
  public static function GetDepartmentName($departmentId)
  {
  	// Build SQL query
  	$sql = 'SELECT name FROM department WHERE department_id = '.$departmentId;
  	// Build the parameters array
  	//$params = array (':department_id' => $departmentId);
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  
  	// Retrieves category name
  public static function GetCategoryName($categoryId)
  {
  		// Build SQL query
  		$sql = 'SELECT name FROM category WHERE category_id = '.$categoryId;
  		// Build the parameters array
  		//$params = array (':category_id' => $categoryId);
  		// Execute the query and return the results
  		return DatabaseHandler::ObtenerUna($sql);
  }
  
  
  // Retrieves product name
  public static function GetProductName($productId)
  {
  		// Build SQL query
  		$sql = 'SELECT name FROM product WHERE product_id = '.$productId;
  		// Build the parameters array
  		//$params = array (':product_id' => $productId);
  		// Execute the query and return the results
  		return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Search the catalog
  public static function Search($searchString, $allWords,$pageNo, &$rHowManyPages)
  {
  	//The search result will be an array of this form
    $search_result = array ('accepted_words' => array (),
                            'ignored_words' => array (),
                            'products' => array ());

    // Return void if the search string is void
    if (empty ($searchString))
      return $search_result;

    // Search string delimiters
    $delimiters = ',.; ';

    /* On the first call to strtok you supply the whole
       search string and the list of delimiters.
       It returns the first word of the string */
    $word = strtok($searchString, $delimiters);

    // Parse the string word by word until there are no more words
    while ($word)
    {
      // Short words are added to the ignored_words list from $search_result
      if (strlen($word) < FT_MIN_WORD_LEN)
        $search_result['ignored_words'][] = $word;
      else
        $search_result['accepted_words'][] = $word;

      // Get the next word of the search string
      $word = strtok($delimiters);
    }

    // If there aren't any accepted words return the $search_result
    if (count($search_result['accepted_words']) == 0)
      return $search_result;

    // Build $search_string from accepted words list
    $search_string = '';

    // If $allWords is 'on' then we append a ' +' to each word
    if (strcmp($allWords, "on") == 0)
      $search_string = implode(" +", $search_result['accepted_words']);
    else
      $search_string = implode(" ", $search_result['accepted_words']);
  	
  	
  	if($allWords == 'on'){
  		$sql = "SELECT   count(*) 
  		FROM     product 
  		WHERE    MATCH (name, description) AGAINST ('$search_string' IN BOOLEAN MODE)";
  	}else{
  	 	$sql = "SELECT   count(*) 
  	 			FROM     product 
  	 			WHERE    MATCH (name, description) AGAINST ('$search_string')";
  	}
  	
  	$params = array(':search_string' => $search_string, ':all_words' => $allWords);
  	// Calculate the number of pages required to display the products
  	$rHowManyPages = Catalog::HowManyPages($sql, $params);
  	// Calculate the start item
  	$start_item = ($pageNo - 1) * PRODUCTS_PER_PAGE;
  	
  	$productosPorPagina = PRODUCTS_PER_PAGE;
  	// Retrieve the list of matching products
  
  	if($allWords == 'on'){
  		$sql = "SELECT   product_id, name,
                IF(LENGTH(description) <= 150,
                   description,
                   CONCAT(LEFT(description, 150),
                          '...')) AS description,
                price, discounted_price, thumbnail
       FROM     product
       WHERE    MATCH (name, description)
                AGAINST ('$search_string' IN BOOLEAN MODE)
       ORDER BY MATCH (name, description)
                AGAINST ('$search_string' IN BOOLEAN MODE) DESC
       LIMIT    $start_item, $productosPorPagina";
  	}else{
  		$sql = "SELECT   product_id, name,
                IF(LENGTH(description) <= 150,
                   description,
                   CONCAT(LEFT(description, 150),
                          '...')) AS description,
                price, discounted_price, thumbnail
       FROM     product
       WHERE    MATCH (name, description) AGAINST ('$search_string')
       ORDER BY MATCH (name, description) AGAINST ('$search_string') DESC
       LIMIT    $start_item, $productosPorPagina";
  	}
  	
  	// Execute the query
  	$search_result['products'] = DatabaseHandler::ObtenerTodo($sql);
  	// Return the results
  	return $search_result;
  }
  

  // Retrieves all departments with their descriptions
  public static function GetDepartmentsWithDescriptions()
  {
  	// Build the SQL query
  	$sql = "SELECT   department_id, name, description 
  			FROM     department 
  			ORDER BY department_id";
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Add a department
  public static function AddDepartment($departmentName, $departmentDescription)
  {
  	// Build the SQL query
  	$sql = "INSERT INTO department (name, description) 
  			VALUES ('$departmentName', '$departmentDescription')";
  
  	// Build the parameters array
  	//$params = array (':department_name' => $departmentName, ':department_description' => $departmentDescription);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Updates department details
  public static function UpdateDepartment($departmentId, $departmentName,
  		$departmentDescription)
  {
  	// Build the SQL query
  	$sql = "UPDATE department 
  			SET    name = '$departmentName', description = '$departmentDescription' 
  			WHERE  department_id = $departmentId";
  
  	// Build the parameters array
  	//$params = array (':department_id' => $departmentId,':department_name' => $departmentName,':department_description' => $departmentDescription);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Deletes a department
  public static function DeleteDepartment($departmentId)
  {
  	// Build the SQL query
  	$sql = "SELECT count(*) 
  			FROM   category 
  			WHERE  department_id = $departmentId";
  	
  	$categoryRowCount = DatabaseHandler::Ejecutar($sql);
  	
  	if($categoryRowCount == 0){
  		$sql = "DELETE FROM department WHERE department_id = $departmentId; SELECT 1";
  	}else{
  		$sql = "DELETE FROM department WHERE department_id = $departmentId; SELECT -1";
  	}
  	
  	
  	// Build the parameters array
  	//$params = array (':department_id' => $departmentId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Gets categories in a department
  public static function GetDepartmentCategories($departmentId)
  {
  	// Build the SQL query
  	$sql = "SELECT   category_id, name, description 
  			FROM     category 
  			WHERE    department_id = $departmentId 
  			ORDER BY category_id";
  
  	// Build the parameters array
  	//$params = array (':department_id' => $departmentId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Adds a category
  public static function AddCategory($departmentId, $categoryName,
  		$categoryDescription)
  {
  	// Build the SQL query
  	$sql = "INSERT INTO category (department_id, name, description) 
  			VALUES ('$departmentId', '$categoryName', '$categoryDescription')";
  
  	// Build the parameters array
  	//$params = array (':department_id' => $departmentId,':category_name' => $categoryName,':category_description' => $categoryDescription);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Updates a category
  public static function UpdateCategory($categoryId, $categoryName, $categoryDescription)
  {
  	// Build the SQL query
  	$sql = "UPDATE category 
  	SET name = '$categoryName', description = '$categoryDescription'
  	WHERE  category_id = $categoryId";
  
  	// Build the parameters array
  	//$params = array (':category_id' => $categoryId,':category_name' => $categoryName,':category_description' => $categoryDescription);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Deletes a category
  public static function DeleteCategory($categoryId)
  {
  	// Build the SQL query
  	$sql = "SELECT      count(*) 
  			FROM        product p 
  			INNER JOIN  product_category pc 
  			ON p.product_id = pc.product_id 
  			WHERE       pc.category_id = $categoryId";
  	
  	$productCategoryRowsCount = DatabaseHandler::Ejecutar($sql);
  	
  	if($productCategoryRowsCount == 0){
  		$sql = "DELETE FROM category WHERE category_id = $categoryId; SELECT 1";
  	}else{
  		$sql = "DELETE FROM category WHERE category_id = $categoryId; SELECT -1";
  	}
  	
  
  	// Build the parameters array
  	//$params = array (':category_id' => $categoryId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Retrieves all attributes
  public static function GetAttributes()
  {
  	// Build the SQL query
  	$sql = "SELECT attribute_id, name FROM attribute ORDER BY attribute_id";
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Add an attribute
  public static function AddAttribute($attributeName)
  {
  	// Build the SQL query
  	$sql = "INSERT INTO attribute (name) VALUES ('$attributeName')";
  
  	// Build the parameters array
  	//$params = array (':attribute_name' => $attributeName);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Updates attribute name
  public static function UpdateAttribute($attributeId, $attributeName)
  {
  	// Build the SQL query
  	$sql = "UPDATE attribute SET name = '$attributeName' WHERE attribute_id = $attributeId";
  
  	// Build the parameters array
  	//$params = array (':attribute_id' => $attributeId, ':attribute_name' => $attributeName);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Deletes an attribute
  public static function DeleteAttribute($attributeId)
  {
  	// Build the SQL query
  	$sql = "SELECT count(*) 
  			FROM   attribute_value 
  			WHERE  attribute_id = $attributeId";
  	
  	$attributeRowsCount = DatabaseHandler::Ejecutar($sql);
  	
  	if($attributeRowsCount == 0){
  		$sql = "DELETE FROM attribute WHERE attribute_id = $attributeId; SELECT 1";
  	}else{
  		$sql = "DELETE FROM attribute WHERE attribute_id = $attributeId; SELECT -1";
  	}
  	// Build the parameters array
  	//$params = array (':attribute_id' => $attributeId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Retrieves details for the specified attribute
  public static function GetAttributeDetails($attributeId)
  {
  	// Build SQL query
  	$sql = "SELECT attribute_id, name 
  			FROM   attribute 
  			WHERE  attribute_id = $attributeId";
  
  	// Build the parameters array
  	//$params = array (':attribute_id' => $attributeId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerFila($sql);
  }
  
  // Gets atribute values
  public static function GetAttributeValues($attributeId)
  {
  	// Build the SQL query
  	$sql = "SELECT   attribute_value_id, value 
  			FROM     attribute_value 
  			WHERE    attribute_id = $attributeId 
  			ORDER BY attribute_id";
  
  	// Build the parameters array
  	//$params = array (':attribute_id' => $attributeId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Adds an attribute value
  public static function AddAttributeValue($attributeId, $attributeValue)
  {
  	// Build the SQL query
  	$sql = "INSERT INTO attribute_value (attribute_id, value) 
  			VALUES ('$attributeId', '$attributeValue')";
  
  	// Build the parameters array
  	//$params = array (':attribute_id' => $attributeId, ':value' => $attributeValue);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Updates an atribute value
  public static function UpdateAttributeValue(
  		$attributeValueId, $attributeValue)
  {
  	// Build the SQL query
  	$sql = "UPDATE attribute_value 
  			SET    value = '$attributeValue' 
  			WHERE  attribute_value_id = $attributeValueId";
  
  	// Build the parameters array
  	//$params = array (':attribute_value_id' => $attributeValueId, ':value' => $attributeValue);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Deletes an attribute value
  public static function DeleteAttributeValue($attributeValueId)
  {
  	// Build the SQL query
  	$sql = "SELECT      count(*) 
  			FROM        product p 
  			INNER JOIN  product_attribute pa 
  			ON p.product_id = pa.product_id 
  			WHERE       pa.attribute_value_id = inAttributeValueId";
  	
  	$productAttributeRowsCount = DatabaseHandler::Ejecutar($sql);
  	
  	if($productAttributeRowsCount == 0){
  		$sql ="DELETE FROM attribute_value WHERE attribute_value_id = $attributeValueId; SELECT 1";
  	}else{
  		$sql ="DELETE FROM attribute_value WHERE attribute_value_id = $attributeValueId; SELECT -1";
  	}
  
  	// Build the parameters array
  	//$params = array (':attribute_value_id' => $attributeValueId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Gets products in a category
  public static function GetCategoryProducts($categoryId)
  {
  	// Build the SQL query
  	$sql = "SELECT     p.product_id, p.name, p.summary, p.description, p.price, p.discounted_price 
  			FROM       product p 
  			INNER JOIN product_category pc 
  			ON p.product_id = pc.product_id 
  			WHERE      pc.category_id = $categoryId 
  			ORDER BY   p.product_id";
  
  	// Build the parameters array
  	//$params = array (':category_id' => $categoryId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Creates a product and assigns it to a category
  public static function AddProductToCategory($categoryId, $productName, $productSummary, 
  		$productDescription, $productPrice)
  {
  	// Build the SQL query
  	$sql = "INSERT INTO product (name, summary, description, price) 
  			VALUES ('$productName', '$productSummary', '$productDescription', '$productPrice')";
  	
  	DatabaseHandler::Ejecutar($sql);
  	
  	$sql = "LAST_INSERT_ID()";
  	
  	$productLastInsertId = DatabaseHandler::Ejecutar($sql);
  	
  	$sql = "INSERT INTO product_category (product_id, category_id)
         VALUES ('$productLastInsertId', '$categoryId')";
  
  	// Build the parameters array
  	//$params = array (':category_id' => $categoryId,':product_name' => $productName,':product_description' => $productDescription,':product_price' => $productPrice);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Updates a product
  public static function UpdateProduct($productId, $productName, $productSummary, 
  		$productDescription, $productPrice,
  		$productDiscountedPrice)
  {
  	// Build the SQL query
  	$sql = "UPDATE product 
  			SET    name = '$productName', summary = '$productSummary', description = '$productDescription', price = '$productPrice', discounted_price = '$productDiscountedPrice' 
  			WHERE  product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId,':product_name' => $productName,':product_description' => $productDescription,':product_price' => $productPrice,':product_discounted_price' => $productDiscountedPrice);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Removes a product from the product catalog
  public static function DeleteProduct($productId)
  {
  	// Build SQL query
  	$sql = "DELETE FROM product_attribute WHERE product_id = $productId";
  	
  	DatabaseHandler::Ejecutar($sql);
  	
  	$sql = "DELETE FROM product_category WHERE product_id = $productId";
  	
  	DatabaseHandler::Ejecutar($sql);
  
  	$sql = "DELETE FROM shopping_cart WHERE product_id = $productId";
  	
  	DatabaseHandler::Ejecutar($sql);
  
  	$sql = "DELETE FROM product WHERE product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Unassigns a product from a category
  public static function RemoveProductFromCategory($productId, $categoryId)
  {
  	// Build SQL query
  	$sql = "SELECT count(*) 
  			FROM   product_category 
  			WHERE  product_id = $productId";
  	
  	$productCategoryRowsCount = DatabaseHandler::Ejecutar($sql);
  	
  	If($productCategoryRowsCount == 0){
  		self::DeleteProduct($productId);
  		$sql = "SELECT 0";
  	}else{
  		$sql ="DELETE FROM product_category 
  				WHERE  category_id = $categoryId AND product_id = $productId; SELECT 1";
  	}
  	
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':category_id' => $categoryId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerUna($sql);
  }
  
  // Retrieves the list of categories a product belongs to
  public static function GetCategories()
  {
  	// Build SQL query
  	$sql = "SELECT   category_id, name, description 
  			FROM     category 
  			ORDER BY category_id";
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Retrieves product info
  public static function GetProductInfo($productId)
  {
  	// Build SQL query
  	$sql = "SELECT product_id, name, summary, description, price, discounted_price, image, image_2, thumbnail, display 
  			FROM   product 
  			WHERE  product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerFila($sql);
  }
  
  // Retrieves the list of categories a product belongs to
  public static function GetCategoriesForProduct($productId)
  {
  	// Build SQL query
  	$sql = "SELECT   c.category_id, c.department_id, c.name 
  			FROM     category c 
  			JOIN     product_category pc 
  			ON c.category_id = pc.category_id 
  			WHERE    pc.product_id = $productId 
  			ORDER BY category_id;";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Assigns a product to a category
  public static function SetProductDisplayOption($productId, $display)
  {
  	// Build SQL query
  	$sql = "UPDATE product SET display = '$display' WHERE product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':display' => $display);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Assigns a product to a category
  public static function AssignProductToCategory($productId, $categoryId)
  {
  	// Build SQL query
  	$sql = "INSERT INTO product_category (product_id, category_id) 
  			VALUES ('$productId', '$categoryId')";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':category_id' => $categoryId);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Moves a product from one category to another
  public static function MoveProductToCategory($productId, $sourceCategoryId,
  		$targetCategoryId)
  {
  	// Build SQL query
  	$sql = "UPDATE product_category 
  			SET    category_id = '$targetCategoryId' 
  			WHERE  product_id = $productId 
  			AND category_id = $sourceCategoryId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':source_category_id' => $sourceCategoryId, ':target_category_id' => $targetCategoryId);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Gets the catalog attributes that are not assigned to the specified product
  public static function GetAttributesNotAssignedToProduct($productId)
  {
  	// Build the SQL query
  	$sql = "SELECT     a.name AS attribute_name, av.attribute_value_id, av.value AS attribute_value 
  			FROM       attribute_value av 
  			INNER JOIN attribute a 
  			ON av.attribute_id = a.attribute_id 
  			WHERE      av.attribute_value_id NOT IN
             (SELECT attribute_value_id
              FROM   product_attribute
              WHERE  product_id = $productId) 
  			ORDER BY   attribute_name, av.attribute_value_id";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql);
  }
  
  // Assign an attribute value to the specified product
  public static function AssignAttributeValueToProduct($productId,
  		$attributeValueId)
  {
  	// Build SQL query
  	$sql = "INSERT INTO product_attribute (product_id, attribute_value_id)
         VALUES ('$productId', '$attributeValueId')";
  	
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':attribute_value_id' => $attributeValueId);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Removes a product attribute value
  public static function RemoveProductAttributeValue($productId,
  		$attributeValueId)
  {
  	// Build SQL query
  	$sql = "DELETE FROM product_attribute 
  			WHERE product_id = $productId AND attribute_value_id = $attributeValueId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':attribute_value_id' => $attributeValueId);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  
  // Changes the name of the product image file in the database
  public static function SetImage($productId, $imageName)
  {
  	// Build SQL query
  	$sql = "UPDATE product SET image = '$imageName' WHERE product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':image_name' => $imageName);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Changes the name of the second product image file in the database
  public static function SetImage2($productId, $imageName)
  {
  	// Build SQL query
  	$sql = "UPDATE product SET image_2 = '$imageName' WHERE product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':image_name' => $imageName);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Changes the name of the product thumbnail file in the database
  public static function SetThumbnail($productId, $thumbnailName)
  {
  	// Build SQL query
  	$sql = "UPDATE product 
  			SET    thumbnail = '$thumbnailName' 
  			WHERE  product_id = $productId";
  
  	// Build the parameters array
  	//$params = array (':product_id' => $productId, ':thumbnail_name' => $thumbnailName);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
  // Get product recommendations
  public static function GetRecommendations($productId)
  {
  	// Build the SQL query
  	$sql = 'SELECT   od2.product_id, od2.product_name,
              IF(LENGTH(p.description) <= 150, p.description,
                 CONCAT(LEFT(p.description, 150), "...")) AS description
     FROM     order_detail od1
     JOIN     order_detail od2 ON od1.order_id = od2.order_id
     JOIN     product p ON od2.product_id = p.product_id
     WHERE    od1.product_id = :product_id AND
              od2.product_id != :product_id
     GROUP BY od2.product_id
     ORDER BY COUNT(od2.product_id) DESC
     LIMIT 5';
  
  	// Build the parameters array
  	$params = array (':product_id' => $productId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql, $params);
  }
  
  // Gets the reviews for a specific product
  public static function GetProductReviews($productId)
  {
  	// Build the SQL query
  	$sql = 'SELECT     c.name, r.review, r.rating, r.created_on 
  			FROM       review r 
  			INNER JOIN customer c 
  			ON c.customer_id = r.customer_id 
  			WHERE      r.product_id = :product_id 
  			ORDER BY   r.created_on DESC;';
  
  	// Build the parameters array
  	$params = array (':product_id' => $productId);
  
  	// Execute the query and return the results
  	return DatabaseHandler::ObtenerTodo($sql, $params);
  }
  
  // Creates a product review
  public static function CreateProductReview($customer_id, $productId,
  		$review, $rating)
  {
  	// Build the SQL query
  	$sql ="INSERT INTO review (customer_id, product_id, review, rating, created_on)
         VALUES ('$customer_id', '$productId', '$review', '$rating', NOW())";
  	
  	// Build the parameters array
  	//$params = array (':customer_id' => $customer_id, ':product_id' => $productId, ':review' => $review, ':rating' => $rating);
  
  	// Execute the query
  	DatabaseHandler::Ejecutar($sql);
  }
  
}
?>
