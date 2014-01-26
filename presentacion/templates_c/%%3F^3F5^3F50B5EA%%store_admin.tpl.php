<?php /* Smarty version 2.6.26, created on 2013-06-22 00:14:44
         compiled from store_admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'store_admin.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'store_admin','assign' => 'obj'), $this);?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Juassi - Login</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/master.css">
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/login.css">
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
css/tables.css">
  <!---jQuery Files-->
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/jquery.spinner.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/jquery-1.7.1.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/jquery-ui-1.8.17.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/styler.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/jquery.tipTip.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/colorpicker.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/sticky.full.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/global.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/flot/jquery.flot.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/flot/jquery.flot.resize.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/jquery.dataTables.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/forms/fileinput.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/forms/iphone-check.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/forms/jquery.validate.min.js"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/sh/shCore.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/sh/shBrushXml.js" type="text/javascript"></script>
  
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
  <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/flot/excanvas.min.js"></script>
  <![endif]-->
   <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
js/custom.js"></script>
  <![endif]-->
    <!---FadeIn Effect, Validation and Spinner-->
 
</head>
<body>
	<!--- HEADER -->

  <div class="header">
   <a href="dashboard.php"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/logo.png" alt="Logo" /></a> 
   <div class="styler">
     <ul class="styler-show">
       <li><div id="colorSelector-top-bar"></div></li>
       <li><div id="colorSelector-box-head"></div></li>
     </ul>
   </div>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mMenuCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="content container_12">
      
      
       
       
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      
      </div>
  </body>
</html>