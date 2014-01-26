{load_presentation_object filename="product" assign="obj"}

<!-- Project Navigation -->
<div class="project-nav">
	<a href="#" class="prev">&larr; Previous</a>
	<a href="#" class="next">Next &rarr;</a>
</div>
<!-- Project Navigation / End -->


<div class="clearfix">
<div class="grid_9 alpha">
	<h1 class="title"  style="margin-bottom:0px;">{$obj->mProduct.name}</h1>
	<div class="project-desc project-desc__single">
		<span class="desc" style="margin-bottom:20px;">{$obj->mProduct.summary}</span>
	</div>
</div>


<div class="grid_9 alpha" style="margin-top:20px;margin-left:0px;">
	<div class="project-desc project-desc__single">
		<div class="grid_7 alpha">
			<a href="{$obj->mSiteUrlRoot}temas/{$obj->mProduct.name}.html" target="_blank" class="button button__secondary"><span class="button-inner">Ver Recurso Online</span></a>
			<a href="{$obj->mSiteUrlRoot}contenidos/{$obj->mProduct.name}/" target="_blank" class="button button__secondary"><span class="button-inner">Ver Fotos</span></a>
		</div>
		<div class="grid_2 omega">
			{if $obj->mProduct.discounted_price != 0}
		    	<p class="oferta" style="text-align:right;">Oferta: <span class="price">{$obj->mProduct.discounted_price}</span></p>
		  	{else}
		    	<p class="precio" style="text-align:right;">Precio: <span class="price">{$obj->mProduct.price}</span></p>
		  	{/if}
	  	</div>
	</div>
</div>


<div class="grid_9 alpha">
<!-- Project Thumbnail -->
	<div class="flexslider project-thumbs flexslider__nav-on">
		<ul class="slides">
			{if $obj->mProduct.image}
				<li><img src="{$obj->mProduct.image}" alt="{$obj->mProduct.name} image" height="200" width="600"></li>
			{/if}
			{if $obj->mProduct.image_2}
				<li><img src="{$obj->mProduct.image_2}" alt="{$obj->mProduct.name} image 2" height="200" width="600"></li>
			{/if}
		</ul>
	</div>
<!-- Project Thumbnail / End -->
</div>

<div class="grid_3 alpha recomendar">
	<ul class="social-links social-links__small">
		<li class="link-twitter">
			<a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=Conoce las características de: {$obj->mProduct.name} – via @jcarlosreyesc {$obj->mSiteUrl}{$obj->mProduct.name}-p{$obj->mProduct.product_id}','ventanacompartir', 'top=160, left=100, toolbar=0, status=0, width=650, height=350');"><i class="icon-twitter"></i></a>
		</li>
		<li class="link-facebook">
			<a href="javascript: void(0);" 
				onclick="
					window.open(
						'http://www.facebook.com/sharer.php?u=http://www.jcarlosreyesc.yensi.com.ve/tienda/{$obj->mProduct.name}-p{$obj->mProduct.product_id}',
						'ventanacompartir', 
						'top=160, left=100,toolbar=0, status=0, width=650, height=350');">
			<i class="icon-facebook"></i></a>
		</li>
		<li class="link-google">
			<a href="https://plus.google.com/share?url=http://www.jcarlosreyesc.yensi.com.ve/tienda/{$obj->mProduct.name}-p{$obj->mProduct.product_id}" onclick="javascript:window.open(this.href,
			  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
			<i class="icon-google-plus"></i></a></li>
		<li class="link-pinterest"><a href="#"><i class="icon-pinterest"></i></a></li>
		<li class="link-rss"><a href="#"><i class="icon-rss"></i></a></li>
	</ul>
</div>

