{* search_box.tpl *}
{load_presentation_object filename="search_box" assign="obj"}
{* Start search box *}
<!-- Search Widget -->
<div class="search-widget widget widget__sidebar">
	<div class="widget-content">
		<form action="{$obj->mLinkToSearch}" class="search-form clearfix" method="post">
			 <input type="text" maxlength="100" id="search_string" name="search_string" value="{$obj->mSearchString}"  placeholder="Buscar producto..." />
			<input type="checkbox" id="all_words" name="all_words" {if $obj->mAllWords == "on"} checked="checked" {/if}/> Incluir todas las palabras
			<button type="submit" value="Search" name="Search"><i class="icon-search"></i></button>
		</form>
	</div>
</div>
<!-- /Search Widget -->
{* End search box *}
