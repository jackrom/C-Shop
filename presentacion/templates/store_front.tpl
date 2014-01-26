{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<html>
  <head>
  	{* Necesarios para las paginas basicas *}
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>{$obj->mPageTitle}</title>
	<meta name="description" content="{$obj->mPageDescription}">
	<meta name="author" content="Juan Carlos Reyes | Juassi Studios">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	{* Meta especifica para mobiles *}
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	{* CSS *}
	{* Normalize default styles *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/normalize.css" media="screen" />
	{* Skeleton grid system *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/skeleton.css" media="screen" />
	{* FontAwesome (Icon Fonts) *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/font-awesome.min.css" media="screen" />
	{* Base Template Styles*}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/base.css" media="screen" />
	{* Template Styles *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/style.css" media="screen" />
	{* Superfish *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/superfish.css" media="screen" />
	{* Flexslider *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/flexslider.css" media="screen" />
	{* Magnific popup *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/magnific-popup.css" media="screen" />
	{* Styles for Mobile devices *}
	<link rel="stylesheet" href="{$obj->mSiteUrl}css/responsive.css" media="screen" />
	
	{* [if lt IE 9]>
		<link rel="stylesheet" href="{$obj->mSiteUrl}css/ie/ie8.css" media="screen" />
	<![endif] *}
	
	{* [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] *}
	
	{* Favicon *}
	<link rel="shortcut icon" href="{$obj->mSiteUrl}images/favicon.ico">
	<link rel="apple-touch-icon" href="{$obj->mSiteUrl}images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{$obj->mSiteUrl}images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{$obj->mSiteUrl}images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="{$obj->mSiteUrl}images/apple-touch-icon-144x144.png">
	
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jcarlosreyesc">
    <meta name="twitter:title" content="HTML5 Canvas - Referencias y ejemplos">
    <meta name="twitter:description" content="En este libro podrás consultar y revisar todos los aspectos técnicos del elemento canvas, tales como sus clases, sus métodos y sus propiedades, al igual que examinar ejemplos prácticos en cada uno de los apartados técnicos del canvas, con el objetivo de que puedas entender facil y claramente para que sirven y como trabajan.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image:src" content="http://shop.juassi.com/product_images/refCanvas_nueva.png">
    <meta name="twitter:domain" content="http://shop.juassi.com/index.php?ProductId=80">
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
								<a href="{$obj->mSiteUrl}">JUASSI</a>
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
								<li><a href="http://juassi.com">Home</a></li>
								<li class="current-menu-item"><a href="{$obj->mSiteUrl}">Tienda</a></li>
								<li><a href="http://blog.juassi.com">Blog</a></li>
								<li><a href="{$obj->mSiteUrlRoot}portfolio">Recursos</a>
									<ul>
										<li><a href="#">Aplicaciones</a>
											<ul>
												<li><a href="http://juassi.com/">Juassi-Blog</a></li>
												<li><a href="http://juassi.com/">C-Shop</a></li>
												<li><a href="http://juassi.com/">crearGraficos</a></li>
												<li><a href="http://juassi.com/">S-CMS</a></li>
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
												<li><a href="http://juassi.com/">Propios</a></li>
												<li><a href="http://juassi.com/">De terceros</a></li>
											</ul>
										</li>
										<li><a href="http://juassi.com/">Videos</a></li>
									</ul>
								</li>
								<li><a href="http://juassi.com/foro">Foro</a></li>
								<li><a href="http://juassi.com/soporte/">Soporte</a>
									<ul>
										<li><a href="http://juassi.com/soporte/announcements.php">Anuncios</a></li>
					                    <li><a href="http://juassi.com/soporte/ticketsnewguest.php">Soporte t&eacute;cnico</a></li>
					                    <li><a href="http://juassi.com/soporte/faq.php">FAQ</a></li>
					                    <li><a href="http://juassi.com/soporte/manuals.php">Manuales</a></li>
					                    <li><a href="http://juassi.com/soporte/downloads.php">Descargas</a></li>
					                    <li><a href="http://juassi.com/soporte/contact.php">Contacto</a></li>
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
						{include file=$obj->mContentsCell}
					</div>
				
				<!-- Content / End -->
	
				 {include file="sidebar.tpl"}
				 </div>			
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
  
 {include file="footer.tpl"}
 