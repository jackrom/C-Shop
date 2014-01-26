{* products_list.tpl *}
{load_presentation_object filename="products_list" assign="obj"}
{if $obj->mSearchDescription != ""}
<p class="description">{$obj->mSearchDescription}</p>
{/if}

{if $obj->mProducts}
<!-- Lista de Productos -->
<!-- Content -->

	{section name=k loop=$obj->mProducts}
		<article class="entry entry__simple entry__medium">
			<div class="clearfix">
				<!-- begin post image -->
				{if $obj->mProducts[k].thumbnail neq ""}
					<figure class="thumb">
						<a href="{$obj->mProducts[k].link_to_product}"><img src="{$obj->mProducts[k].thumbnail}" height="200" width="200" alt="{$obj->mProducts[k].name}"></a>
					</figure>
				{/if}
				<!-- end post image -->
				
				
		
				<!-- begin post heading -->
				<header class="entry-header">
					<div class="entry-header-inner">
						<h3 class="entry-title"><a href="{$obj->mProducts[k].link_to_product}">{$obj->mProducts[k].name}</a></h3>
						<p class="post-meta">
							<span class="post-meta-date"><a href="#"><i class="icon-calendar"></i>Jan 3, 2013</a></span>
							<span class="post-meta-cats"><i class="icon-tag"></i><a href="#">art</a>, <a href="#">photo</a></span>
							<span class="post-meta-author"><a href="#"><i class="icon-user"></i>Dan Fisher</a></span>
							<span class="post-meta-comments"><a href="#"><i class="icon-comments-alt"></i>16</a></span>
						</p>
					</div>
				</header>
				<!-- end post heading -->
		
				<!-- begin post content -->
				<div class="entry-content">
					{$obj->mProducts[k].description}
				</div>
				<!-- end post content -->
				<div class="clearfix">
				<!-- begin post footer -->
				<footer class="entry-footer botones">
					{* The Add to Cart form *}
					<div class="grid_9 listProducts">
			        <form target="_self" method="post" action="{$obj->mProducts[k].link_to_add_product}" onsubmit="return addProductToCart(this);">
						{* Add the submit button and close the form *}
						<input type="submit" name="add_to_cart" value="Agregar al carrito" class="button button__tertiary primero" />  &nbsp;
					</form> 
						<a href="{$obj->mProducts[k].link_to_product}" class="button button__secondary segundo"><span class="button-inner"><i class="icon-plus"></i> Informaci&oacute;n producto </span></a>
						{* Show Edit button for administrators *}
					    {if $obj->mShowEditButton}
					        <form action="{$obj->mEditActionTarget}" target="_self" method="post">
					          <input type="hidden" name="product_id" value="{$obj->mProducts[k].product_id}" />
					          <input type="submit" name="submit" value="Editar Productos" class="button button__tertiary button__icon segundo" />
					        </form>
					    {/if} 
					 </div>
				</footer>
				<!-- end post footer -->
				</div>
				
				
				<div class="clearfix">
					<div class="grid_3 mostrarPrecio">
						{if $obj->mProducts[k].discounted_price != 0}
							{* precio descuento *}
			            	<span class="ico-holder-inner">&euro;{$obj->mProducts[k].discounted_price}</span>
			          	{else}
			            	<span class="ico-holder-inner">&euro;{$obj->mProducts[k].price}</span>
			          	{/if}
					</div>
				</div>



				
				


				
				
					
			</div>
		</article>
	{/section}
{/if}



{if $obj->mrTotalPages > 1}
<!-- Paginacion -->
{if count($obj->mProductListPages) > 0}
<ul class="pagination">

  {if $obj->mLinkToPreviousPage}
  	<li class="prev"><a href="{$obj->mLinkToPreviousPage}"><i class="icon-angle-left"> anterior</i></a></li>
  {else}
  	<li class="prev"><a href="#"><i class="icon-angle-left"> anterior</i></a></li>
  {/if}

  {section name=m loop=$obj->mProductListPages}
    {if $obj->mPage eq $smarty.section.m.index_next}
    <li class="current"><a href="">{$smarty.section.m.index_next}</a></li>
    {else}
    <li><a href="{$obj->mProductListPages[m]}">{$smarty.section.m.index_next}</a></li>
    {/if}
  {/section}

  {if $obj->mLinkToNextPage}
  <li class="next"><a href="{$obj->mLinkToNextPage}">siguiente <i class="icon-angle-right"></i></a></li>
  {else}
  <li class="next"><a href="#">siguiente <i class="icon-angle-right"></i></a></li>
  {/if}

</ul>
<!-- Paginacion / Final -->
{/if}

{/if}



