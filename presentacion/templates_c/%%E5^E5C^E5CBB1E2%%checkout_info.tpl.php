<?php /* Smarty version 2.6.26, created on 2013-06-21 20:48:15
         compiled from checkout_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'checkout_info.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'checkout_info','assign' => 'obj'), $this);?>

<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToCheckout; ?>
">
  <h2>Tu orden consiste de los siguientes productos:</h2>
  <table class="tss-table">
    <tr>
      <th>Nombre del producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mCartItems) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <tr>
      <td><?php echo $this->_tpl_vars['obj']->mCartItems[$this->_sections['i']['index']]['name']; ?>
 (<?php echo $this->_tpl_vars['obj']->mCartItems[$this->_sections['i']['index']]['attributes']; ?>
)</td>
      <td><?php echo $this->_tpl_vars['obj']->mCartItems[$this->_sections['i']['index']]['price']; ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->mCartItems[$this->_sections['i']['index']]['quantity']; ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->mCartItems[$this->_sections['i']['index']]['subtotal']; ?>
</td>
    </tr>
  <?php endfor; endif; ?>
  </table>
  <p>Total importe: <font class="price">$<?php echo $this->_tpl_vars['obj']->mTotalAmount; ?>
</font></p>
  <?php if ($this->_tpl_vars['obj']->mNoCreditCard == 'yes'): ?>
  <p class="error">No poseemos datos de pago.</p>
  <?php else: ?>
  <p><?php echo $this->_tpl_vars['obj']->mCreditCardNote; ?>
</p>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['obj']->mNoShippingAddress == 'yes'): ?>
  <p class="error">La direcci&oacute;n de entrega es requerida para colocar la orden.</p>
  <?php else: ?>
  <p>
    Direcci&oacute;n de entrega: <br />
    &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['address_1']; ?>
<br />
    <?php if ($this->_tpl_vars['obj']->mCustomerData['address_2']): ?>
      &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['address_2']; ?>
<br />
    <?php endif; ?>
    &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['city']; ?>
<br />
    &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['region']; ?>
<br />
    &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['postal_code']; ?>
<br />
    &nbsp;<?php echo $this->_tpl_vars['obj']->mCustomerData['country']; ?>
<br /><br />
    Shipping region: <?php echo $this->_tpl_vars['obj']->mShippingRegion; ?>

  </p>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['obj']->mNoCreditCard != 'yes' && $this->_tpl_vars['obj']->mNoShippingAddress != 'yes'): ?>
  <p>
    Tipo de transporte:
    <select name="shipping">
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mShippingInfo) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
      <option value="<?php echo $this->_tpl_vars['obj']->mShippingInfo[$this->_sections['i']['index']]['shipping_id']; ?>
">
        <?php echo $this->_tpl_vars['obj']->mShippingInfo[$this->_sections['i']['index']]['shipping_type']; ?>

      </option>
    <?php endfor; endif; ?>
    </select>
  </p>
  <?php endif; ?>
  <input type="submit" name="place_order" value="Colocar orden" <?php echo $this->_tpl_vars['obj']->mOrderButtonVisible; ?>
 /> |
  <a href="<?php echo $this->_tpl_vars['obj']->mLinkToCart; ?>
">Editar Carrito de la compra</a> |
  <a href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
">Continuar comprando</a>
</form>