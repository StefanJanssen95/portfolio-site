@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') comment @endslot
		{{ __('navigation.blog') }}
	@endcomponent

	<h2>{{$post->name}}</h2>
	<div class="post">
		{!! Storage::get($post->html_path) !!}
	</div>
@endsection