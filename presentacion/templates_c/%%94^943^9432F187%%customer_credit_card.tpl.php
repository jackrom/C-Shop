<?php /* Smarty version 2.6.26, created on 2013-06-18 18:42:57
         compiled from customer_credit_card.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_credit_card.tpl', 2, false),array('function', 'html_options', 'customer_credit_card.tpl', 56, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_credit_card','assign' => 'obj'), $this);?>

<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos de su forma de pago</h3>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToCreditCardDetails; ?>
 id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Su nombre ecomo esta en la tarjeta de cr&eacute;dito</strong>
							<?php if ($this->_tpl_vars['obj']->mCardHolderError): ?>
					        	<p class="error">Debes ingresar el nombre como est&aacute; en tu tarjeta.</p>
					        <?php endif; ?>
						</label>
						<input type="text" name="cardHolder" value="<?php echo $this->_tpl_vars['obj']->mPlainCreditCard['card_holder']; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">N&uacute;mero de la tarjeta (s&oacute;lo d&iacute;gitos)</strong>
							<?php if ($this->_tpl_vars['obj']->mCardNumberError): ?>
					        	<p class="error">Debes ingresar un n&uacute;mero de tarjeta de cr&eacute;dito</p>
					        <?php endif; ?>
						</label>
						<input type="text" name="cardNumber" value="<?php echo $this->_tpl_vars['obj']->mPlainCreditCard['card_number']; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Fecha de vencimiento (MM/YY)</strong>
							<?php if ($this->_tpl_vars['obj']->mExpDateError): ?>
					        	<p class="error">You must enter an expiry date</p>
					        <?php endif; ?>
						</label>
						<input type="text" name="expDate" value="<?php echo $this->_tpl_vars['obj']->mPlainCreditCard['expiry_date']; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Fecha de emisi&oacute;n (si es aplicable)</strong>
						</label>
						<input type="text" name="issueDate" value="<?php echo $this->_tpl_vars['obj']->mPlainCreditCard['issue_date']; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Tipo de tarjeta</strong>
						</label>
						<select name="cardType">
				          	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['obj']->mCardTypes,'selected' => $this->_tpl_vars['obj']->mPlainCreditCard['card_type']), $this);?>

				        </select>
				        	<?php if ($this->_tpl_vars['obj']->mCardTypesError): ?>
				        <p class="error">Debe seleccionar el tipo de tarjeta.</p>
				        <?php endif; ?>
					</div>
				</div>
				<input type="submit" name="sended" value="Confirm" />
			 <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCancelPage; ?>
" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
		</form>
	</div>
</div>
</div>