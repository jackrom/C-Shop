<?php /* Smarty version 2.6.26, created on 2013-06-22 07:53:25
         compiled from admin_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_menu.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_menu','assign' => 'obj'), $this);?>

<div class="top-bar">
      <ul id="nav">
        <li id="user-panel">
          <img src="img/nav/usr-avatar.jpg" id="usr-avatar" alt="" />
          <div id="usr-info">
            <p id="usr-name">Bienvenido,  Juan Carlos </p>
            <p id="usr-notif">Tienes 6 notificaciones. <a href="#">Ver</a></p>
            <p><a href="#">Preferencias</a><a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreFront; ?>
">Ver tienda</a><a href="<?php echo $this->_tpl_vars['obj']->mLinkToLogout; ?>
">Salir</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
        
         <li class="nav-item">
           <a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreAdmin; ?>
"><img src="img/nav/dash-active.png" alt="" /><p>Catalogo</p></a>
         </li>
         
         <li class="nav-item">
           <a href="<?php echo $this->_tpl_vars['obj']->mLinkToAttributesAdmin; ?>
"><img src="img/nav/anlt.png" alt="" /><p>Atributos</p></a>
         </li>
         
         <li class="nav-item">
           <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCartsAdmin; ?>
"><img src="img/nav/tb.png" alt="" /><p>Carritos</p></a>
         </li>
         
         <li class="nav-item">
           <a href="<?php echo $this->_tpl_vars['obj']->mLinkToOrdersAdmin; ?>
"><img src="img/nav/cal.png" alt="" /><p>Ordenes</p></a>
         </li>
         
                </ul>
      </li>
     </ul>
  </div> 


  