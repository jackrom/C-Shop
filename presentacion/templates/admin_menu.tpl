{* admin_menu.tpl *}
{load_presentation_object filename="admin_menu" assign="obj"}
<div class="top-bar">
      <ul id="nav">
        <li id="user-panel">
          <img src="img/nav/usr-avatar.jpg" id="usr-avatar" alt="" />
          <div id="usr-info">
            <p id="usr-name">Bienvenido,  Juan Carlos </p>
            <p id="usr-notif">Tienes 6 notificaciones. <a href="#">Ver</a></p>
            <p><a href="#">Preferencias</a><a href="{$obj->mLinkToStoreFront}">Ver tienda</a><a href="{$obj->mLinkToLogout}">Salir</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
        
         <li class="nav-item">
           <a href="{$obj->mLinkToStoreAdmin}"><img src="img/nav/dash-active.png" alt="" /><p>Catalogo</p></a>
         </li>
         
         <li class="nav-item">
           <a href="{$obj->mLinkToAttributesAdmin}"><img src="img/nav/anlt.png" alt="" /><p>Atributos</p></a>
         </li>
         
         <li class="nav-item">
           <a href="{$obj->mLinkToCartsAdmin}"><img src="img/nav/tb.png" alt="" /><p>Carritos</p></a>
         </li>
         
         <li class="nav-item">
           <a href="{$obj->mLinkToOrdersAdmin}"><img src="img/nav/cal.png" alt="" /><p>Ordenes</p></a>
         </li>
         
         {*
         <li class="nav-item">
           <a href="widgets.html"><img src="img/nav/widgets.png" alt="" /><p>Widgets</p></a>
         </li>
        
         <li class="nav-item">
           <a href="grid.html"><img src="img/nav/grid.png" alt="" /><p>Grid</p></a>
           <ul class="sub-nav">
            <li><a href="#">12 Columns</a></li>
            <li><a href="#">16 Columns</a></li>
          </ul>
         </li>
         
         <li class="nav-item">
           <a href="filemanager.html"><img src="img/nav/flm.png" alt="" /><p>File Manager</p></a>
         </li>
         <li class="nav-item">
           <a href="gallery.html"><img src="img/nav/gal.png" alt="" /><p>Gallery</p></a>
         </li>
         <li class="nav-item">
           <a href="icons.html"><img src="img/nav/icn.png" alt="" /><p>Icons</p></a>
         </li>
         <li class="nav-item">
           <a href="#"><img src="img/nav/err.png" alt="" /><p>Error Pages</p></a>
           <ul class="sub-nav">
            <li><a href="403.html">403 Page</a></li>
            <li><a href="404.html">404 Page</a></li>
            <li><a href="503.html">503 Page</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="typography.html"><img src="img/nav/typ.png" alt="" /><p>Typography</p></a>
         </li>
         *}
       </ul>
      </li>
     </ul>
  </div> 


  