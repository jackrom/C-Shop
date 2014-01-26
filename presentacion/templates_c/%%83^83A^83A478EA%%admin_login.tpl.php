<?php /* Smarty version 2.6.26, created on 2013-06-24 21:55:07
         compiled from admin_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_login.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_login','assign' => 'obj'), $this);?>



	<div class="wrapper">
		<div class="logo">
	 	<h1>INICIO DE SESION</h1>
	 </div>
   <div class="lg-body">
     <div class="inner">
       <div id="lg-head">
	       <?php if ($this->_tpl_vars['obj']->mLoginMessage != ""): ?>
			    <p><span class="font-bold"><?php echo $this->_tpl_vars['obj']->mLoginMessage; ?>
</span></p>
		   <?php else: ?>
	       		<p><span class="font-bold">Juassi</span> : Por favor rellena los campos para ingresar.</p>
		   <?php endif; ?> 
	       <div class="separator"></div>
       </div>
       <div class="login">
         <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
           <fieldset>
              <ul>
                 <li id="usr-field">
                  <input class="input required" name="username" type="text" size="26" minlength ="1" value="<?php echo $this->_tpl_vars['obj']->mUsername; ?>
" placeholder="Nombre de usuario..." />
                 </li>
                 <li id="psw-field">
                  <input class="input required" name="password" type="password" size="26" minlength="1" placeholder="Password..." />
                 </li>
                 <li class="checkbox">
                  <input class="checkbox" type="checkbox" id="remember-me" value="remember" /> 
                  <label for="remember-me" class="checkbox-text">Recordarme</label>
                 </li>
                 <li>
                  <input name="submit" type="submit" class="button small green"  value="Login"/>
                 </li>
              </ul>
           </fieldset>
          </form>
          <span id="lost-psw">
           <a href="#">Olvid&eacute; mi password</a><a href="<?php echo $this->_tpl_vars['obj']->mLinkToIndex; ?>
"> | homepage</a>
          </span>
        </div>
     </div>
    </div>
	</div>
</body>

</html>