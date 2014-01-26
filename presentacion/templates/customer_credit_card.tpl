{* customer_credit_card.tpl *}
{load_presentation_object filename="customer_credit_card" assign="obj"}
<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos de su forma de pago</h3>
		<form method="post" action="{$obj->mLinkToCreditCardDetails} id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Su nombre ecomo esta en la tarjeta de cr&eacute;dito</strong>
							{if $obj->mCardHolderError}
					        	<p class="error">Debes ingresar el nombre como est&aacute; en tu tarjeta.</p>
					        {/if}
						</label>
						<input type="text" name="cardHolder" value="{$obj->mPlainCreditCard.card_holder}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">N&uacute;mero de la tarjeta (s&oacute;lo d&iacute;gitos)</strong>
							{if $obj->mCardNumberError}
					        	<p class="error">Debes ingresar un n&uacute;mero de tarjeta de cr&eacute;dito</p>
					        {/if}
						</label>
						<input type="text" name="cardNumber" value="{$obj->mPlainCreditCard.card_number}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Fecha de vencimiento (MM/YY)</strong>
							{if $obj->mExpDateError}
					        	<p class="error">You must enter an expiry date</p>
					        {/if}
						</label>
						<input type="text" name="expDate" value="{$obj->mPlainCreditCard.expiry_date}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Fecha de emisi&oacute;n (si es aplicable)</strong>
						</label>
						<input type="text" name="issueDate" value="{$obj->mPlainCreditCard.issue_date}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Tipo de tarjeta</strong>
						</label>
						<select name="cardType">
				          	{html_options options=$obj->mCardTypes selected=$obj->mPlainCreditCard.card_type}
				        </select>
				        	{if $obj->mCardTypesError}
				        <p class="error">Debe seleccionar el tipo de tarjeta.</p>
				        {/if}
					</div>
				</div>
				<input type="submit" name="sended" value="Confirm" />
			 <a href="{$obj->mLinkToCancelPage}" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
		</form>
	</div>
</div>
</div>
