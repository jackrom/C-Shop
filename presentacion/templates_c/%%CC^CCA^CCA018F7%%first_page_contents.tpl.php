<?php /* Smarty version 2.6.26, created on 2014-01-26 07:07:21
         compiled from first_page_contents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'first_page_contents.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'first_page_contents','assign' => 'obj'), $this);?>

<div class="admin_button">
	Acceder a la <a href="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">p&aacute;gina de administraci&oacute;n</a>
</div>
<!-- Slider -->
<section class="primary__section video-static" style="margin-bottom:40px;">
	<div class="primary__section-inner">
		<div class="container clearfix">
			<div class="grid_3">
				<!-- Image -->
				<figure class="video-holder">
					<img src="img/digitalk_large.png" height="150" width="300" alt="">
				</figure>
				<!-- Image / End -->
			</div>
			<div class="grid_5">
				<div class="static-desc">
					<h2>
						<small>publicaci&oacute;n bimensual</small>
						DIGITALK+
					</h2>
					<p>Digitalk es una publicaci&oacute;n bimensual que trata sobre las nuevas y mas recientes caracterist&iacute;cas de los lenguajes de programaci&oacute;n web, entre ellos
					HTML5 como el principal y en el que girar&aacute; toda la informaci&oacute;n, javascript, como uno de los mayores soportes de las nuevas caracterist&iacute;cas de HTML5, JQuery,
					PHP, AJAX, MySQL y los m&uacute;ltiples framework que complementasn a los antes nombrados. Te invitamos a suscribirte ya, a esta fascinante publicaci&oacute;n donde encontrar&aacute;s noticias, tips, revelaciones, 
					trucos, tutoriales, ofertas y muchisimas mas cosas que te interesar&aacute;n.</p>
					<a href="digitalk-p96" class="button button__small"><span class="button-inner">Suscribete ya!</span></a> &nbsp; 
					<a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
digitalk/" class="button button__small"><span class="button-inner">+ Informaci&oacute;n</span></a> &nbsp;
					Compartelo!!! &nbsp;
					<a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=La revista para el desarrollador web de hoy: Digitalk Ð via @jcarlosreyesc http://www.jcarlosreyesc.yensi.com.ve/tienda/digitalk-p96','ventanacompartir', 'top=160, left=100, toolbar=0, status=0, width=650, height=350');"><i class="icon-twitter"></i></a> &nbsp;
					<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?s=100&p[url]=http://www.jcarlosreyesc.yensi.com.ve/tienda/&p[images][0]=http://www.jcarlosreyesc.yensi.com.ve/tienda/product_images/digitalk_thumbnail.png&p[title]=Digitalk - La Revista Digital para desarrolladores web','ventanacompartir', 'top=160, left=100,toolbar=0, status=0, width=650, height=350');">
						<i class="icon-facebook"></i></a> &nbsp;
					<a href="https://plus.google.com/share?url=http://www.shop.juassi.com/digitalk-p96" onclick="javascript:window.open(this.href,
			  			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-google-plus"></i></a> &nbsp;
					<a href="#"><i class="icon-pinterest"></i></a> &nbsp;
					<a href="#"><i class="icon-rss"></i></a>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Slider / End -->
				


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>