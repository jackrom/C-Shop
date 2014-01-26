<?php
  // Set the 500 status code
  header('HTTP/1.0 500 Internal Server Error');
  require_once 'privado/config.php';
  require_once PRESENTACION_DIR . 'link.php';
?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>
      Juassi Shop Pagina no encontrada (404)
    </title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
	================================================== -->
	<!-- Normalize default styles -->
	<link rel="stylesheet" href="css/normalize.css" media="screen" />
	<!-- Skeleton grid system -->
	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<!-- FontAwesome (Icon Fonts) -->
	<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" />
	<!-- Base Template Styles-->
	<link rel="stylesheet" href="css/base.css" media="screen" />
	<!-- Template Styles-->
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css" media="screen" />
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
	<!-- Magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css" media="screen" />
	<!-- Styles for Mobile devices -->
	<link rel="stylesheet" href="css/responsive.css" media="screen" />
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie/ie8.css" media="screen" />
	<![endif]-->
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	
</head>

<body>
	<div id="top-bar" class="top-bar">
			<div class="container clearfix">
				<div class="grid_6 top-txt hidden-phone">
					Bienvenidos a nuestra website!
				</div>
			</div>
		</div>
  <div class="main-box">

  <!-- BEGIN PAGE TITLE -->
  		
			<div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE TITLE -->
			<div class="container clearfix">
			<div class="grid_12">
			<!-- BEGIN LOGO -->
			<div class="pagina_error">
				<h1>500</h1>
				<p><strong>Lamentandolo mucho nuestro website esta experimentando dificultades.</strong></p>
				<p>
            Por favor
            <a href="<?php echo Link::Build(''); ?>">visitanos</a> pronto,
            o <a href="<?php echo ADMIN_ERROR_MAIL; ?>">contactanos</a>.
          </p>
          <p>Muchisimas Gracias!</p>
          <p>El equipo de Juassi Studios.</p>
			</div>
			<!-- END LOGO -->
			</div>
		</div>
	</div>	
  </body>
</html>
