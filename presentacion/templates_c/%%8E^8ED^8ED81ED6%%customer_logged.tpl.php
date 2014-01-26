<?php /* Smarty version 2.6.26, created on 2014-01-26 07:17:20
         compiled from customer_logged.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_logged.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_logged','assign' => 'obj'), $this);?>

<div class="logged">
  <h4><?php echo $this->_tpl_vars['obj']->mCustomerName; ?>
</h4>
  <ul class="contact-info">
  	<li>
  		 <a <?php if ($this->_tpl_vars['obj']->mSelectedMenuItem == 'account'): ?> class="selected" <?php endif; ?>
         href="<?php echo $this->_tpl_vars['obj']->mLinkToAccountDetails; ?>
"><i class="icon-user"></i>
  		 <strong>Editar </strong>tu cuenta</a>
	</li>
	<li>
		 <a <?php if ($this->_tpl_vars['obj']->mSelectedMenuItem == 'credit-card'): ?> class="selected" <?php endif; ?>
         href="<?php echo $this->_tpl_vars['obj']->mLinkToCreditCardDetails; ?>
"><i class="icon-envelope"></i> 
		 <strong><?php echo $this->_tpl_vars['obj']->mCreditCardAction; ?>
</strong> 
		 Detalles de pago</a>
	</li>
    <li>
    	<a <?php if ($this->_tpl_vars['obj']->mSelectedMenuItem == 'address'): ?> class="selected" <?php endif; ?>
         href="<?php echo $this->_tpl_vars['obj']->mLinkToAddressDetails; ?>
">
		<i class="icon-map-marker"></i> <strong><?php echo $this->_tpl_vars['obj']->mAddressAction; ?>
</strong> direcci&oacute;n</a>
	</li>
	<li>
    	<a href="<?php echo $this->_tpl_vars['obj']->mLinkToLogout; ?>
"><i class="icon-signout"></i><strong>Cerrar</strong> sesion</a>
		 
	</li>
  </ol>
</div>