{* customer_details.tpl *}
{load_presentation_object filename="customer_details" assign="obj"}
<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos para el registro</h3>
		<form method="post" action="{$obj->mLinkToAccountDetails}" id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">email:</strong> (required) 
							{if $obj->mEmailAlreadyTaken}
					        	A user with that e-mail address already exists.
					        {/if}
					        {if $obj->mEmailError}
					        	You must enter an e-mail address.
					        {/if}
				        </label>
						<input type="email" name="email" value="{$obj->mEmail}" {if $obj->mEditMode}readonly="readonly"{/if} />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="name" style="color:red;"><strong style="color:black;">Nombre</strong> (required) 
							{if $obj->mNameError}
				        		You must enter your name.
				        	{/if}
				        </label>
						<input type="text" name="name" value="{$obj->mName}" id="email" />
					</div>
				</div>
				<div class="grid_8 omega">
					<div class="field">
						<label for="subject" style="color:red;"><strong style="color:black;">Password</strong>
						{if $obj->mPasswordError}
				        	You must enter a password.
				        {/if}
				        </label>
						<input type="password" name="password" id="password" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="passwordConfirm" style="color:red;"><strong style="color:black;">Repetir Password</strong>
						{if $obj->mPasswordConfirmError}
				        	You must re-enter your password.
				        {elseif $obj->mPasswordMatchError}
				        	You must re-enter the same password.
				        {/if}
				        </label>
						<input type="password" name="passwordConfirm"  id="password" />
					</div>
				</div>
			</div>
		</div>
		
		
		{if $obj->mEditMode}
		<div class="clearfix">
			<div class="grid_9">
				<div class="grid_8">
					<div class="field">
						<label for="telefonoCasa" style="color:red;"><strong style="color:black;">Tel&eacute;fono 1</strong></label>
						<input type="text" name="dayPhone" value="{$obj->mDayPhone}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="telefonoTrabajo" style="color:red;"><strong style="color:black;">Tel&eacute;fono 2</strong>
						
				        </label>
						<input type="text" name="evePhone" value="{$obj->mEvePhone}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="telefonoMobil" style="color:red;"><strong style="color:black;">Tel&eacute;fono mobil</strong>
						
				        </label>
						<input type="text" name="mobPhone" value="{$obj->mMobPhone}" />
					</div>
				</div>
			</div>
		</div>
		{/if}
		 <input type="submit" name="sended" value="Confirmar" />
		 <a href="{$obj->mLinkToCancelPage}" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
	</form>
		<!-- Contact Form / End -->
</div>

   