@if(isset($nav_site) && !empty($nav_site))
<div class="">
	<ul class="js-site-nav  list-reset">
		@each('partials.nav-mobile-child-list', $nav_site, 'item')
	</ul>
</div>
@endif