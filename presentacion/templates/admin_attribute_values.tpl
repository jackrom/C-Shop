{* admin_attribute_values.tpl *}
{load_presentation_object filename="admin_attribute_values" assign="obj"}
{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_12"><p>{$obj->mErrorMessage}</p></div>
{/if}

<div id="back">
<p><a href="{$obj->mLinkToAttributesAdmin}"><img src="{$obj->mSiteUrl}img/icons/basic/left.png" alt="" />regresar a los atributos ...</a></p>
</div>


<div class="box grid_6">
	<div class="box-head">
		<h2>Editar valores del producto {$obj->mAttributeName}</h2>
	</div>
		<form method="post" action="{$obj->mLinkToAttributeValuesAdmin}">
		{if $obj->mAttributeValuesCount eq 0}
		  <p class="no-items-found">No existen valores para este atributo!</p>
		{else}
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
				      <th>Attribute Value</th>
				      <th width="370">&nbsp;</th>
				    </tr>
				</thead>
				<tbody>
				  {section name=i loop=$obj->mAttributeValues}
				    {if $obj->mEditItem == $obj->mAttributeValues[i].attribute_value_id}
				    <tr>
				      <td>
				        <input type="text" name="value" value="{$obj->mAttributeValues[i].value}" size="30" />
				      </td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_update_val_{$obj->mAttributeValues[i].attribute_value_id}" value="Actualizar" />
				        <input class="button small black" style="width:100px;" type="submit" name="cancel" value="Cancelar" />
				        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_val_{$obj->mAttributeValues[i].attribute_value_id}" value="Eliminar" />
				      </td>
				    </tr>
				    {else}
				    <tr>
				      <td>{$obj->mAttributeValues[i].value}</td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_val_{$obj->mAttributeValues[i].attribute_value_id}" value="Editar" />
				        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_val_{$obj->mAttributeValues[i].attribute_value_id}" value="Eliminar" />
				      </td>
				    </tr>
				    {/if}
				  {/section}
				  </table>
				{/if}
			</div>
	</div>
	<div class="box grid_6">
		<div class="box-head">
			<h2>Agregar nuevo valor de atributo:</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<tbody>
	  				<tr>
	  					<td><input type="text" name="attribute_value" value="" placeholder="valor" size="120" /></td>
	  					<td><input class="button small black" style="width:100px;" type="submit" name="submit_add_val_0" value="Agregar" /></td>
	  				</tr>
  				</tbody>
  			</table>
  		</div>
	</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
