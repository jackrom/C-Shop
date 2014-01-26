<?php /* Smarty version 2.6.26, created on 2014-01-12 03:38:26
         compiled from search_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'search_box.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'search_box','assign' => 'obj'), $this);?>

<!-- Search Widget -->
<div class="search-widget widget widget__sidebar">
	<div class="widget-content">
		<form action="<?php echo $this->_tpl_vars['obj']->mLinkToSearch; ?>
" class="search-form clearfix" method="post">
			 <input type="text" maxlength="100" id="search_string" name="search_string" value="<?php echo $this->_tpl_vars['obj']->mSearchString; ?>
"  placeholder="Buscar producto..." />
			<input type="checkbox" id="all_words" name="all_words" <?php if ($this->_tpl_vars['obj']->mAllWords == 'on'): ?> checked="checked" <?php endif; ?>/> Incluir todas las palabras
			<button type="submit" value="Search" name="Search"><i class="icon-search"></i></button>
		</form>
	</div>
</div>
<!-- /Search Widget -->