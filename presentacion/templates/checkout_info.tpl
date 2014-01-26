{* checkout_info.tpl *}
{load_presentation_object filename="checkout_info" assign="obj"}
<form method="post" action="{$obj->mLinkToCheckout}">
  <h2>Tu orden consiste de los siguientes productos:</h2>
  <table class="tss-table">
    <tr>
      <th>Nombre del producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>
  {section name=i loop=$obj->mCartItems}
    <tr>
      <td>{$obj->mCartItems[i].name} ({$obj->mCartItems[i].attributes})</td>
      <td>{$obj->mCartItems[i].price}</td>
      <td>{$obj->mCartItems[i].quantity}</td>
      <td>{$obj->mCartItems[i].subtotal}</td>
    </tr>
  {/section}
  </table>
  <p>Total importe: <font class="price">${$obj->mTotalAmount}</font></p>
  {if $obj->mNoCreditCard == 'yes'}
  <p class="error">No poseemos datos de pago.</p>
  {else}
  <p>{$obj->mCreditCardNote}</p>
  {/if}
  {if $obj->mNoShippingAddress == 'yes'}
  <p class="error">La direcci&oacute;n de entrega es requerida para colocar la orden.</p>
  {else}
  <p>
    Direcci&oacute;n de entrega: <br />
    &nbsp;{$obj->mCustomerData.address_1}<br />
    {if $obj->mCustomerData.address_2}
      &nbsp;{$obj->mCustomerData.address_2}<br />
    {/if}
    &nbsp;{$obj->mCustomerData.city}<br />
    &nbsp;{$obj->mCustomerData.region}<br />
    &nbsp;{$obj->mCustomerData.postal_code}<br />
    &nbsp;{$obj->mCustomerData.country}<br /><br />
    Shipping region: {$obj->mShippingRegion}
  </p>
  {/if}
  {if $obj->mNoCreditCard!= 'yes' && $obj->mNoShippingAddress != 'yes'}
  <p>
    Tipo de transporte:
    <select name="shipping">
    {section name=i loop=$obj->mShippingInfo}
      <option value="{$obj->mShippingInfo[i].shipping_id}">
        {$obj->mShippingInfo[i].shipping_type}
      </option>
    {/section}
    </select>
  </p>
  {/if}
  <input type="submit" name="place_order" value="Colocar orden" {$obj->mOrderButtonVisible} /> |
  <a href="{$obj->mLinkToCart}">Editar Carrito de la compra</a> |
  <a href="{$obj->mLinkToContinueShopping}">Continuar comprando</a>
</form>