<div class="grid_3 alpha botonera">
	
	{if $obj->mLinkToContinueShopping}
			<footer class="project-footer">
			
				{* The Add to Cart form *}
				<form class="add-product-form" target="_self" method="post" action="{$obj->mProduct.link_to_add_product}"
				 onsubmit="return addProductToCart(this);">
				
				{* Generate the list of attribute values *}
				<p class="attributes">
				
				{* Parse the list of attributes and attribute values *}
				{section name=k loop=$obj->mProduct.attributes}
				
				  {* Generate a new select tag? *}
				  {if $smarty.section.k.first ||
				      $obj->mProduct.attributes[k].attribute_name !==
				      $obj->mProduct.attributes[k.index_prev].attribute_name}
				    {$obj->mProduct.attributes[k].attribute_name}:
				  <select name="attr_{$obj->mProduct.attributes[k].attribute_name}">
				  {/if}
				
				    {* Generate a new option tag *}
				    <option value="{$obj->mProduct.attributes[k].attribute_value}">
				      {$obj->mProduct.attributes[k].attribute_value}
				    </option>
				
				  {* Close the select tag? *}
				  {if $smarty.section.k.last ||
				      $obj->mProduct.attributes[k].attribute_name !== $obj->mProduct.attributes[k.index_next].attribute_name}
				  </select>
				  {/if}
				
				{/section}
				</p>
				
				{* Add the submit button and close the form *}
				<p>
				  <input type="submit" name="add_to_cart" value="Agregar al carrito" class="button button__tertiary button__icon primero" />
				</p>
				</form>
			
				<a href="{$obj->mLinkToContinueShopping}" class="button button__secondary"><span class="button-inner">Continuar con la compra</span></a>
				<a href="{$obj->mLinkToContinueShopping}" class="button button__secondary"><span class="button-inner" style="margin-left:10px;">Consultar al vendedor</span></a>
				{if $obj->mShowEditButton}
					<form action="{$obj->mEditActionTarget}" target="_self" method="post" class="edit-form">
						<div class="button-wrapper">
							<input type="submit" name="submit_edit" id="submit" value="Edit Product Details">
						</div>
					</form>
				{/if}
				
			</footer>
		{/if}
</div>



<div class="grid_6 omega descripcion">
	<!-- Project Description -->
	<div class="project-desc project-desc__single">
		<h4 style="margin-top:10px;">Descripci&oacute;n</h4>
		<div class="project-excerpt" style="margin-top:-15px;text-align:justify;">
			{$obj->mProduct.description}
		{* Aqui debe ir una etiqueta div que será suministrada por el contenido a ingresar *}
		
		
	</div>
	<!-- Project Description / End -->
</div>


<div class="grid_9 omega">
	<h3>Buscar productos similares en nuestro catalogo:</h3>
	<ol>
	{section name=i loop=$obj->mLocations}
	  <li class="navigation">
	    {strip}
	    <a href="{$obj->mLocations[i].link_to_department}">
	      {$obj->mLocations[i].department_name}
	    </a>
	    {/strip}
	    &raquo;
	    {strip}
	    <a href="{$obj->mLocations[i].link_to_category}">
	      {$obj->mLocations[i].category_name}
	    </a>
	    {/strip}
	  </li>
	{/section}
	</ol>
</div>



<div class="grid_9" style="margin-bottom:50px; ">
<div style="margin-bottom:0px;left:90px;position:absolute;">
<a href="https://twitter.com/juassic" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size = "large">Follow Juassi</a>
</div>
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" ></div>
<div class="fb-like grid_4" style="position:absolute; left:235px;margin-top:-28px;" data-href="http://www.jcarlosreyesc.yensi.com.ve/tienda/{$obj->mProduct.name}-p{$obj->mProduct.product_id}" data-send="true" data-show-faces="true" data-font="tahoma"></div>
<div id="fb-root" class="facebookLike"></div>
</div>

<div class="clearfix">
</div>

							
			            	
{if $obj->mRecommendations}
<div class="grid_9 alpha recomendaciones">
	<div class="recomendaciones">
		<h3>Quienes compraron esto, tambi&eacute;n compraron esto:</h3>
		<ol>
		  {section name=m loop=$obj->mRecommendations}
		  <li>
		    {strip}
		    <a href="{$obj->mRecommendations[m].link_to_product}"> {$obj->mRecommendations[m].product_name}
		    </a>
		    {/strip}
		    <span class="list"> - {$obj->mRecommendations[m].description}</span>
		  </li>
		  {/section}
		</ol>
	</div>
</div>
{/if}



{include file="reviews.tpl"}	
	


		            	




<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {ldelim}lang: 'es'{rdelim};

  (function() {ldelim}
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  {rdelim})();
</script>

<!-- Facebook. -->
<script>(function(d, s, id) {ldelim}
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=276583045711474";
  fjs.parentNode.insertBefore(js, fjs);
{rdelim}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){ldelim}var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){ldelim}js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);{rdelim}{rdelim}(document,"script","twitter-wjs");</script>
