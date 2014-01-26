<?php /* Smarty version 2.6.26, created on 2013-06-24 11:09:58
         compiled from admin_categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_categories.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_categories','assign' => 'obj'), $this);?>

<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?>
<div class="ad-notif-error small-mg grid_12"><p><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p></div>
<?php endif; ?>

<div id="back">
<p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentsAdmin; ?>
"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/left.png" alt="" />regresar a departamentos ...</a></p>
</div>

<div class="box grid_12">
	<div class="box-head">
		<h2>Editar categorias del departamento: <?php echo $this->_tpl_vars['obj']->mDepartmentName; ?>
</h2>
	</div>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentCategoriesAdmin; ?>
">
			<?php if ($this->_tpl_vars['obj']->mCategoriesCount == 0): ?>
			  <p class="no-items-found">No existen categorias en este departamento!</p>
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
					      <th width="150">Nombre de la categor&iacute;a</th>
					      <th>Descripcion de la categor&iacute;a</th>
					      <th width="450">Opciones del administrador</th>
					    </tr>
					</thead>
					<tbody>
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mCategories) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						    <?php if ($this->_tpl_vars['obj']->mEditItem == $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']): ?>
						    <tr class="even">
						      <td>
						        <input type="text" name="name" value="<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['name']; ?>
" size="30" />
						      </td>
						      <td>
						        <?php echo '<textarea name="description" rows="3" cols="60">'; ?><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['description']; ?><?php echo '</textarea>'; ?>

						      </td>
						      <td>
						        <input type="submit" class="button small black" style="width:100px;" name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Editar Productos" />
						        <input type="submit" class="button small black" style="width:100px;" name="submit_update_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Actualizar" />
						        <input type="submit" class="button small black" style="width:100px;" name="cancel"  value="Cancelar" />
						        <input type="submit" class="button small grey" style="width:100px;" name="submit_delete_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Eliminar" />
						      </td>
						    </tr>
						    <?php else: ?>
						    <tr class="even">
						      <td ><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['name']; ?>
</td>
						      <td><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['description']; ?>
</td>
						      <td>
						        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Editar Productos" />
						        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Editar" />
						        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"  value="Eliminar" />
						      </td>
						    </tr>
						    <?php endif; ?>
						  <?php endfor; endif; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>
	<div class="box grid_12">
		<div class="box-head">
			<h2>Agregar nueva categor&iacute;a</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<tr>
					<td><input type="text" name="category_name" value="" placeholder="nombre" size="70" /></td>
					<td><input type="text" name="category_description" value="" placeholder="descripcion" size="160" /></td>
					<td><input class="button small black" style="width:100px;" type="submit" name="submit_add_cat_0" value="Agregar" /></td>
				</tr>
			</table>
		</div>
	</form>
</div>
</div>
 
<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>