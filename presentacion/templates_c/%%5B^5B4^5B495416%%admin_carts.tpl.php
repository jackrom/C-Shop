<?php /* Smarty version 2.6.26, created on 2013-06-24 11:09:38
         compiled from admin_carts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_carts.tpl', 2, false),array('function', 'html_options', 'admin_carts.tpl', 17, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_carts','assign' => 'obj'), $this);?>


<?php if ($this->_tpl_vars['obj']->mMessage): ?>
<div class="ad-notif-success small-mg grid_8"><p><?php echo $this->_tpl_vars['obj']->mMessage; ?>
</p></div>
<?php endif; ?>

<div class="box grid_8">
	<div class="box-head">
		<h2>Administraci&oacute;n de los carritos de compra de los usuarios:</h2>
	</div>
	<div class="box-content no-pad">
		<form action="<?php echo $this->_tpl_vars['obj']->mLinkToCartsAdmin; ?>
" method="post">
		  <table class="display">
		  	<tbody>
		  		<tr>
				    <td>Seleccionar carritos de la compra: <?php echo smarty_function_html_options(array('name' => 'days','options' => $this->_tpl_vars['obj']->mDaysOptions,'selected' => $this->_tpl_vars['obj']->mSelectedDaysNumber), $this);?>
 </td>
				    <td><input class="button small black" style="width:200px;" type="submit" name="submit_count" value="Contar los viejos carritos de compra" /></td>
				    <td><input class="button small grey" style="width:200px;" type="submit" name="submit_delete" value="Eliminar los viejos carritos de compra" /></td>
		     	</tr>
		     </tbody>
		  </table>
		</form>
	</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>