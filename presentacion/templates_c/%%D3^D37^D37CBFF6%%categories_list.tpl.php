<?php /* Smarty version 2.6.26, created on 2013-06-15 18:37:16
         compiled from categories_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'categories_list.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'categories_list','assign' => 'obj'), $this);?>

<!-- Categories Widget -->
<div class="categories widget widget__sidebar">
	<h3 class="widget-title">Categorias</h3>
	<div class="widget-content">
		<div class="list list-style__check">
		  <ul>
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
		    <?php $this->assign('selected', ""); ?>
		    <?php if (( $this->_tpl_vars['obj']->mSelectedCategory == $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id'] )): ?>
		      <?php $this->assign('selected', "class=\"selected\""); ?>
		    <?php endif; ?>
		    <li>
		      <a <?php echo $this->_tpl_vars['selected']; ?>
 href="<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['link_to_category']; ?>
">
		        <?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['name']; ?>

		      </a>
		    </li>
		  <?php endfor; endif; ?>
		  </ul>
		</div>
	</div>
</div>
<!-- /Categories Widget -->
