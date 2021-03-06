<li class="border-t border-grey-lightest relative">
	<a href="{{ the_permalink($item->ID) }}" title="{{ $item->post_title }}" class="block py-4 px-3 w-10/12 block {{ $item->active ? 'active font-bold' : '' }}">
		<span class="inline-block text-black text-base no-underline hover:underline focus:underline">{{ $item->post_title }}</span>
	</a>
	@if (!empty($item->children))
	<button class="js-sidebar-nav__toggle-btn flex h-8 w-8 rounded-full bg-white hover:bg-grey-lightest absolute pin-r pin-t mt-2 items-center justify-center mr-2" aria-label="Visa tillhörande länkar">
		<svg class="h-4 w-4 align-middle">
			<use xlink:href="#chevron-down"/>
		</svg>
	</button>
	<ul class="js-sidebar-nav__list  list-reset border-l-4 border-blue-dark bg-grey-lightest hidden">
		@foreach($item->children as $item)
			@include('partials.child-list')
		@endforeach
	</ul>
	@endif
</li>