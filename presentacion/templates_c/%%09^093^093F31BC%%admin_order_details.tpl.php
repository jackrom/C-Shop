<?php /* Smarty version 2.6.26, created on 2013-06-24 10:59:28
         compiled from admin_order_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_order_details.tpl', 2, false),array('function', 'html_options', 'admin_order_details.tpl', 49, false),array('modifier', 'date_format', 'admin_order_details.tpl', 35, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_order_details','assign' => 'obj'), $this);?>


<div id="back">
<p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToOrdersAdmin; ?>
"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/left.png" alt="" />regresar a la administraci&oacute;n de ordenes ...</a></p>
</div>

<div class="box grid_6">
	<div class="box-head">
		<h2>Editar detalles de la orden ID: <?php echo $this->_tpl_vars['obj']->mOrderInfo['order_id']; ?>
 </h2>
	</div>
		<form method="get" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
		<div class="box-content no-pad">
			<input type="hidden" name="Page" value="OrderDetails" />
  			<input type="hidden" name="OrderId" value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['order_id']; ?>
" />
  			<table class="display">
  				<tbody>
	  				<tr class="odd">
				      <td>Importe Total: </td>
				      <td>
				        $<?php echo $this->_tpl_vars['obj']->mOrderInfo['total_amount']; ?>

				      </td>
				    </tr>
				    <tr class="even">
				      <td>Impuestos: </td>
				      <td><?php echo $this->_tpl_vars['obj']->mOrderInfo['tax_type']; ?>
 $<?php echo $this->_tpl_vars['obj']->mTax; ?>
</td>
				    </tr>
				    <tr class="odd">
				      <td>Gastos de Env&iacute;o: </td>
				      <td><?php echo $this->_tpl_vars['obj']->mOrderInfo['shipping_type']; ?>
</td>
				    </tr>
				    <tr class="even">
				      <td>Fecha de Creaci&oacute;n: </td>
				      <td>
				        <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrderInfo['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>

				      </td>
				    </tr>
				    <tr class="odd">
				      <td>Fecha de Env&iacute;o: </td>
				      <td>
				        <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrderInfo['shipped_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>

				      </td>
				    </tr>
				    <tr class="even">
				      <td>Status: </td>
				      <td>
				        <select name="status"
				         <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> >
				          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['obj']->mOrderStatusOptions,'selected' => $this->_tpl_vars['obj']->mOrderInfo['status']), $this);?>

				        </select>
				      </td>
				    </tr>
				    <tr class="odd">
				      <td>C&oacute;digo de Autorizaci&oacute;n: </td>
				      <td>
				        <input name="authCode" type="text" size="50"
				         value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['auth_code']; ?>
"
				         <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
				      </td>
				    </tr>
				    <tr class="even">
				      <td>N&uacute;mero de Referencia: </td>
				      <td>
				        <input name="reference" type="text" size="50"
				         value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['reference']; ?>
"
				         <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
				      </td>
				    </tr>
				    <tr class="odd">
				      <td>Comentarios: </td>
				      <td>
				        <input name="comments" type="text" size="50"
				         value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['comments']; ?>
"
				         <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
				      </td>
				    </tr>
				    
				    <tr class="even">
				      <td>Nombre del Cliente: </td>
				      <td><?php echo $this->_tpl_vars['obj']->mCustomerInfo['name']; ?>
</td>
				    </tr>
				    <tr class="odd">
				      <td>Direcci&oacute;n de Env&iacute;o: </td>
				      <td>
				        <?php echo $this->_tpl_vars['obj']->mCustomerInfo['address_1']; ?>
<br />
				        <?php if ($this->_tpl_vars['obj']->mCustomerInfo['address_2']): ?>
				          <?php echo $this->_tpl_vars['obj']->mCustomerInfo['address_2']; ?>
<br />
				        <?php endif; ?>
				        <?php echo $this->_tpl_vars['obj']->mCustomerInfo['city']; ?>
<br />
				        <?php echo $this->_tpl_vars['obj']->mCustomerInfo['region']; ?>
<br />
				        <?php echo $this->_tpl_vars['obj']->mCustomerInfo['postal_code']; ?>
<br />
				        <?php echo $this->_tpl_vars['obj']->mCustomerInfo['country']; ?>
<br />
				      </td>
				    </tr>
				    <tr class="even">
				      <td>Email del Cliente: </td>
				      <td><?php echo $this->_tpl_vars['obj']->mCustomerInfo['email']; ?>
</td>
				    </tr>
			   </tbody>
		  </table>
	  </div>

<div class="form-row">
    <input class="button small black" style="width:100px;" type="submit" name="submitEdit" value="Editar" <?php if ($this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
    <input class="button small black" style="width:100px;" type="submit" name="submitUpdate" value="Actualizar" <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
    <input class="button small black" style="width:100px;" type="submit" name="submitCancel" value="Cancelar" <?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
    <?php if ($this->_tpl_vars['obj']->mProcessButtonText): ?>
    <input type="submit" name="submitProcessOrder" value="<?php echo $this->_tpl_vars['obj']->mProcessButtonText; ?>
" />
    <?php endif; ?>
</div>
</div>

<div class="box grid_6">
	<div class="box-head">
		<h2>La Orden contiene estos productos:</h2>
	</div>
	<div class="box-content no-pad">
		<ul class="table-toolbar">
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/plus.png" alt="" /> Agregar</a></li>
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/delete.png" alt="" /> Eliminar</a></li>
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/save.png" alt="" /> Salvar</a></li>
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/print.png" alt="" /> Imprimir</a></li>
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/up.png" alt="" /> Ascendente</a></li>
        	<li><a href="#"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
img/icons/basic/down.png" alt="" /> Descendente</a></li>
      	</ul>
		<table class="display">
			<thead>
			    <tr>
			      <th>ID del Producto</th>
			      <th>Nombre del Producto</th>
			      <th>Cantidad</th>
			      <th>Costo Unitario</th>
			      <th>Subtotal</th>
			    </tr>
		  	</thead>
		  	<tbody>
			  	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mOrderDetails) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			      <td><?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['product_id']; ?>
</td>
			      <td>
			        <?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['product_name']; ?>

			        (<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['attributes']; ?>
)
			      </td>
			      <td><?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['quantity']; ?>
</td>
			      <td>$<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['unit_cost']; ?>
</td>
			      <td>$<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['subtotal']; ?>
</td>
			    </tr>
			  <?php endfor; endif; ?>
		 	</tbody>
  		</table>
	</div>
</div>
<div class="box grid_12">
		<div class="box-head">
			<h2>Cronol&oacute;gico de la auditor&iacute;a de la orden</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<thead>
					<tr>
				      <th>ID de Auditor&iacute;a</th>
				      <th>Creada el</th>
				      <th>C&oacute;digo</th>
				      <th>Mensaje</th>
				    </tr>
			    </thead>
			    <tbody>
			    	<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mAuditTrail) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
					    <tr>
					      <td><?php echo $this->_tpl_vars['obj']->mAuditTrail[$this->_sections['j']['index']]['audit_id']; ?>
</td>
					      <td><?php echo $this->_tpl_vars['obj']->mAuditTrail[$this->_sections['j']['index']]['created_on']; ?>
</td>
					      <td><?php echo $this->_tpl_vars['obj']->mAuditTrail[$this->_sections['j']['index']]['code']; ?>
</td>
					      <td><?php echo $this->_tpl_vars['obj']->mAuditTrail[$this->_sections['j']['index']]['message']; ?>
</td>
					    </tr>
				  	<?php endfor; endif; ?>
				</tbody>
			</table>
		</div>
	</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>