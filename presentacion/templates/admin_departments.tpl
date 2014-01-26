{* admin_departments.tpl *}
{load_presentation_object filename="admin_departments" assign="obj"}
{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_12"><p>{$obj->mErrorMessage}</p></div>
{/if}
<div class="box grid_12">
	<div class="box-head">
		<h2>Editar departamentos</h2>
	</div>
		<form method="post" action="{$obj->mLinkToDepartmentsAdmin}">
	  	{if $obj->mDepartmentsCount eq 0}
		  <p class="no-items-found">No existen departamentos en tu base de datos!</p>
		{else}
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
				      <th>Nombre del departamento</th>
				      <th>Descripci&oacute;n del departamento</th>
				      <th width="450">Opciones del administrador</th>
				    </tr>
				</thead>
				<tbody>
				  {section name=i loop=$obj->mDepartments}
				    {if $obj->mEditItem == $obj->mDepartments[i].department_id}
				    <tr class="even">
				      <td>
				        <input type="text" name="name" value="{$obj->mDepartments[i].name}" size="30" />
				      </td>
				      <td>
				      {strip}
				        <textarea name="description" rows="3" cols="60">
				          {$obj->mDepartments[i].description}
				        </textarea>
				      {/strip}
				      </td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_cat_{$obj->mDepartments[i].department_id}"
				         value="Editar categorias" />
				        <input class="button small black" style="width:100px;" type="submit" name="submit_update_dept_{$obj->mDepartments[i].department_id}"
				         value="Actualizar" />
				        <input class="button small black" style="width:100px;" type="submit" name="cancel" value="Cancelar" />
				        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_dept_{$obj->mDepartments[i].department_id}"
				         value="Eliminar" />
				      </td>
				    </tr>
				    {else}
				    <tr class="even">
				      <td>{$obj->mDepartments[i].name}</td>
				      <td>{$obj->mDepartments[i].description}</td>
				      <td>
				        <input class="button small black" style="width:100px;" type="submit"
				         name="submit_edit_cat_{$obj->mDepartments[i].department_id}"
				         value="Editar categorias" />
				        <input class="button small black" style="width:100px;" type="submit"
				         name="submit_edit_dept_{$obj->mDepartments[i].department_id}"
				         value="Editar" />
				        <input class="button small grey" style="width:100px;" type="submit"
				         name="submit_delete_dept_{$obj->mDepartments[i].department_id}"
				         value="Eliminar" />
				      </td>
				    </tr>
				    {/if}
				  {/section}
				</tbody>
			  </table>
			{/if}
		</div>
	</div>
	<div class="box grid_12">
		<div class="box-head">
			<h2>Agregar nuevo departamento</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<tr>
					<td><input type="text" name="department_name" value="" placeholder="nombre" size="80" /></td>
					<td><input type="text" name="department_description" value="" placeholder="descripci&oacute;n" size="160" /></td>
					<td><input class="button small black" style="width:100px;" type="submit" name="submit_add_dept_0" value="Agregar" /></td>
				</tr>
		</table>
	</div>
	</form>
</div>
</div>

<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>