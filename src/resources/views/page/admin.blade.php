@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') rocket @endslot
		{{ __('navigation.admin') }}
	@endcomponent
	{{ Hash::make('test') }}
	<form method="post" action="/login">
		<label for="username">Username: </label><input id="username" name="username" type="text"><br>
		<label for="password">Password: </label> <input type="password" id="password" name="password"><br>
		<input type="submit" value="Sign in">
	</form>
@endsection