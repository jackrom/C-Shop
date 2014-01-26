{* admin_orders.tpl *}
{load_presentation_object filename="admin_orders" assign="obj"}

{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_8"><p>{$obj->mErrorMessage}</p></div>
{/if}

<div class="box grid_8">
	<div class="box-head">
		<h2>Ordenes</h2>
	</div>
	<div class="box-content no-pad">
		<form method="get" action="{$obj->mLinkToAdmin}">
		  <input name="Page" type="hidden" value="Orders" />
		   <table class="display">
		   	<tr class="odd">
		   		<td>
		  			<font class="bold-text">Mostrar ordenes por cliente</font>
		  		</td>
		  		<td>
				    <select name="customer_id">
				    {section name=i loop=$obj->mCustomers}
				      <option value="{$obj->mCustomers[i].customer_id}"
				       {if $obj->mCustomers[i].customer_id == $obj->mCustomerId}
				         selected="selected"
				       {/if}>
				        {$obj->mCustomers[i].name}
				      </option>
				    {/section}
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
			   		<input name="orderId" type="text" value="{$obj->mOrderId}" />
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
		    		<input name="recordCount" type="text" value="{$obj->mRecordCount}" />
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
		    		<input name="startDate" type="text" value="{$obj->mStartDate}" />
		    	</td>
		    	<td>
		    		<font class="bold-text">y</font>
		    	</td>
		    	<td>
		    		<input name="endDate" type="text" value="{$obj->mEndDate}" />
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
				    {html_options name="status" options=$obj->mOrderStatusOptions
				     selected=$obj->mSelectedStatus}
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


{if $obj->mOrders}
<div class="box grid_8">
	<div class="box-head">
		<h2>Ordenes</h2>
	</div>
	<div class="box-content no-pad">
		<ul class="table-toolbar">
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/plus.png" alt="" /> Agregar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/delete.png" alt="" /> Eliminar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/save.png" alt="" /> Salvar</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/print.png" alt="" /> Imprimir</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/up.png" alt="" /> Ascendente</a></li>
        	<li><a href="#"><img src="{$obj->mSiteUrl}img/icons/basic/down.png" alt="" /> Descendente</a></li>
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
			  {section name=i loop=$obj->mOrders}
			    {assign var=status value=$obj->mOrders[i].status}
			  <tr>
			    <td>{$obj->mOrders[i].order_id}</td>
			    <td>{$obj->mOrders[i].created_on|date_format:"%Y-%m-%d %T"}</td>
			    <td>{$obj->mOrders[i].shipped_on|date_format:"%Y-%m-%d %T"}</td>
			    <td>{$obj->mOrderStatusOptions[$status]}</td>
			    <td>{$obj->mOrders[i].name}</td>
			    <td>
			      <a href="{$obj->mOrders[i].link_to_order_details_admin}">Ver detalles</a>
			    </td>
			  </tr>
			  {/section}
		  </tbody>
		</table>
	</div>
</div>
{/if}

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
