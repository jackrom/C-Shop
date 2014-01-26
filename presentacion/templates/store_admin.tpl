{load_presentation_object filename="store_admin" assign="obj"}
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Juassi - Login</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="{$obj->mSiteUrl}css/master.css">
  <link rel="stylesheet" href="{$obj->mSiteUrl}css/login.css">
  <link rel="stylesheet" href="{$obj->mSiteUrl}css/tables.css">
  <!---jQuery Files-->
  <script src="{$obj->mSiteUrl}js/jquery.spinner.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="{$obj->mSiteUrl}js/jquery-1.7.1.min.js"></script>
  <script src="{$obj->mSiteUrl}js/jquery-ui-1.8.17.min.js"></script>
  <script src="{$obj->mSiteUrl}js/styler.js"></script>
  <script src="{$obj->mSiteUrl}js/jquery.tipTip.js"></script>
  <script src="{$obj->mSiteUrl}js/colorpicker.js"></script>
  <script src="{$obj->mSiteUrl}js/sticky.full.js"></script>
  <script src="{$obj->mSiteUrl}js/global.js"></script>
  <script src="{$obj->mSiteUrl}js/flot/jquery.flot.min.js"></script>
  <script src="{$obj->mSiteUrl}js/flot/jquery.flot.resize.min.js"></script>
  <script src="{$obj->mSiteUrl}js/jquery.dataTables.min.js"></script>
  <script src="{$obj->mSiteUrl}js/forms/fileinput.js"></script>
  <script src="{$obj->mSiteUrl}js/forms/iphone-check.js"></script>
  <script src="{$obj->mSiteUrl}js/forms/jquery.validate.min.js"></script>
  <script src="{$obj->mSiteUrl}js/sh/shCore.js" type="text/javascript"></script>
  <script src="{$obj->mSiteUrl}js/sh/shBrushXml.js" type="text/javascript"></script>
  
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
  <script language="javascript" type="text/javascript" src="{$obj->mSiteUrl}js/flot/excanvas.min.js"></script>
  <![endif]-->
   <script src="{$obj->mSiteUrl}js/custom.js"></script>
  <![endif]-->
    <!---FadeIn Effect, Validation and Spinner-->
 
</head>
<body>
	<!--- HEADER -->

  <div class="header">
   <a href="dashboard.php"><img src="{$obj->mSiteUrl}img/logo.png" alt="Logo" /></a> 
   <div class="styler">
     <ul class="styler-show">
       <li><div id="colorSelector-top-bar"></div></li>
       <li><div id="colorSelector-box-head"></div></li>
     </ul>
   </div>
  </div>
  {include file=$obj->mMenuCell}
  <div class="content container_12">
      
      
       
       
          {include file=$obj->mContentsCell}
      
      </div>
  </body>
</html>
