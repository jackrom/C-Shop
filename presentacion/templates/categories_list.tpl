{* categories_list.tpl *}
{load_presentation_object filename="categories_list" assign="obj"}
{* Start categories list *}
<!-- Categories Widget -->
<div class="categories widget widget__sidebar">
	<h3 class="widget-title">Categorias</h3>
	<div class="widget-content">
		<div class="list list-style__check">
		  <ul>
		  {section name=i loop=$obj->mCategories}
		    {assign var=selected value=""}
		    {if ($obj->mSelectedCategory == $obj->mCategories[i].category_id)}
		      {assign var=selected value="class=\"selected\""}
		    {/if}
		    <li>
		      <a {$selected} href="{$obj->mCategories[i].link_to_category}">
		        {$obj->mCategories[i].name}
		      </a>
		    </li>
		  {/section}
		  </ul>
		</div>
	</div>
</div>
<!-- /Categories Widget -->

{* End categories list *}
