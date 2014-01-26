{* admin_order_details.tpl *}
{load_presentation_object filename="admin_order_details" assign="obj"}

<div id="back">
<p><a href="{$obj->mLinkToOrdersAdmin}"><img src="{$obj->mSiteUrl}img/icons/basic/left.png" alt="" />regresar a la administraci&oacute;n de ordenes ...</a></p>
</div>

<div class="box grid_6">
	<div class="box-head">
		<h2>Editar detalles de la orden ID: {$obj->mOrderInfo.order_id} </h2>
	</div>
		<form method="get" action="{$obj->mLinkToAdmin}">
		<div class="box-content no-pad">
			<input type="hidden" name="Page" value="OrderDetails" />
  			<input type="hidden" name="OrderId" value="{$obj->mOrderInfo.order_id}" />
  			<table class="display">
  				<tbody>
	  				<tr class="odd">
				      <td>Importe Total: </td>
				      <td>
				        ${$obj->mOrderInfo.total_amount}
				      </td>
				    </tr>
				    <tr class="even">
				      <td>Impuestos: </td>
				      <td>{$obj->mOrderInfo.tax_type} ${$obj->mTax}</td>
				    </tr>
				    <tr class="odd">
				      <td>Gastos de Env&iacute;o: </td>
				      <td>{$obj->mOrderInfo.shipping_type}</td>
				    </tr>
				    <tr class="even">
				      <td>Fecha de Creaci&oacute;n: </td>
				      <td>
				        {$obj->mOrderInfo.created_on|date_format:"%Y-%m-%d %T"}
				      </td>
				    </tr>
				    <tr class="odd">
				      <td>Fecha de Env&iacute;o: </td>
				      <td>
				        {$obj->mOrderInfo.shipped_on|date_format:"%Y-%m-%d %T"}
				      </td>
				    </tr>
				    <tr class="even">
				      <td>Status: </td>
				      <td>
				        <select name="status"
				         {if ! $obj->mEditEnabled} disabled="disabled" {/if} >
				          {html_options options=$obj->mOrderStatusOptions
				           selected=$obj->mOrderInfo.status}
				        </select>
				      </td>
				    </tr>
				    <tr class="odd">
				      <td>C&oacute;digo de Autorizaci&oacute;n: </td>
				      <td>
				        <input name="authCode" type="text" size="50"
				         value="{$obj->mOrderInfo.auth_code}"
				         {if ! $obj->mEditEnabled} disabled="disabled" {/if} />
				      </td>
				    </tr>
				    <tr class="even">
				      <td>N&uacute;mero de Referencia: </td>
				      <td>
				        <input name="reference" type="text" size="50"
				         value="{$obj->mOrderInfo.reference}"
				         {if ! $obj->mEditEnabled} disabled="disabled" {/if} />
				      </td>
				    </tr>
				    <tr class="odd">
				      <td>Comentarios: </td>
				      <td>
				        <input name="comments" type="text" size="50"
				         value="{$obj->mOrderInfo.comments}"
				         {if ! $obj->mEditEnabled} disabled="disabled" {/if} />
				      </td>
				    </tr>
				    
				    <tr class="even">
				      <td>Nombre del Cliente: </td>
				      <td>{$obj->mCustomerInfo.name}</td>
				    </tr>
				    <tr class="odd">
				      <td>Direcci&oacute;n de Env&iacute;o: </td>
				      <td>
				        {$obj->mCustomerInfo.address_1}<br />
				        {if $obj->mCustomerInfo.address_2}
				          {$obj->mCustomerInfo.address_2}<br />
				        {/if}
				        {$obj->mCustomerInfo.city}<br />
				        {$obj->mCustomerInfo.region}<br />
				        {$obj->mCustomerInfo.postal_code}<br />
				        {$obj->mCustomerInfo.country}<br />
				      </td>
				    </tr>
				    <tr class="even">
				      <td>Email del Cliente: </td>
				      <td>{$obj->mCustomerInfo.email}</td>
				    </tr>
			   </tbody>
		  </table>
	  </div>

<div class="form-row">
    <input class="button small black" style="width:100px;" type="submit" name="submitEdit" value="Editar" {if $obj->mEditEnabled} disabled="disabled" {/if} />
    <input class="button small black" style="width:100px;" type="submit" name="submitUpdate" value="Actualizar" {if ! $obj->mEditEnabled} disabled="disabled" {/if} />
    <input class="button small black" style="width:100px;" type="submit" name="submitCancel" value="Cancelar" {if ! $obj->mEditEnabled} disabled="disabled" {/if} />
    {if $obj->mProcessButtonText}
    <input type="submit" name="submitProcessOrder" value="{$obj->mProcessButtonText}" />
    {/if}
</div>
</div>

<div class="box grid_6">
	<div class="box-head">
		<h2>La Orden contiene estos productos:</h2>
	</div>
	<div class="box-content no-pad">
		<ul class="table-toolbar">
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/plus.png" alt="" /> Agregar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/delete.png" alt="" /> Eliminar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/save.png" alt="" /> Salvar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/print.png" alt="" /> Imprimir</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/up.png" alt="" /> Ascendente</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/down.png" alt="" /> Descendente</a></li>
      	</ul>
		<table class="display">
			<thead>
			    <tr>
			      <th>ID del Producto</th>
			      <th>Nombre del Producto</th>
			      <th>Cantidad</th>
			      <th>Costo Unitario</th>
			      <th>Subtotal</th>
			    </tr>
		  	</thead>
		  	<tbody>
			  	{section name=i loop=$obj->mOrderDetails}
			    <tr>
			      <td>{$obj->mOrderDetails[i].product_id}</td>
			      <td>
			        {$obj->mOrderDetails[i].product_name}
			        ({$obj->mOrderDetails[i].attributes})
			      </td>
			      <td>{$obj->mOrderDetails[i].quantity}</td>
			      <td>${$obj->mOrderDetails[i].unit_cost}</td>
			      <td>${$obj->mOrderDetails[i].subtotal}</td>
			    </tr>
			  {/section}
		 	</tbody>
  		</table>
	</div>
</div>
<div class="box grid_12">
		<div class="box-head">
			<h2>Cronol&oacute;gico de la auditor&iacute;a de la orden</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<thead>
					<tr>
				      <th>ID de Auditor&iacute;a</th>
				      <th>Creada el</th>
				      <th>C&oacute;digo</th>
				      <th>Mensaje</th>
				    </tr>
			    </thead>
			    <tbody>
			    	{section name=j loop=$obj->mAuditTrail}
					    <tr>
					      <td>{$obj->mAuditTrail[j].audit_id}</td>
					      <td>{$obj->mAuditTrail[j].created_on}</td>
					      <td>{$obj->mAuditTrail[j].code}</td>
					      <td>{$obj->mAuditTrail[j].message}</td>
					    </tr>
				  	{/section}
				</tbody>
			</table>
		</div>
	</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
