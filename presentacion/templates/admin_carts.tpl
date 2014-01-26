{* admin_carts.tpl *}
{load_presentation_object filename="admin_carts" assign="obj"}

{if $obj->mMessage}
<div class="ad-notif-success small-mg grid_8"><p>{$obj->mMessage}</p></div>
{/if}

<div class="box grid_8">
	<div class="box-head">
		<h2>Administraci&oacute;n de los carritos de compra de los usuarios:</h2>
	</div>
	<div class="box-content no-pad">
		<form action="{$obj->mLinkToCartsAdmin}" method="post">
		  <table class="display">
		  	<tbody>
		  		<tr>
				    <td>Seleccionar carritos de la compra: {html_options name="days" options=$obj->mDaysOptions selected=$obj->mSelectedDaysNumber} </td>
				    <td><input class="button small black" style="width:200px;" type="submit" name="submit_count" value="Contar los viejos carritos de compra" /></td>
				    <td><input class="button small grey" style="width:200px;" type="submit" name="submit_delete" value="Eliminar los viejos carritos de compra" /></td>
		     	</tr>
		     </tbody>
		  </table>
		</form>
	</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>