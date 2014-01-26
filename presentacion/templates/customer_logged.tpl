{* customer_logged.tpl *}
{load_presentation_object filename="customer_logged" assign="obj"}
<div class="logged">
  <h4>{$obj->mCustomerName}</h4>
  <ul class="contact-info">
  	<li>
  		 <a {if $obj->mSelectedMenuItem eq 'account'} class="selected" {/if}
         href="{$obj->mLinkToAccountDetails}"><i class="icon-user"></i>
  		 <strong>Editar </strong>tu cuenta</a>
	</li>
	<li>
		 <a {if $obj->mSelectedMenuItem eq 'credit-card'} class="selected" {/if}
         href="{$obj->mLinkToCreditCardDetails}"><i class="icon-envelope"></i> 
		 <strong>{$obj->mCreditCardAction}</strong> 
		 Detalles de pago</a>
	</li>
    <li>
    	<a {if $obj->mSelectedMenuItem eq 'address'} class="selected" {/if}
         href="{$obj->mLinkToAddressDetails}">
		<i class="icon-map-marker"></i> <strong>{$obj->mAddressAction}</strong> direcci&oacute;n</a>
	</li>
	<li>
    	<a href="{$obj->mLinkToLogout}"><i class="icon-signout"></i><strong>Cerrar</strong> sesion</a>
		 
	</li>
  </ol>
</div>
