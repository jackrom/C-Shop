{* departments_list.tpl *}
{load_presentation_object filename="departments_list" assign="obj"}
{* Start departments list *}
<div class="categories widget widget__sidebar">
	<h3 class="widget-title">Departamentos</h3>
	<div class="widget-content">
		<div class="list list-style__check">
		  <ul>
		  {* Loop through the list of departments *}
		  {section name=i loop=$obj->mDepartments}
		    {assign var=selected value=""}
		    {* Verify if the department is selected to decide what CSS style to use *}
		    {if ($obj->mSelectedDepartment == $obj->mDepartments[i].department_id)}
		      {assign var=selected value="class=\"selected\""}
		    {/if}
		    <li>
		      {* Generate a link for a new department in the list *}
		      <a {$selected} href="{$obj->mDepartments[i].link_to_department}">
		        {$obj->mDepartments[i].name}
		      </a>
		    </li>
			  {/section}
			  {assign var=selected value=""}
		  </ul>
		</div>
	</div>
</div>
{* End departments list *}
