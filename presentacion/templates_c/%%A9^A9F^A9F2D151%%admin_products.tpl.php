<?php /* Smarty version 2.6.26, created on 2014-01-26 14:06:40
         compiled from admin_products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_products.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_products','assign' => 'obj'), $this);?>

<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?>
<div class="ad-notif-error small-mg grid_12"><p><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p></div>
<?php endif; ?>
<div id="back">
<p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentCategoriesAdmin; ?>
"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/left.png" alt="" />regresar a categor&iacute;as ...</a></p>
</div>
<div class="box grid_12">
	<div class="box-head">
		<h2>Editar productos de la categor&iacute;a: <?php echo $this->_tpl_vars['obj']->mCategoryName; ?>
</h2>
	</div>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToCategoryProductsAdmin; ?>
">
		  	<?php if ($this->_tpl_vars['obj']->mProductsCount == 0): ?>
			  <p class="no-items-found">There are no products in this category!</p>
			<?php else: ?>
			<div class="box-content no-pad">
	          <ul class="table-toolbar">
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/plus.png" alt="" /> Agregar</a></li>
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/delete.png" alt="" /> Eliminar</a></li>
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/save.png" alt="" /> Salvar</a></li>
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/print.png" alt="" /> Imprimir</a></li>
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/up.png" alt="" /> Ascendente</a></li>
	            <li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/down.png" alt="" /> Descendente</a></li>
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
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
					<tr>
				      <td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['name']; ?>
</td>
				      <td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['summary']; ?>
</td>
				      <td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['description']; ?>
</td>
				      <td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['price']; ?>
</td>
				      <td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['discounted_price']; ?>
</td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['product_id']; ?>
" id="tip-right" class="button small grey" value="Editar">
				      </td>
				    </tr>
				  <?php endfor; endif; ?>
				  </table>
				<?php endif; ?>
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