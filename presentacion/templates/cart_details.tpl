{* cart_details.tpl *}
{load_presentation_object filename="cart_details" assign="obj"}
<div id="updating">Actualizando...</div>
{if $obj->mIsCartNowEmpty eq 1}
<h3>Tu carrito de compra esta vacio!</h3>
{else}
<h3>Estos son los productos en tu carrito de compra:</h3>
<form class="cart-form" method="post" action="{$obj->mUpdateCartTarget}"
 onsubmit="return executeCartAction(this);">
  <table class="tss-table">
    <tr>
      <th>Nombre del Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
      <th>&nbsp;</th>
    </tr>
  {section name=i loop=$obj->mCartProducts}
    <tr>
      <td>
        <input name="itemId[]" type="hidden" value="{$obj->mCartProducts[i].item_id}" />
        {$obj->mCartProducts[i].name}
        ({$obj->mCartProducts[i].attributes})
      </td>
      <td>${$obj->mCartProducts[i].price}</td>
      <td>
        <input type="text" name="quantity[]" size="5"
         value="{$obj->mCartProducts[i].quantity}" />
      </td>
      <td>${$obj->mCartProducts[i].subtotal}</td>
      <td>
        <a href="{$obj->mCartProducts[i].save}" onclick="return executeCartAction(this);">Salvar producto</a>
        <a href="{$obj->mCartProducts[i].remove}" onclick="return executeCartAction(this);">Eliminar</a>
      </td>
    </tr>
  {/section}
  </table>
  <table class="cart-subtotal">
    <tr>
      <td>
        <p>
          Total amount:&nbsp;
          <font class="price">${$obj->mTotalAmount}</font>
        </p>
      </td>
      <td align="right">
        <input type="submit" name="update" value="Actualizar" />
      </td>
      {if $obj->mShowCheckoutLink}
      <td align="right">
        <a href="{$obj->mLinkToCheckout}">Proceder a comprar</a>
      </td>
      {/if}
    </tr>
  </table>
</form>
{/if}
{if ($obj->mIsCartLaterEmpty eq 0)}
<h3>Productos salvados:</h3>
<table class="tss-table">
  <tr>
    <th>Nombre del producto</th>
    <th>Precio</th>
    <th>&nbsp;</th>
  </tr>
  {section name=j loop=$obj->mSavedCartProducts}
  <tr>
    <td>
      {$obj->mSavedCartProducts[j].name}
      ({$obj->mSavedCartProducts[j].attributes})
    </td>
    <td>
      ${$obj->mSavedCartProducts[j].price}
    </td>
    <td>
        <a href="{$obj->mSavedCartProducts[j].move}" onclick="return executeCartAction(this);">Mover al carrito de compras</a>
        <a href="{$obj->mSavedCartProducts[j].remove}" onclick="return executeCartAction(this);">Eliminar</a>
    </td>
  </tr>
  {/section}
</table>
{/if}
{if $obj->mLinkToContinueShopping}
<p><a href="{$obj->mLinkToContinueShopping}">Continuar comprando </a></p>
{/if}
{if $obj->mRecommendations}
<h2>Clientes que compraron esto, tambien compraron esto:</h2>
<ol>
  {section name=m loop=$obj->mRecommendations}
  <li>
    {strip}
    <a href="{$obj->mRecommendations[m].link_to_product}">
      {$obj->mRecommendations[m].product_name}
    </a>
    {/strip}
    <span class="list"> - {$obj->mRecommendations[m].description}</span>
  </li>
  {/section}
</ol>
{/if}
