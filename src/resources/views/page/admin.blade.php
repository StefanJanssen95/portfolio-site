@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') rocket @endslot
		{{ __('navigation.admin') }}
	@endcomponent

	@if( !Auth::user() )
		@if( $errors->any() )
			@foreach( $errors->getBag('default')->all() as $message )
				<p>{{$message}}</p>
			@endforeach
		@endif
		<form method="post" action="{{ route('login') }}">
			{{ csrf_field() }}
			<label for="email">Email: </label><input id="email" name="email" type="text"><br>
			<label for="password">Password: </label> <input type="password" id="password" name="password"><br>
			<input type="submit" value="Sign in">
		</form>
	@else
		<div class="admin--grid">

		</div>
	@endif
@endsection