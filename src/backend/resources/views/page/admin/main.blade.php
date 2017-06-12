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
			<div class="admin--cell">
				<a href="/admin/blog">
					<i class="fa fa-comment fa-2x"></i>
					Blogs
				</a>
			</div>
			<div class="admin--cell">
				<a href="/admin/stats">
					<i class="fa fa-area-chart fa-2x"></i>
					Stats
				</a>
			</div>
			<div class="admin--cell">
				<a href="/admin/translations">
					<i class="fa fa-font fa-2x"></i>
					Texts and Translations
				</a>
			</div>
			<div class="admin--cell">
				<a href="/admin/skills">
					<i class="fa fa-cogs fa-2x"></i>
					Skills
				</a>
			</div>
			<div class="admin--cell">
				<a href="/admin/projects">
					<i class="fa fa-code-fork fa-2x"></i>
					Projects
				</a>
			</div>
		</div>
	@endif
@endsection