<?php /* Smarty version 2.6.26, created on 2013-06-18 20:27:23
         compiled from customer_address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_address.tpl', 2, false),array('function', 'html_options', 'customer_address.tpl', 81, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_address','assign' => 'obj'), $this);?>

<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos para el envio</h3>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAddressDetails; ?>
" id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">direcci&oacute;n (linea 1)</strong>
							<?php if ($this->_tpl_vars['obj']->mAddress1Error): ?>
								<p class="error">Debes introducir una direccion.</p>
							<?php endif; ?>
				        </label>
						<input type="text" name="address1" value="<?php echo $this->_tpl_vars['obj']->mAddress1; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">direcci&oacute;n (linea 2)</strong>
				        </label>
						<input type="text" name="address2" value="<?php echo $this->_tpl_vars['obj']->mAddress2; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Ciudad</strong>
							<?php if ($this->_tpl_vars['obj']->mCityError): ?>
					        	<p class="error">Debes introducir una ciudad</p>
					        <?php endif; ?>
				        </label>
						<input type="text" name="city" value="<?php echo $this->_tpl_vars['obj']->mCity; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Comunidad/Estado</strong>
							<?php if ($this->_tpl_vars['obj']->mCityError): ?>
					        	<p class="error">Debes introducir una Comunidad/Estado</p>
					        <?php endif; ?>
				        </label>
						<input type="text" name="region" value="<?php echo $this->_tpl_vars['obj']->mRegion; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Codigo postal</strong>
							<?php if ($this->_tpl_vars['obj']->mPostalCodeError): ?>
					        	<p class="error">You must enter a postal code/ZIP.</p>
					        <?php endif; ?>
				        </label>
						<input type="text" name="postalCode" value="<?php echo $this->_tpl_vars['obj']->mPostalCode; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Pa&iacute;s</strong>
							<?php if ($this->_tpl_vars['obj']->mCountryError): ?>
					        	<p class="error">You must enter a country.</p>
					        <?php endif; ?>
				        </label>
						<input type="text" name="country" value="<?php echo $this->_tpl_vars['obj']->mCountry; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Zona de envio/Shipping</strong>
							<?php if ($this->_tpl_vars['obj']->mShippingRegionError): ?>
					        	<p class="error">Debes seleccionar una zona.</p>
					        <?php endif; ?>
				        </label>
						<select name="shippingRegion">
				          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['obj']->mShippingRegions,'selected' => $this->_tpl_vars['obj']->mShippingRegion), $this);?>

				        </select>
					</div>
				</div>
			<input type="submit" name="sended" value="Confirmar" />
			 <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCancelPage; ?>
" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
		</form>
		<!-- Contact Form / End -->
	</div>
</div>
</div>
