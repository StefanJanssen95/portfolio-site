@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		{{ __('navigation.blog') }}
	@endcomponent
@endsection