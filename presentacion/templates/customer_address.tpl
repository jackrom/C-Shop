{* customer_address.tpl *}
{load_presentation_object filename="customer_address" assign="obj"}
<div class="clearfix">
	<div class="grid_9">
		<!-- Contact Form -->
		<h3>Ingrese los datos para el envio</h3>
		<form method="post" action="{$obj->mLinkToAddressDetails}" id="contact-form" class="contact-form input-blocks">
			<div class="clearfix">
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">direcci&oacute;n (linea 1)</strong>
							{if $obj->mAddress1Error}
								<p class="error">Debes introducir una direccion.</p>
							{/if}
				        </label>
						<input type="text" name="address1" value="{$obj->mAddress1}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">direcci&oacute;n (linea 2)</strong>
				        </label>
						<input type="text" name="address2" value="{$obj->mAddress2}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Ciudad</strong>
							{if $obj->mCityError}
					        	<p class="error">Debes introducir una ciudad</p>
					        {/if}
				        </label>
						<input type="text" name="city" value="{$obj->mCity}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Comunidad/Estado</strong>
							{if $obj->mCityError}
					        	<p class="error">Debes introducir una Comunidad/Estado</p>
					        {/if}
				        </label>
						<input type="text" name="region" value="{$obj->mRegion}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Codigo postal</strong>
							{if $obj->mPostalCodeError}
					        	<p class="error">You must enter a postal code/ZIP.</p>
					        {/if}
				        </label>
						<input type="text" name="postalCode" value="{$obj->mPostalCode}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Pa&iacute;s</strong>
							{if $obj->mCountryError}
					        	<p class="error">You must enter a country.</p>
					        {/if}
				        </label>
						<input type="text" name="country" value="{$obj->mCountry}" />
					</div>
				</div>
				<div class="grid_8">
					<div class="field">
						<label for="email" style="color:red;">
							<strong style="color:black;">Zona de envio/Shipping</strong>
							{if $obj->mShippingRegionError}
					        	<p class="error">Debes seleccionar una zona.</p>
					        {/if}
				        </label>
						<select name="shippingRegion">
				          {html_options options=$obj->mShippingRegions
				           selected=$obj->mShippingRegion}
				        </select>
					</div>
				</div>
			<input type="submit" name="sended" value="Confirmar" />
			 <a href="{$obj->mLinkToCancelPage}" class="button button__tertiary"><span class="button-inner"><i class="icon-warning"></i> Cancelar</span></a>
		</form>
		<!-- Contact Form / End -->
	</div>
</div>
</div>

