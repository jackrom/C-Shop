{* admin_products.tpl *}
{load_presentation_object filename="admin_products" assign="obj"}
{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_12"><p>{$obj->mErrorMessage}</p></div>
{/if}
<div id="back">
<p><a href="{$obj->mLinkToDepartmentCategoriesAdmin}"><img src="{$obj->mSiteUrl}img/icons/basic/left.png" alt="" />regresar a categor&iacute;as ...</a></p>
</div>
<div class="box grid_12">
	<div class="box-head">
		<h2>Editar productos de la categor&iacute;a: {$obj->mCategoryName}</h2>
	</div>
		<form method="post" action="{$obj->mLinkToCategoryProductsAdmin}">
		  	{if $obj->mProductsCount eq 0}
			  <p class="no-items-found">There are no products in this category!</p>
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
				      <th width="150">Nombre</th>
				      <th width="50">Resumen</th>
				      <th>Descripci&oacute;n del producto</th>
				      <th>Precio</th>
				      <th>Precio Descuento</th>
				      <th width="120">Opciones del administrador</th>
				    </tr>
				</thead>
				<tbody>
					{section name=i loop=$obj->mProducts}
					<tr>
				      <td>{$obj->mProducts[i].name}</td>
				      <td>{$obj->mProducts[i].summary}</td>
				      <td>{$obj->mProducts[i].description}</td>
				      <td>{$obj->mProducts[i].price}</td>
				      <td>{$obj->mProducts[i].discounted_price}</td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_prod_{$obj->mProducts[i].product_id}" id="tip-right" class="button small grey" value="Editar">
				      </td>
				    </tr>
				  {/section}
				  </table>
				{/if}
			</div>
		</div>
		<div class="box grid_12">
			<div class="box-head">
				<h2>Agregar nuevo producto</h2>
			</div>
			<div class="box-content no-pad">
				<table class="display">
					<td><input type="text" name="product_name" value="" placeholder="nombre" size="60" /></td>
					<td><input type="text" name="product_summary" value="" placeholder="resumen" size="60" /></td>
					<td><input type="text" name="product_description" value="" placeholder="descripci&oacute;n" size="160" /></td>
					<td><input type="text" name="product_price" value="" placeholder="precio" size="10" /></td>
					<td><input class="button small black" style="width:100px;" type="submit" name="submit_add_prod_0" value="Agregar producto" /></td>
				</table>
			</div>
		</form>
	</div>
</div>
	          
<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
