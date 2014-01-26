<?php /* Smarty version 2.6.26, created on 2014-01-26 14:20:04
         compiled from admin_product_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_product_details.tpl', 2, false),array('function', 'html_options', 'admin_product_details.tpl', 86, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_product_details','assign' => 'obj'), $this);?>

 <?php if ($this->_tpl_vars['obj']->mErrorMessage): ?>
 <div class="ad-notif-error small-mg grid_12"><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p></div>
 <?php endif; ?>
 
 <div id="back">
 <p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToCategoryProductsAdmin; ?>
"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/left.png" alt="" />regresar a productos ...</a></p>
 </div>
 
 
 <div class="box grid_12">
	<div class="box-head">
		<h2>Editar producto ID # <?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
 &mdash; <?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
</h2>
	</div>
	<div class="box-content no-pad">
		<form enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToProductDetailsAdmin; ?>
">
			<table class="display">
				<tbody>
					<tr class="even">
				        <td>
				            Nombre del producto:
				        </td>
				        <td>
				            <input type="text" name="name" value="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
" size="30" />
				        </td>
				 	</tr>
				 	
				 	<tr class="odd">
				        <td>
				            Resumen del producto:
				        </td>
				        <td>
				            <input type="text" name="summary" value="<?php echo $this->_tpl_vars['obj']->mProduct['summary']; ?>
" size="30" />
				        </td>
				 	</tr>
				       
				    <tr class="even">
				          <td>
				            Descripci&oacute;n del producto:
				          </td>
				          <td>
				            <?php echo '<textarea name="description" rows="3" cols="60">'; ?><?php echo $this->_tpl_vars['obj']->mProduct['description']; ?><?php echo '</textarea>'; ?>

				          </td>
				  	</tr>
				  	
				    <tr class="odd">
				          <td>
				            Precio de venta del producto:
				          </td>
				          <td>
				            <input type="text" name="price" value="<?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
" size="5" />
				          </td>
				   	</tr>
				   	<tr class="even">
				          <td>
				            Precio oferta del producto:
				          </td>
				          <td>
				            <input type="text" name="discounted_price" value="<?php echo $this->_tpl_vars['obj']->mProduct['discounted_price']; ?>
" size="5" />
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
		<h2>Producto perteneciente a la categor&iacute;a: <?php echo $this->_tpl_vars['obj']->mProductCategoriesString; ?>
</h2>
	</div>
	<div class="box-content no-pad">
			<table class="display">
				<tbody>
				    <tr>
				        <td>
				          Eliminar este producto desde la categor&iacute;a:
				   		</td>
				        <td>
				            <?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdRemove','options' => $this->_tpl_vars['obj']->mRemoveFromCategories), $this);?>

				        </td>
				        <td>
				            <input class="button small grey" style="width:100px;" type="submit" name="RemoveFromCategory" value="Eliminar" <?php if ($this->_tpl_vars['obj']->mRemoveFromCategoryButtonDisabled): ?>
				             disabled="disabled" <?php endif; ?>/>
				        </td>
				   	</tr>
				   	<tr>
				   		<td>
				          Asignar el producto a esta categor&iacute;a:
				        </td>
				        <td>
				            <?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdAssign','options' => $this->_tpl_vars['obj']->mAssignOrMoveTo), $this);?>

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
				            <?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdMove','options' => $this->_tpl_vars['obj']->mAssignOrMoveTo), $this);?>

				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="Move" value="Mover" />
				            <input class="button small grey" style="width:180px;" type="submit" name="RemoveFromCatalog" value="Eliminar producto del catalogo"
				             <?php if (! $this->_tpl_vars['obj']->mRemoveFromCategoryButtonDisabled): ?>
				             disabled="disabled" <?php endif; ?>/>
				       	</td>
				    </tr>
				    
				    <?php if ($this->_tpl_vars['obj']->mProductAttributes): ?>
				    <tr>
				        <td>
				          	Atributos del producto:
				        </td>
				        <td>
				            <?php echo smarty_function_html_options(array('name' => 'TargetAttributeValueIdRemove','options' => $this->_tpl_vars['obj']->mProductAttributes), $this);?>

				        </td>
				        <td>
				            <input class="button small grey" style="width:100px;" type="submit" name="RemoveAttributeValue" value="Eliminar" />
			          	</td>
			        </tr>
			        <?php endif; ?>
			        
				    <?php if ($this->_tpl_vars['obj']->mCatalogAttributes): ?>
				    <tr>
				        <td>
				          Asignar atributo al producto:
				        </td>
				        <td>
				            <?php echo smarty_function_html_options(array('name' => 'TargetAttributeValueIdAssign','options' => $this->_tpl_vars['obj']->mCatalogAttributes), $this);?>

				        </td>
				        <td>
				            <input class="button small black" style="width:100px;" type="submit" name="AssignAttributeValue"  value="Asignar" />
				        </td>
				    </tr>
				    <?php endif; ?>
				    
				    <tr>
				        <td>
				            Configurar la opci&oacute;n para mostrar este producto:
				        </td>
				        <td>
				            <?php echo smarty_function_html_options(array('name' => 'ProductDisplay','options' => $this->_tpl_vars['obj']->mProductDisplayOptions,'selected' => $this->_tpl_vars['obj']->mProduct['display']), $this);?>

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
			<input type="text" value="<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" />
              <input name="ImageUpload" value="Upload" type="file" />
              <input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	<?php if ($this->_tpl_vars['obj']->mProduct['image']): ?>
	      		<img src="product_images/<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image" width="640"/>
	      	<?php endif; ?>
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
			<input type="text" value="<?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>
" />
              <input name="Image2Upload" value="Upload"  type="file" />
    		  <input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	<?php if ($this->_tpl_vars['obj']->mProduct['image_2']): ?>
	      		<img src="product_images/<?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image 2" width="640" />
	      	<?php endif; ?>
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
			<input type="text" value="<?php echo $this->_tpl_vars['obj']->mProduct['thumbnail']; ?>
" />
    		
              <input name="ThumbnailUpload" value="Upload"  type="file" />
    		<input class="button small black" style="width:100px;" type="submit" name="Upload" value="Upload" />
      	</div>
      	<div class="form-row">
	      	<?php if ($this->_tpl_vars['obj']->mProduct['thumbnail']): ?>
	      		<img src="product_images/<?php echo $this->_tpl_vars['obj']->mProduct['thumbnail']; ?>
" border="0" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 thumbnail" width="410" />
	      	<?php endif; ?>
      	</div>
     </div>
</div>
</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>