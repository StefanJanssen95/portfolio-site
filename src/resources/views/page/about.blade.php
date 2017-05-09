@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		{{ __('navigation.about') }}
	@endcomponent

	<section>
		<p>{{ __('about.paragraph1') }}</p>
		<p>{{ __('about.paragraph2') }}</p>
	</section>

@endsection