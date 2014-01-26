<?php /* Smarty version 2.6.26, created on 2013-06-24 13:57:10
         compiled from customer_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'customer_details.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'customer_details','assign' => 'obj'), $this);?>

<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos para el registro</h3>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAccountDetails; ?>
" id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">email:</strong> (required) 
							<?php if ($this->_tpl_vars['obj']->mEmailAlreadyTaken): ?>
					        	A user with that e-mail address already exists.
					        <?php endif; ?>
					        <?php if ($this->_tpl_vars['obj']->mEmailError): ?>
					        	You must enter an e-mail address.
					        <?php endif; ?>
				        </label>
						<input type="email" name="email" value="<?php echo $this->_tpl_vars['obj']->mEmail; ?>
" <?php if ($this->_tpl_vars['obj']->mEditMode): ?>readonly="readonly"<?php endif; ?> />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="name" style="color:red;"><strong style="color:black;">Nombre</strong> (required) 
							<?php if ($this->_tpl_vars['obj']->mNameError): ?>
				        		You must enter your name.
				        	<?php endif; ?>
				        </label>
						<input type="text" name="name" value="<?php echo $this->_tpl_vars['obj']->mName; ?>
" id="email" />
					</div>
				</div>
				<div class="grid_8 omega">
					<div class="field">
						<label for="subject" style="color:red;"><strong style="color:black;">Password</strong>
						<?php if ($this->_tpl_vars['obj']->mPasswordError): ?>
				        	You must enter a password.
				        <?php endif; ?>
				        </label>
						<input type="password" name="password" id="password" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="passwordConfirm" style="color:red;"><strong style="color:black;">Repetir Password</strong>
						<?php if ($this->_tpl_vars['obj']->mPasswordConfirmError): ?>
				        	You must re-enter your password.
				        <?php elseif ($this->_tpl_vars['obj']->mPasswordMatchError): ?>
				        	You must re-enter the same password.
				        <?php endif; ?>
				        </label>
						<input type="password" name="passwordConfirm"  id="password" />
					</div>
				</div>
			</div>
		</div>
		
		
		<?php if ($this->_tpl_vars['obj']->mEditMode): ?>
		<div class="clearfix">
			<div class="grid_9">
				<div class="grid_8">
					<div class="field">
						<label for="telefonoCasa" style="color:red;"><strong style="color:black;">Tel&eacute;fono 1</strong></label>
						<input type="text" name="dayPhone" value="<?php echo $this->_tpl_vars['obj']->mDayPhone; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="telefonoTrabajo" style="color:red;"><strong style="color:black;">Tel&eacute;fono 2</strong>
						
				        </label>
						<input type="text" name="evePhone" value="<?php echo $this->_tpl_vars['obj']->mEvePhone; ?>
" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="telefonoMobil" style="color:red;"><strong style="color:black;">Tel&eacute;fono mobil</strong>
						
				        </label>
						<input type="text" name="mobPhone" value="<?php echo $this->_tpl_vars['obj']->mMobPhone; ?>
" />
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		 <input type="submit" name="sended" value="Confirmar" />
		 <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCancelPage; ?>
" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
	</form>
		<!-- Contact Form / End -->
</div>

   