{* department.tpl *}
{load_presentation_object filename="department" assign="obj"}
<div class="caja_departamento">
<h1 class="title">{$obj->mName}</h1>
<p class="description">{$obj->mDescription}</p>
</div>
{include file="products_list.tpl"}
