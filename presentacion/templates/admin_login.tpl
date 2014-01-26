{* admin_login.tpl *}
{load_presentation_object filename="admin_login" assign="obj"}


	<div class="wrapper">
		<div class="logo">
	 	<h1>INICIO DE SESION</h1>
	 </div>
   <div class="lg-body">
     <div class="inner">
       <div id="lg-head">
	       {if $obj->mLoginMessage neq ""}
			    <p><span class="font-bold">{$obj->mLoginMessage}</span></p>
		   {else}
	       		<p><span class="font-bold">Juassi</span> : Por favor rellena los campos para ingresar.</p>
		   {/if} 
	       <div class="separator"></div>
       </div>
       <div class="login">
         <form method="post" action="{$obj->mLinkToAdmin}">
           <fieldset>
              <ul>
                 <li id="usr-field">
                  <input class="input required" name="username" type="text" size="26" minlength ="1" value="{$obj->mUsername}" placeholder="Nombre de usuario..." />
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
           <a href="#">Olvid&eacute; mi password</a><a href="{$obj->mLinkToIndex}"> | homepage</a>
          </span>
        </div>
     </div>
    </div>
	</div>
</body>

</html>