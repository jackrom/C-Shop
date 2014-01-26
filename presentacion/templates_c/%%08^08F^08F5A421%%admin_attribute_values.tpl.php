<?php /* Smarty version 2.6.26, created on 2013-06-24 11:09:50
         compiled from admin_attribute_values.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_attribute_values.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_attribute_values','assign' => 'obj'), $this);?>

<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?>
<div class="ad-notif-error small-mg grid_12"><p><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p></div>
<?php endif; ?>

<div id="back">
<p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToAttributesAdmin; ?>
"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/left.png" alt="" />regresar a los atributos ...</a></p>
</div>


<div class="box grid_6">
	<div class="box-head">
		<h2>Editar valores del producto <?php echo $this->_tpl_vars['obj']->mAttributeName; ?>
</h2>
	</div>
		<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAttributeValuesAdmin; ?>
">
		<?php if ($this->_tpl_vars['obj']->mAttributeValuesCount == 0): ?>
		  <p class="no-items-found">No existen valores para este atributo!</p>
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
				      <th>Attribute Value</th>
				      <th width="370">&nbsp;</th>
				    </tr>
				</thead>
				<tbody>
				  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mAttributeValues) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				    <?php if ($this->_tpl_vars['obj']->mEditItem == $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']): ?>
				    <tr>
				      <td>
				        <input type="text" name="value" value="<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['value']; ?>
" size="30" />
				      </td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_update_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Actualizar" />
				        <input class="button small black" style="width:100px;" type="submit" name="cancel" value="Cancelar" />
				        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Eliminar" />
				      </td>
				    </tr>
				    <?php else: ?>
				    <tr>
				      <td><?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['value']; ?>
</td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Editar" />
				        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Eliminar" />
				      </td>
				    </tr>
				    <?php endif; ?>
				  <?php endfor; endif; ?>
				  </table>
				<?php endif; ?>
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