@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') comment @endslot
		{{ __('navigation.blog') }}
	@endcomponent
@endsection