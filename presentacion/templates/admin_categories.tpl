{* admin_categories.tpl *}
{load_presentation_object filename="admin_categories" assign="obj"}
{if $obj->mErrorMessage}
<div class="ad-notif-error small-mg grid_12"><p>{$obj->mErrorMessage}</p></div>
{/if}

<div id="back">
<p><a href="{$obj->mLinkToDepartmentsAdmin}"><img src="{$obj->mSiteUrl}img/icons/basic/left.png" alt="" />regresar a departamentos ...</a></p>
</div>

<div class="box grid_12">
	<div class="box-head">
		<h2>Editar categorias del departamento: {$obj->mDepartmentName}</h2>
	</div>
		<form method="post" action="{$obj->mLinkToDepartmentCategoriesAdmin}">
			{if $obj->mCategoriesCount eq 0}
			  <p class="no-items-found">No existen categorias en este departamento!</p>
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
					      <th width="150">Nombre de la categor&iacute;a</th>
					      <th>Descripcion de la categor&iacute;a</th>
					      <th width="450">Opciones del administrador</th>
					    </tr>
					</thead>
					<tbody>
						{section name=i loop=$obj->mCategories}
						    {if $obj->mEditItem == $obj->mCategories[i].category_id}
						    <tr class="even">
						      <td>
						        <input type="text" name="name" value="{$obj->mCategories[i].name}" size="30" />
						      </td>
						      <td>
						        {strip}
						        <textarea name="description" rows="3" cols="60">
						          {$obj->mCategories[i].description}
						        </textarea>
						        {/strip}
						      </td>
						      <td>
						        <input type="submit" class="button small black" style="width:100px;" name="submit_edit_prod_{$obj->mCategories[i].category_id}"  value="Editar Productos" />
						        <input type="submit" class="button small black" style="width:100px;" name="submit_update_cat_{$obj->mCategories[i].category_id}"  value="Actualizar" />
						        <input type="submit" class="button small black" style="width:100px;" name="cancel"  value="Cancelar" />
						        <input type="submit" class="button small grey" style="width:100px;" name="submit_delete_cat_{$obj->mCategories[i].category_id}"  value="Eliminar" />
						      </td>
						    </tr>
						    {else}
						    <tr class="even">
						      <td >{$obj->mCategories[i].name}</td>
						      <td>{$obj->mCategories[i].description}</td>
						      <td>
						        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_prod_{$obj->mCategories[i].category_id}"  value="Editar Productos" />
						        <input class="button small black" style="width:100px;" type="submit" name="submit_edit_cat_{$obj->mCategories[i].category_id}"  value="Editar" />
						        <input class="button small grey" style="width:100px;" type="submit" name="submit_delete_cat_{$obj->mCategories[i].category_id}"  value="Eliminar" />
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
			<h2>Agregar nueva categor&iacute;a</h2>
		</div>
		<div class="box-content no-pad">
			<table class="display">
				<tr>
					<td><input type="text" name="category_name" value="" placeholder="nombre" size="70" /></td>
					<td><input type="text" name="category_description" value="" placeholder="descripcion" size="160" /></td>
					<td><input class="button small black" style="width:100px;" type="submit" name="submit_add_cat_0" value="Agregar" /></td>
				</tr>
			</table>
		</div>
	</form>
</div>
</div>
 
<div class="footer container_12">
  <p class="grid_12">Desarrollado por Juassi Studios</p>
</div>
