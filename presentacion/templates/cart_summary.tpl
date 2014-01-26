{* cart_summary.tpl *}
{load_presentation_object filename="cart_summary" assign="obj"}
{* Start cart summary *}
<!-- Text Widget -->
<div class="text-widget widget widget__sidebar carrito" id="cart-summary">
	<h3 class="widget-title">Resumen de tu carrito</h3>
	<div class="widget-content">
  <div id="updating">Actualizando...</div>
{if $obj->mEmptyCart}
  <p class="empty-cart">Tu carrito de compra esta vacio!</p>
{else}
  <table class="cart-summary">
    <tbody>
  {section name=i loop=$obj->mItems}
      <tr>
        <td width="30" valign="top" align="right">
          {$obj->mItems[i].quantity} x 
        </td>
        <td>
          {$obj->mItems[i].name} ({$obj->mItems[i].attributes})
        </td>
      </tr>
  {/section}
      <tr>
        <td colspan="2" class="cart-summary-subtotal">
          <span class="price">${$obj->mTotalAmount}</span>
          <span>
            [ <a href="{$obj->mLinkToCartDetails}">Ver detalles</a> ]
          </span>
        </td>
      </tr>
    </tbody>
  </table>
{/if}
</div>
</div>
{* End cart summary *}
