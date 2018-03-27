{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
	

	


	@if (!have_posts())
		<div class="alert alert-warning">
			{{ __('Oj, här var det tomt!', 'sage') }}
		</div>
		{!! get_search_form(false) !!}
	@endif

	@while (have_posts()) @php(the_post())
		
		EAT MO!

		@include('partials.content-'.get_post_type())
	@endwhile

	{!! get_the_posts_navigation() !!}
@endsection