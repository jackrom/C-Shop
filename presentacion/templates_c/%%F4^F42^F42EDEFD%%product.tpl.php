<?php /* Smarty version 2.6.26, created on 2014-01-26 09:15:00
         compiled from product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'product.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'product','assign' => 'obj'), $this);?>


<!-- Project Navigation -->
<div class="project-nav">
	<a href="#" class="prev">&larr; Previous</a>
	<a href="#" class="next">Next &rarr;</a>
</div>
<!-- Project Navigation / End -->


<div class="clearfix">
<div class="grid_9 alpha">
	<h1 class="title"  style="margin-bottom:0px;"><?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
</h1>
	<div class="project-desc project-desc__single">
		<span class="desc" style="margin-bottom:20px;"><?php echo $this->_tpl_vars['obj']->mProduct['summary']; ?>
</span>
	</div>
</div>


<div class="grid_9 alpha" style="margin-top:20px;margin-left:0px;">
	<div class="project-desc project-desc__single">
		<div class="grid_7 alpha">
			<a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
temas/<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
.html" target="_blank" class="button button__secondary"><span class="button-inner">Ver Recurso Online</span></a>
			<a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
contenidos/<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
/" target="_blank" class="button button__secondary"><span class="button-inner">Ver Fotos</span></a>
		</div>
		<div class="grid_2 omega">
			<?php if ($this->_tpl_vars['obj']->mProduct['discounted_price'] != 0): ?>
		    	<p class="oferta" style="text-align:right;">Oferta: <span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['discounted_price']; ?>
</span></p>
		  	<?php else: ?>
		    	<p class="precio" style="text-align:right;">Precio: <span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
</span></p>
		  	<?php endif; ?>
	  	</div>
	</div>
</div>


<div class="grid_9 alpha">
<!-- Project Thumbnail -->
	<div class="flexslider project-thumbs flexslider__nav-on">
		<ul class="slides">
			<?php if ($this->_tpl_vars['obj']->mProduct['image']): ?>
				<li><img src="<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image" height="200" width="600"></li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['obj']->mProduct['image_2']): ?>
				<li><img src="<?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image 2" height="200" width="600"></li>
			<?php endif; ?>
		</ul>
	</div>
<!-- Project Thumbnail / End -->
</div>

<div class="grid_3 alpha recomendar">
	<ul class="social-links social-links__small">
		<li class="link-twitter">
			<a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=Conoce las características de: <?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 – via @jcarlosreyesc <?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
-p<?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
','ventanacompartir', 'top=160, left=100, toolbar=0, status=0, width=650, height=350');"><i class="icon-twitter"></i></a>
		</li>
		<li class="link-facebook">
			<a href="javascript: void(0);" 
				onclick="
					window.open(
						'http://www.facebook.com/sharer.php?u=http://www.jcarlosreyesc.yensi.com.ve/tienda/<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
-p<?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
',
						'ventanacompartir', 
						'top=160, left=100,toolbar=0, status=0, width=650, height=350');">
			<i class="icon-facebook"></i></a>
		</li>
		<li class="link-google">
			<a href="https://plus.google.com/share?url=http://www.jcarlosreyesc.yensi.com.ve/tienda/<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
-p<?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
" onclick="javascript:window.open(this.href,
			  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="icon-google-plus"></i></a></li>
		<li class="link-pinterest"><a href="#"><i class="icon-pinterest"></i></a></li>
		<li class="link-rss"><a href="#"><i class="icon-rss"></i></a></li>
	</ul>
</div>

<div class="grid_3 alpha botonera">
	
	<?php if ($this->_tpl_vars['obj']->mLinkToContinueShopping): ?>
			<footer class="project-footer">
			
								<form class="add-product-form" target="_self" method="post" action="<?php echo $this->_tpl_vars['obj']->mProduct['link_to_add_product']; ?>
"
				 onsubmit="return addProductToCart(this);">
				
								<p class="attributes">
				
								<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProduct['attributes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				
				  				  <?php if ($this->_sections['k']['first'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_prev']]['attribute_name']): ?>
				    <?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
:
				  <select name="attr_<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
">
				  <?php endif; ?>
				
				    				    <option value="<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>
">
				      <?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>

				    </option>
				
				  				  <?php if ($this->_sections['k']['last'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_next']]['attribute_name']): ?>
				  </select>
				  <?php endif; ?>
				
				<?php endfor; endif; ?>
				</p>
				
								<p>
				  <input type="submit" name="add_to_cart" value="Agregar al carrito" class="button button__tertiary button__icon primero" />
				</p>
				</form>
			
				<a href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
" class="button button__secondary"><span class="button-inner">Continuar con la compra</span></a>
				<a href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
" class="button button__secondary"><span class="button-inner" style="margin-left:10px;">Consultar al vendedor</span></a>
				<?php if ($this->_tpl_vars['obj']->mShowEditButton): ?>
					<form action="<?php echo $this->_tpl_vars['obj']->mEditActionTarget; ?>
" target="_self" method="post" class="edit-form">
						<div class="button-wrapper">
							<input type="submit" name="submit_edit" id="submit" value="Edit Product Details">
						</div>
					</form>
				<?php endif; ?>
				
			</footer>
		<?php endif; ?>
</div>



<div class="grid_6 omega descripcion">
	<!-- Project Description -->
	<div class="project-desc project-desc__single">
		<h4 style="margin-top:10px;">Descripci&oacute;n</h4>
		<div class="project-excerpt" style="margin-top:-15px;text-align:justify;">
			<?php echo $this->_tpl_vars['obj']->mProduct['description']; ?>

				
		
	</div>
	<!-- Project Description / End -->
</div>


<div class="grid_9 omega">
	<h3>Buscar productos similares en nuestro catalogo:</h3>
	<ol>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mLocations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <li class="navigation">
	    <?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_department']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['department_name']; ?><?php echo '</a>'; ?>

	    &raquo;
	    <?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_category']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['category_name']; ?><?php echo '</a>'; ?>

	  </li>
	<?php endfor; endif; ?>
	</ol>
</div>



<div class="grid_9" style="margin-bottom:50px; ">
<div style="margin-bottom:0px;left:90px;position:absolute;">
<a href="https://twitter.com/juassic" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size = "large">Follow Juassi</a>
</div>
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" ></div>
<div class="fb-like grid_4" style="position:absolute; left:235px;margin-top:-28px;" data-href="http://www.jcarlosreyesc.yensi.com.ve/tienda/<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
-p<?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
" data-send="true" data-show-faces="true" data-font="tahoma"></div>
<div id="fb-root" class="facebookLike"></div>
</div>

<div class="clearfix">
</div>

							
			            	
<?php if ($this->_tpl_vars['obj']->mRecommendations): ?>
<div class="grid_9 alpha recomendaciones">
	<div class="recomendaciones">
		<h3>Quienes compraron esto, tambi&eacute;n compraron esto:</h3>
		<ol>
		  <?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mRecommendations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		  <li>
		    <?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['link_to_product']; ?><?php echo '"> '; ?><?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['product_name']; ?><?php echo '</a>'; ?>

		    <span class="list"> - <?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['description']; ?>
</span>
		  </li>
		  <?php endfor; endif; ?>
		</ol>
	</div>
</div>
<?php endif; ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reviews.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	


		            	




<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- Facebook. -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=276583045711474";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>