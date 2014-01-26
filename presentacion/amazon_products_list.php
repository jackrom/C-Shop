<?php
// Class that handles receiving AWS data
class AmazonProductsList
{
  // Public variables available in smarty template
  public $mProducts;
  public $mDepartmentName;
  public $mDepartmentDescription;
  
  // Agregadas por JCRC
  public $mPage = 1;
  public $mrTotalPages;
  public $mLinkToNextPage;
  public $mLinkToPreviousPage;
  public $mProductListPages = array();

  // Constructor
  public function __construct()
  {
    $this->mDepartmentName = AMAZON_DEPARTMENT_TITLE;
    $this->mDepartmentDescription = AMAZON_DEPARTMENT_DESCRIPTION;
  }

  public function init()
  {
    $amazon = new Amazon();
    $this->mProducts = $amazon->GetProducts();

    for ($i = 0;$i < count($this->mProducts); $i++)
      $this->mProducts[$i]['link_to_product'] =
        'http://www.amazon.com/exec/obidos/ASIN/' .
        $this->mProducts[$i]['asin'] . '/ref=nosim/' . AMAZON_ASSOCIATES_ID;
    
    
    //Agregadas por JCRC
    
    
    // Save page request for continue shopping functionality
    $_SESSION['link_to_continue_shopping'] = $_SERVER['QUERY_STRING'];
    
    
    /* If there are subpages of products, display navigation
       controls */
    $this->mrTotalPages = amazon::GetProductsOnShop();
    
    if ($this->mrTotalPages > 1)
    {
      // Build the Next link
      if ($this->mPage < $this->mrTotalPages)
      {
          $this->mLinkToNextPage = Link::ToIndexAmazon($this->mPage + 1);
      }

      // Build the Previous link
      if ($this->mPage > 1)
      {
        $this->mLinkToPreviousPage = Link::ToIndexAmazon($this->mPage - 1);
      }

      // Build the pages links
      for ($i = 1; $i <= $this->mrTotalPages; $i++)
        $this->mProductListPages[] = Link::ToIndexAmazon($i);
    }
    
    /* 404 redirect if the page number is larger than
    the total number of pages */
    if ($this->mPage > $this->mrTotalPages && !empty($this->mrTotalPages))
    {
    // Clean output buffer
    ob_clean();
    
    // Load the 404 page
    include '404.php';
    
    // Clear the output buffer and stop execution
    	flush();
    	ob_flush();
    	ob_end_clean();
    	exit();
    }
  }
}
?>