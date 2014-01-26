{* customer_login.tpl *}
{load_presentation_object filename="customer_login" assign="obj"}
<div class="grid_3">
	<div class="box login">
	  <form method="post" action="{$obj->mLinkToLogin}" id="contact-form" class="contact-form input-blocks">
	  		{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
			<div class="field">
				<label for="email"><strong>E-mail</strong> (requerido)</label>
				<input type="email" name="email" id="email" value="{$obj->mEmail}">
			</div>
			<div class="field">
				<label for="password"><strong>Password</strong></label>
				<input type="password" name="password" id="password">
			</div>
			<div class="button-wrapper">
				<input type="submit" name="Login" id="submit" value="Login" /> &nbsp;
				<a href="{$obj->mLinkToRegisterCustomer}" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Registrarse</span></a>
			</div>
			<div id="response"></div>
	  </form>
	</div>
</div>