@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') code-fork @endslot
		{{ __('navigation.projects') }}
	@endcomponent

	<section class="project__container">
		@foreach( $projects as $project )
			<div class="project" style="background-image: url('images/projects/{{$project['photo']}}');">
				{{--<img src="images/projects/{{$project['photo']}}" alt="{{$project['name']}}" class="project__image">--}}
			</div>
		@endforeach
	</section>

@endsection