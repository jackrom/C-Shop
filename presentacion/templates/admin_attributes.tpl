{* admin_attributes.tpl *}
{load_presentation_object filename="admin_attributes" assign="obj"}
{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_12"><p>{$obj->mErrorMessage}</p></div>
{/if}
<div class="box grid_7">
	<div class="box-head">
		<h2>Editar atributos del producto</h2>
	</div>
		<form method="post" action="{$obj->mLinkToAttributesAdmin}">
			{if $obj->mAttributesCount eq 0}
  				<p class="no-items-found">
    				No hay atributos de productos en tu base de datos!
  				</p>
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
 						<th>Nombre del atributo</th>
     	 				<th width="530">Opciones del administrador</th>
    				</tr>
  					{section name=i loop=$obj->mAttributes}
    				{if $obj->mEditItem == $obj->mAttributes[i].attribute_id}
				    <tr>
				      <td>
				        <input type="text" name="name"
				         value="{$obj->mAttributes[i].name}" size="30" />
				      </td>
				      <td>
				        <input class="button small black" style="width:150px;" type="submit"
				         name="submit_edit_attr_val_{$obj->mAttributes[i].attribute_id}"
				         value="Editar valores de atributo" />
				        <input class="button small black" style="width:100px;" type="submit"
				         name="submit_update_attr_{$obj->mAttributes[i].attribute_id}"
				         value="Actualizar" />
				        <input class="button small black" style="width:100px;" type="submit" name="cancel" value="Cancel" />
				        <input class="button small grey" style="width:100px;" type="submit"
				         name="submit_delete_attr_{$obj->mAttributes[i].attribute_id}"
				         value="Eliminar" />
				      </td>
				    </tr>
				    {else}
				    <tr>
				      <td>{$obj->mAttributes[i].name}</td>
				      <td>
				        <input class="button small black" style="width:150px;" type="submit"
				         name="submit_edit_val_{$obj->mAttributes[i].attribute_id}"
				         value="Editar valores de atributo" />
				        <input class="button small black" style="width:100px;" type="submit"
				         name="submit_edit_attr_{$obj->mAttributes[i].attribute_id}"
				         value="Editar" />
				        <input class="button small grey" style="width:100px;" type="submit"
				         name="submit_delete_attr_{$obj->mAttributes[i].attribute_id}"
				         value="Eliminar" />
				      </td>
				    </tr>
				    {/if}
  				{/section}
  			</table>
			{/if}
		</div>
	</div>
	<div class="box grid_5">
		<div class="box-head">
			<h2>Agregar nuevo atributo:</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<tr>
				  <td>
				    <input type="text" name="attribute_name" value="" placeholder="nombre" size="90" />
				  </td>
				  <td>
				    <input class="button small black" style="width:100px;" type="submit" name="submit_add_attr_0" value="Add" />
				  </td>
				</tr>
			</table>
		</div>
	</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
