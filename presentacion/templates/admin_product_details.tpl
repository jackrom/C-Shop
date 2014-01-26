{* admin_product_details.tpl *}
{load_presentation_object filename="admin_product_details" assign="obj"}
 {if $obj->mErrorMessage}
 <div class="ad-notif-error small-mg grid_12"><p class="error">{$obj->mErrorMessage}</p></div>
 {/if}
 
 <div id="back">
 <p><a href="{$obj->mLinkToCategoryProductsAdmin}"><img src="{$obj->mSiteUrl}img/icons/basic/left.png" alt="" />regresar a productos ...</a></p>
 </div>
 
 
 <div class="box grid_12">
	<div class="box-head">
		<h2>Editar producto ID # {$obj->mProduct.product_id} &mdash; {$obj->mProduct.name}</h2>
	</div>
	<div class="box-content no-pad">
		<form enctype="multipart/form-data" method="post" action="{$obj->mLinkToProductDetailsAdmin}">
			<table class="display">
				<tbody>
					<tr class="even">
				        <td>
				            Nombre del producto:
				        </td>
				        <td>
				            <input type="text" name="name" value="{$obj->mProduct.name}" size="30" />
				        </td>
				 	</tr>
				 	
				 	<tr class="odd">
				        <td>
				            Resumen del producto:
				        </td>
				        <td>
				            <input type="text" name="summary" value="{$obj->mProduct.summary}" size="30" />
				        </td>
				 	</tr>
				       
				    <tr class="even">
				          <td>
				            Descripci&oacute;n del producto:
				          </td>
				          <td>
				            {strip}<textarea name="description" rows="3" cols="60">{$obj->mProduct.description}</textarea>{/strip}
				          </td>
				  	</tr>
				  	
				    <tr class="odd">
				          <td>
				            Precio de venta del producto:
				          </td>
				          <td>
				            <input type="text" name="price" value="{$obj->mProduct.price}" size="5" />
				          </td>
				   	</tr>
				   	<tr class="even">
				          <td>
				            Precio oferta del producto:
				          </td>
				          <td>
				            <input type="text" name="discounted_price" value="{$obj->mProduct.discounted_price}" size="5" />
				          </td>
					</tr>
				<tbody>
			</table>
	</div>
</div>
<div class="box grid_6">
	<div class="form-row">
		<input class="button black" type="submit" name="UpdateProductInfo" value="Actualizar informaci&oacute;n" />
	</div>
</div>


<div class="box grid_12">
	<div class="box-head">
		<h2>Producto perteneciente a la categor&iacute;a: {$obj->mProductCategoriesString}</h2>
	</div>
	<div class="box-content no-pad">
			<table class="display">
				<tbody>
				    <tr>
				        <td>
				          Eliminar este producto desde la categor&iacute;a:
				   		</td>
				        <td>
				            {html_options name="TargetCategoryIdRemove" options=$obj->mRemoveFromCategories}
				        </td>
				        <td>
				            <input class="button small grey" style="width:100px;" type="submit" name="RemoveFromCategory" value="Eliminar" {if $obj->mRemoveFromCategoryButtonDisabled}
				             disabled="disabled" {/if}/>
				        </td>
				   	</tr>
				   	<tr>
				   		<td>
				          Asignar el producto a esta categor&iacute;a:
				        </td>
				        <td>
				            {html_options name="TargetCategoryIdAssign" options=$obj->mAssignOrMoveTo}
				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="Assign" value="Asignar" />
				        </td>
				   	</tr>
				   	<tr>
				    	<td>
				            Mover el producto a esta categor&iacute;a:
				        </td>
				        <td>
				            {html_options name="TargetCategoryIdMove" options=$obj->mAssignOrMoveTo}
				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="Move" value="Mover" />
				            <input class="button small grey" style="width:180px;" type="submit" name="RemoveFromCatalog" value="Eliminar producto del catalogo"
				             {if !$obj->mRemoveFromCategoryButtonDisabled}
				             disabled="disabled" {/if}/>
				       	</td>
				    </tr>
				    
				    {if $obj->mProductAttributes}
				    <tr>
				        <td>
				          	Atributos del producto:
				        </td>
				        <td>
				            {html_options name="TargetAttributeValueIdRemove" options=$obj->mProductAttributes}
				        </td>
				        <td>
				            <input class="button small grey" style="width:100px;" type="submit" name="RemoveAttributeValue" value="Eliminar" />
			          	</td>
			        </tr>
			        {/if}
			        
				    {if $obj->mCatalogAttributes}
				    <tr>
				        <td>
				          Asignar atributo al producto:
				        </td>
				        <td>
				            {html_options name="TargetAttributeValueIdAssign" options=$obj->mCatalogAttributes}
				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="AssignAttributeValue"  value="Asignar" />
				        </td>
				    </tr>
				    {/if}
				    
				    <tr>
				        <td>
				            Configurar la opci&oacute;n para mostrar este producto:
				        </td>
				        <td>
				            {html_options name="ProductDisplay" options=$obj->mProductDisplayOptions selected=$obj->mProduct.display}
				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="SetProductDisplayOption" value="Set" />
				        </td>
				    </tr>
				</tbody>
			</table>
		</div>
	</div>
<div class="box grid_6">
	<div class="box-head">
		<h2>Imagen 1 del producto</h2>
	</div>
	<div class="box-content">
		<div class="form-row">
			<label class="form-label">Image name:</label>
			<input type="text" value="{$obj->mProduct.image}" />
              <input name="ImageUpload" value="Upload" type="file" />
              <input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	{if $obj->mProduct.image}
	      		<img src="product_images/{$obj->mProduct.image}" border="0" alt="{$obj->mProduct.name} image" width="640"/>
	      	{/if}
      	</div>
     </div>
</div>

<div class="box grid_6">
	<div class="box-head">
		<h2>Imagen 2 del producto</h2>
	</div>
	<div class="box-content">
		<div class="form-row">
			<label class="form-label">Nombre Imagen 2:</label>
			<input type="text" value="{$obj->mProduct.image_2}" />
              <input name="Image2Upload" value="Upload"  type="file" />
    		  <input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	{if $obj->mProduct.image_2}
	      		<img src="product_images/{$obj->mProduct.image_2}" border="0" alt="{$obj->mProduct.name} image 2" width="640" />
	      	{/if}
      	</div>
     </div>
</div>


<div class="box grid_4">
	<div class="box-head">
		<h2>Imagen thumbnail del producto</h2>
	</div>
	<div class="box-content">
		<div class="form-row">
			<label class="form-label">Nombre Imagen thumbnail:</label>
			<input type="text" value="{$obj->mProduct.thumbnail}" />
    		
              <input name="ThumbnailUpload" value="Upload"  type="file" />
    		<input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	{if $obj->mProduct.thumbnail}
	      		<img src="product_images/{$obj->mProduct.thumbnail}" border="0" alt="{$obj->mProduct.name} thumbnail" width="410" />
	      	{/if}
      	</div>
     </div>
</div>
</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
