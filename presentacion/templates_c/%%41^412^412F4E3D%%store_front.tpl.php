<?php /* Smarty version 2.6.26, created on 2014-01-26 07:09:08
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),array('function', 'load_presentation_object', 'store_front.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<html>
  <head>
  	  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
</title>
	<meta name="description" content="<?php echo $this->_tpl_vars['obj']->mPageDescription; ?>
">
	<meta name="author" content="Juan Carlos Reyes | Juassi Studios">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
			<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/normalize.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/skeleton.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/base.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/style.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/superfish.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/flexslider.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/magnific-popup.css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/responsive.css" media="screen" />
	
		
		
		<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/apple-touch-icon-144x144.png">
	
		
	 
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jcarlosreyesc">
    <meta name="twitter:title" content="HTML5 Canvas - Referencias y ejemplos">
    <meta name="twitter:description" content="En este libro podrás consultar y revisar todos los aspectos técnicos del elemento canvas, tales como sus clases, sus métodos y sus propiedades, al igual que examinar ejemplos prácticos en cada uno de los apartados técnicos del canvas, con el objetivo de que puedas entender facil y claramente para que sirven y como trabajan.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image:src" content="http://juassi.com/tienda/product_images/refCanvas_nueva.png">
    <meta name="twitter:domain" content="http://juassi.com/tienda/html5-canvas-referencias-y-ejemplos-p80/">
    <meta name="twitter:app:name:iphone" content="">
    <meta name="twitter:app:name:ipad" content="">
    <meta name="twitter:app:name:googleplay" content="">
    <meta name="twitter:app:url:iphone" content="">
    <meta name="twitter:app:url:ipad" content="">
    <meta name="twitter:app:url:googleplay" content="">
    <meta name="twitter:app:id:iphone" content="">
    <meta name="twitter:app:id:ipad" content="">
    <meta name="twitter:app:id:googleplay" content="">
	
  </head>
  
  
  <body>
  
  <!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<div id="top-bar" class="top-bar">
			<div class="container clearfix">
				<div class="grid_6 top-txt hidden-phone">
					Bienvenidos a nuestra website!
				</div>
				<div class="grid_6 acc-txt mobile-nomargin">
					
				</div>
			</div>
		</div>
		<div class="main-box">
			<!-- BEGIN HEADER -->
			<header id="header" class="header">
				
				<div class="container clearfix">
					<div class="grid_4 mobile-nomargin">
						<!-- BEGIN LOGO -->
						<div id="logo" class="logo">
							<h1>
								<a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
">JUASSI</a>
							</h1>
							
							<p class="tagline">aplicaciones web basadas en HTML5</p>
						</div>
						<!-- END LOGO -->
					</div>
					
					<div class="grid_8 mobile-nomargin">
						<!-- Main Navigation -->
						<nav class="primary clearfix">
							<!-- Menu -->
							<ul class="sf-menu">
								<li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
">Home</a></li>
								<li class="current-menu-item"><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
">Tienda</a></li>
								<li><a href="http://blog.juassi.com">Blog</a></li>
								<li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
portfolio">Recursos</a>
									<ul>
										<li><a href="#">Aplicaciones</a>
											<ul>
												<li><a href="index-flex-thumbs.html">C-Blog</a></li>
												<li><a href="index-flex.html">J-Shop</a></li>
												<li><a href="index-camera.html">crearGraficos</a></li>
												<li><a href="index-refine.html">S-CMS</a></li>
											</ul>
										</li>
										<li><a href="#">Temas</a>
											<ul>
												<li><a href="index-2.html">C-Blog</a></li>
												<li><a href="index-layout2.html">Wordpress</a></li>
												<li><a href="index-layout3.html">Joomla</a></li>
												<li><a href="index-layout4.html">Drupal</a></li>
												<li><a href="index-layout4.html">Magento</a></li>
												<li><a href="index-layout4.html">Prestashp</a></li>
											</ul>
										</li>
										<li><a href="#">Libros</a></li>
										<li><a href="#">Tutoriales</a>
											<ul>
												<li><a href="index-2.html">Propios</a></li>
												<li><a href="index-layout2.html">De terceros</a></li>
											</ul>
										</li>
										<li><a href="#">Videos</a></li>
									</ul>
								</li>
								<li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
foro">Foro</a></li>
								<li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/">Soporte</a>
									<ul>
										<li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/announcements.php">Anuncios</a></li>
					                    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/ticketsnewguest.php">Soporte t&eacute;cnico</a></li>
					                    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/faq.php">FAQ</a></li>
					                    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/manuals.php">Manuales</a></li>
					                    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/downloads.php">Descargas</a></li>
					                    <li><a href="<?php echo $this->_tpl_vars['obj']->mSiteUrlRoot; ?>
soporte/contact.php">Contacto</a></li>
					                </ul>
								</li>
							</ul>
							<!-- Fin / Menu -->
						</nav>
						<!-- Main Navigation / End -->
					</div>
				</div>
				
			</header>
			<!-- END HEADER -->
			
			<!-- BEGIN PAGE TITLE -->
			<div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
								<h1>Juassi Shop</h1>
							</div>
							<!-- Breadcrumbs -->
							<ul class="breadcrumbs">
								<li><a href="../index.php">Home</a></li>
								<li>Juassi Shop</li>
							</ul>
							<!-- Breadcrumbs / End -->
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE TITLE -->
			
			
			<!-- BEGIN CONTENT WRAPPER -->
			<div id="content-wrapper" class="content-wrapper">
				<div class="container">
					<div class="content grid_9" id="content">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				
				<!-- Content / End -->
	
				 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				 </div>			
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
  
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 