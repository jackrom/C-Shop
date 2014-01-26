<?php /* Smarty version 2.6.26, created on 2013-07-14 17:03:08
         compiled from amazon_products_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'amazon_products_list.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'amazon_products_list','assign' => 'obj'), $this);?>

<h1><?php echo $this->_tpl_vars['obj']->mDepartmentName; ?>
</h1>
<p class="description"><?php echo $this->_tpl_vars['obj']->mDepartmentDescription; ?>
</p>


<?php if ($this->_tpl_vars['obj']->mProducts): ?>
<!-- Lista de Productos -->
<!-- Content -->
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
		<article class="entry entry__simple entry__medium">
			<div class="clearfix">
				<!-- begin post image -->
				<?php if ($this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['image'] != ""): ?>
					<figure class="thumb">
						<a href="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_product']; ?>
">
			            <img src="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['image']; ?>
"
			             alt="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['ItemAttributes']; ?>
" width="200" height="200" />
			          </a>
					</figure>
				<?php endif; ?>
				<!-- end post image -->
				
				<!-- begin post heading -->
				<header class="entry-header">
					<div class="entry-header-inner">
						<h3 class="entry-title"><a href="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_product']; ?>
"><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['item_name']; ?>
</a></h3>
						<p class="post-meta">
							<span class="post-meta-date"><a href="#"><i class="icon-calendar"></i>Jan 3, 2013</a></span>
							<span class="post-meta-cats"><i class="icon-tag"></i><a href="#">art</a>, <a href="#">photo</a></span>
							<span class="post-meta-author"><a href="#"><i class="icon-user"></i><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['ItemAttributes']; ?>
</a></span>
							<span class="post-meta-comments"><a href="#"><i class="icon-comments-alt"></i>16</a></span>
						</p>
					</div>
				</header>
				<!-- end post heading -->
				
				<!-- begin post content -->
				<div class="entry-content">
									</div>
				<!-- end post content -->
				<div class="clearfix">
				<!-- begin post footer -->
				<footer class="entry-footer botones">
										<div class="grid_9 listProducts"> 
						<a target="_blank" href="<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['link_to_product']; ?>
" class="button button__secondary segundo"><span class="button-inner"><i class="icon-plus"></i> Informaci&oacute;n producto </span></a>
					 </div>
				</footer>
				<!-- end post footer -->
				</div>
				
				<div class="clearfix">
					<div class="grid_3 mostrarPrecio">
						<?php if ($this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['price'] != ""): ?>
			          		<span class="ico-holder-inner">&euro;<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['k']['index']]['price']; ?>
</span>
			          	<?php endif; ?>
					</div>
				</div>
			</div>
		</article>
	<?php endfor; endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['obj']->mrTotalPages > 1): ?>
	<!-- Paginacion -->
	<?php if ($this->_tpl_vars['obj']->mProductListPages > 0): ?>
		<p><?php echo $this->_tpl_vars['obj']->mrTotalPages; ?>
</p>
		<ul class="pagination">

  		<?php if ($this->_tpl_vars['obj']->mLinkToPreviousPage): ?>
  			<li class="prev"><a href="<?php echo $this->_tpl_vars['obj']->mLinkToPreviousPage; ?>
"><i class="icon-angle-left"> anterior</i></a></li>
  		<?php else: ?>
  			<li class="prev"><a href="#"><i class="icon-angle-left"> anterior</i></a></li>
  		<?php endif; ?>

	  	<?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProductListPages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
	    	<?php if ($this->_tpl_vars['obj']->mPage == $this->_sections['m']['index_next']): ?>
	    		<li class="current"><a href=""><?php echo $this->_sections['m']['index_next']; ?>
</a></li>
	    	<?php else: ?>
	    		<li><a href="<?php echo $this->_tpl_vars['obj']->mProductListPages[$this->_sections['m']['index']]; ?>
"><?php echo $this->_sections['m']['index_next']; ?>
</a></li>
	    	<?php endif; ?>
	  	<?php endfor; endif; ?>

  		<?php if ($this->_tpl_vars['obj']->mLinkToNextPage): ?>
  			<li class="next"><a href="<?php echo $this->_tpl_vars['obj']->mLinkToNextPage; ?>
">siguiente <i class="icon-angle-right"></i></a></li>
  		<?php else: ?>
  			<li class="next"><a href="#">siguiente <i class="icon-angle-right"></i></a></li>
  		<?php endif; ?>

		</ul>
	<!-- Paginacion / Final -->
	<?php endif; ?>
<?php endif; ?>