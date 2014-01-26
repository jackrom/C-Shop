<?php /* Smarty version 2.6.26, created on 2013-06-24 11:09:27
         compiled from admin_orders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_orders.tpl', 2, false),array('function', 'html_options', 'admin_orders.tpl', 88, false),array('modifier', 'date_format', 'admin_orders.tpl', 133, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_orders','assign' => 'obj'), $this);?>


<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?>
<div class="ad-notif-error small-mg grid_8"><p><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p></div>
<?php endif; ?>

<div class="box grid_8">
	<div class="box-head">
		<h2>Ordenes</h2>
	</div>
	<div class="box-content no-pad">
		<form method="get" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
		  <input name="Page" type="hidden" value="Orders" />
		   <table class="display">
		   	<tr class="odd">
		   		<td>
		  			<font class="bold-text">Mostrar ordenes por cliente</font>
		  		</td>
		  		<td>
				    <select name="customer_id">
				    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mCustomers) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				      <option value="<?php echo $this->_tpl_vars['obj']->mCustomers[$this->_sections['i']['index']]['customer_id']; ?>
"
				       <?php if ($this->_tpl_vars['obj']->mCustomers[$this->_sections['i']['index']]['customer_id'] == $this->_tpl_vars['obj']->mCustomerId): ?>
				         selected="selected"
				       <?php endif; ?>>
				        <?php echo $this->_tpl_vars['obj']->mCustomers[$this->_sections['i']['index']]['name']; ?>

				      </option>
				    <?php endfor; endif; ?>
				    </select>
				</td>
				<td>
				    <input class="button small black" style="width:100px;" type="submit" name="submitByCustomer" value="Mostrar!" />
				</td>
				<td></td>
				<td></td>
		  	</tr>
		  	<tr class="even">
		  		<td>
			    	<font class="bold-text">Mostrar orden por nro. de ID</font>
			    </td>
			    <td>
			   		<input name="orderId" type="text" value="<?php echo $this->_tpl_vars['obj']->mOrderId; ?>
" />
			   	</td>
			   	<td>
			    	<input class="button small black" style="width:100px;" type="submit" name="submitByOrderId" value="Mostrar!" />
			    </td>
			    <td></td>
			    <td></td>
		  	</tr>
		  	<tr class="odd">
		  		<td>
		    		<font class="bold-text">Mostrar las mas recientes</font>
		    	</td>
		    	<td>
		    		<input name="recordCount" type="text" value="<?php echo $this->_tpl_vars['obj']->mRecordCount; ?>
" />
		    	</td>
		    	<td>
		    		<font class="bold-text">ordenes</font>
		    	</td>
		    	<td>
		    		<input class="button small black" style="width:100px;" type="submit" name="submitMostRecent" value="Mostrar!" />
		    	</td>
		    	<td></td>
		  	</tr>
		  	<tr class="even">
		  		<td>
		    		<font class="bold-text">Mostrar todos los registros entre</font>
		    	</td>
		    	<td>
		    		<input name="startDate" type="text" value="<?php echo $this->_tpl_vars['obj']->mStartDate; ?>
" />
		    	</td>
		    	<td>
		    		<font class="bold-text">y</font>
		    	</td>
		    	<td>
		    		<input name="endDate" type="text" value="<?php echo $this->_tpl_vars['obj']->mEndDate; ?>
" />
		    	</td>
		    	<td>
		    		<input class="button small black" style="width:100px;" type="submit" name="submitBetweenDates" value="Mostrar!" />
		    	</td>
		  	</tr>
		  	<tr class="odd">
		    	<td>
		    		<font class="bold-text">Show orders by status</font>
		    	</td>
		    	<td>
				    <?php echo smarty_function_html_options(array('name' => 'status','options' => $this->_tpl_vars['obj']->mOrderStatusOptions,'selected' => $this->_tpl_vars['obj']->mSelectedStatus), $this);?>

				</td>
				<td>
		    		<input class="button small black" style="width:100px;" type="submit" name="submitOrdersByStatus" value="Go!" />
		    	</td>
		    	<td></td>
		    	<td></td>
		  	</tr>
		  </table>
		</form>
	</div>
</div>


<?php if ($this->_tpl_vars['obj']->mOrders): ?>
<div class="box grid_8">
	<div class="box-head">
		<h2>Ordenes</h2>
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
			   <th>Orden ID</th>
			   <th>Fecha creaci&oacute;n</th>
			   <th>Fecha Despacho</th>
			   <th>Status</th>
			   <th>Cliente</th>
			   <th>Opciones de admin</th>
			  </tr>
			</thead>
			<tbody>
			  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mOrders) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			    <?php $this->assign('status', $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['status']); ?>
			  <tr>
			    <td><?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['order_id']; ?>
</td>
			    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
</td>
			    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['shipped_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
</td>
			    <td><?php echo $this->_tpl_vars['obj']->mOrderStatusOptions[$this->_tpl_vars['status']]; ?>
</td>
			    <td><?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['name']; ?>
</td>
			    <td>
			      <a href="<?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['link_to_order_details_admin']; ?>
">Ver detalles</a>
			    </td>
			  </tr>
			  <?php endfor; endif; ?>
		  </tbody>
		</table>
	</div>
</div>
<?php endif; ?>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>