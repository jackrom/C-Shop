<?php /* Smarty version 2.6.26, created on 2013-06-25 21:43:31
         compiled from department.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'department.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'department','assign' => 'obj'), $this);?>

<div class="caja_departamento">
<h1 class="title"><?php echo $this->_tpl_vars['obj']->mName; ?>
</h1>
<p class="description"><?php echo $this->_tpl_vars['obj']->mDescription; ?>
</p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>