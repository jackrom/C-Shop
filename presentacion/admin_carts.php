<?php
// Class that supports cart admin functionality
class AdminCarts
{
  // Public variables available in smarty template
  public $mMessage;
  public $mDaysOptions = array (0  => 'Todos los carritos de compra',
                                1  => 'Un d&iacute;a de antiguedad',
                                10 => 'Diez d&iacute;a de antiguedad',
                                20 => 'Veinte d&iacute;a de antiguedad',
                                30 => 'Treinta d&iacute;a de antiguedad',
                                90 => 'Noventa d&iacute;a de antiguedad');
  public $mSelectedDaysNumber = 0;
  public $mLinkToCartsAdmin;
  
  public $mSiteUrl;

  // Private members
  public $_mAction = '';

  // Class constructor
  public function __construct()
  {
  	
  	$this->mSiteUrl = Link::Build('', 'https');
  	
    foreach ($_POST as $key => $value)
      // If a submit button was clicked ...
      if (substr($key, 0, 6) == 'submit')
      {
        // Get the scope of submit button
        $this->_mAction = substr($key, strlen('submit_'), strlen($key));

        // Get selected days number
        if (isset ($_POST['days']))
          $this->mSelectedDaysNumber = (int) $_POST['days'];
        else
          trigger_error('days value not set');
      }

    $this->mLinkToCartsAdmin = Link::ToCartsAdmin();
  }

  public function init()
  {
    // If counting shopping carts ...
    if ($this->_mAction == 'count')
    {
      $count_old_carts =
        ShoppingCart::CountOldShoppingCarts($this->mSelectedDaysNumber);

      if ($count_old_carts == 0)
        $count_old_carts = 'no';

      $this->mMessage = 'Existen ' . $count_old_carts .
                        ' carritos de compra antiguos (opci&oacute;n seleccionada: ' .
                        $this->mDaysOptions[$this->mSelectedDaysNumber] .
                        ').';
    }

    // If deleting shopping carts ...
    if ($this->_mAction == 'delete')
    {
      $this->mDeletedCarts =
        ShoppingCart::DeleteOldShoppingCarts($this->mSelectedDaysNumber);

      $this->mMessage = 'Los antiguos carritos de compra han sido removidos de la base de datos (opci&oacute;n seleccionada: ' .
        $this->mDaysOptions[$this->mSelectedDaysNumber] .').';
    }
  }
}
?>
