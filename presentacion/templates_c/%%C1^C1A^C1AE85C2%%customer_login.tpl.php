<?php /* Smarty version 2.6.26, created on 2014-01-26 06:36:20
         compiled from customer_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_login.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_login','assign' => 'obj'), $this);?>

<div class="grid_3">
	<div class="box login">
	  <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToLogin; ?>
" id="contact-form" class="contact-form input-blocks">
	  		<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
			<div class="field">
				<label for="email"><strong>E-mail</strong> (requerido)</label>
				<input type="email" name="email" id="email" value="<?php echo $this->_tpl_vars['obj']->mEmail; ?>
">
			</div>
			<div class="field">
				<label for="password"><strong>Password</strong></label>
				<input type="password" name="password" id="password">
			</div>
			<div class="button-wrapper">
				<input type="submit" name="Login" id="submit" value="Login" /> &nbsp;
				<a href="<?php echo $this->_tpl_vars['obj']->mLinkToRegisterCustomer; ?>
" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Registrarse</span></a>
			</div>
			<div id="response"></div>
	  </form>
	</div>
</div>