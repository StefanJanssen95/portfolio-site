@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') cogs @endslot
		{{ __('navigation.skills') }}
	@endcomponent
	<section class="skill__container">
		@foreach( $skills as $skill )
			<div class="skill">
				<img src="images/skills/{{$skill['logo']}}" alt="{{$skill['name']}}" class="skill__image">
				{{--<span>{{ $skill['name'] }}</span>--}}
			</div>
		@endforeach

	</section>
@endsection