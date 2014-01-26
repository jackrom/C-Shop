<!-- Sidebar -->

<aside class="sidebar grid_3" id="sidebar">
	
	
	<!-- Search box Widget -->
	{include file="search_box.tpl"}
	<!-- Login Widget -->
	{include file=$obj->mLoginOrLoggedCell}
  	{if !$obj->mHideBoxes}
  		<!-- Cart Summary Widget -->
	    {include file=$obj->mCartSummaryCell}
  		<!-- Departments Widget -->
	   	{include file="departments_list.tpl"}
	    <!-- Categories Widget -->
	    {include file=$obj->mCategoriesCell}
	    
  	{/if}
	<!-- /Categories Widget -->
	
	
	<!-- Tags Widget -->
	<div class="tagcloud widget widget__sidebar">
		<h3 class="widget-title">Tags</h3>
		<div class="widget-content">
			<a href="#">lorem</a><a href="#">sit ame dolor</a><a href="#">ullamcorper</a><a href="#">sit ame dolor</a><a href="#">lorem</a><a href="#">magna temp</a><a href="#">lorem</a><a href="#">dolor ame</a>
		</div>
	</div>
	<!-- /Tags Widget -->
	<!-- Text Widget -->
	<div class="text-widget widget widget__sidebar">
		<h3 class="widget-title">Widget</h3>
		<div class="widget-content">
			Sed in dignissim sem. Etiam sceler elit eu magna tempus nec bibendum purus accumsan. Aenean libero libero, rutrum ac vehicula sed, pretium 
		</div>
	</div>
	<!-- /Text Widget -->
	<!-- Recent Posts Widget -->
	<div class="latest-posts widget widget__sidebar">
		<h3 class="widget-title">Posts Recientes</h3>
		<div class="widget-content">
			<ul class="thumbs-list thumbs-list__clean">
				<li class="list-item clearfix">
					<figure class="thumb-simple thumb__hovered">
						<a href="post.html"><img src="images/samples/post-img-xs-1.jpg" height="70" width="70" alt=""></a>
					</figure>
					<h5 class="item-heading"><a href="#">Aenean libero libero</a></h5>
					<span class="date">14 April, 2013</span>
					<div class="item-excerpt">Nascetur sitduim fusce ales morbi...</div>
				</li>
				<li class="list-item clearfix">
					<figure class="thumb-simple thumb__hovered">
						<a href="post.html"><img src="images/samples/post-img-xs-2.jpg" height="70" width="70" alt=""></a>
					</figure>
					<h5 class="item-heading"><a href="#">Fusce lacinia</a></h5>
					<span class="date">14 April, 2013</span>
					<div class="item-excerpt">Nascetur sitduim fusce ales morbi...</div>
				</li>
				<li class="list-item clearfix">
					<figure class="thumb-simple thumb__hovered">
						<a href="post.html"><img src="images/samples/post-img-xs-3.jpg" height="70" width="70" alt=""></a>
					</figure>
					<h5 class="item-heading"><a href="#">Suspendisse blandit</a></h5>
					<span class="date">14 April, 2013</span>
					<div class="item-excerpt">Nascetur sitduim fusce ales morbi...</div>
				</li>
			</ul>
			<a href="blog.html" class="button"><span class="button-inner">Ver todos</span></a>
		</div>
	</div>
	<div class="latest-posts widget widget__sidebar">
		<h3 class="widget-title">Algo que decirnos?</h3>
		<div class="widget-content">
			<div class="fb-comments" data-href="http://jcarlosreyesc.yensi.com.ve/tienda" data-width="270" data-num-posts="3"></div>
		</div>
	</div>
	<div class="latest-posts widget widget__sidebar">
		<h3 class="widget-title">Compartes esta p&aacute;gina?</h3>
		<div class="widget-content">
			<div class="g-plusone" data-annotation="inline"></div>
		</div>
	</div>
	<!-- /Recent Posts Widget -->
</aside>
<div id="fb-root"></div>
<script>(function(d, s, id) {ldelim}
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=276583045711474";
  fjs.parentNode.insertBefore(js, fjs);
{rdelim}(document, 'script', 'facebook-jssdk'));</script>




<script type="text/javascript">
window.___gcfg = {ldelim}lang: 'es-419'{rdelim};
(function() 
{ldelim}var po = document.createElement("script");
po.type = "text/javascript"; po.async = true;
po.src = "https://apis.google.com/js/plusone.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(po, s);
{rdelim})();
</script>

<!-- Sidebar / End -->