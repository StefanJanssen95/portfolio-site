@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') rocket @endslot
		{{ __('navigation.admin') }}
	@endcomponent

	<a href="/admin" class="admin--back">BACK</a>
	@if( isset( $message ))
		{{$message}}
	@endif
	<form class="admin-blog--form" enctype="multipart/form-data" method="post" action="blog">
		{{ csrf_field() }}
		<input type="text" placeholder="Name" name="name">
		<input type="text" placeholder="Description" name="description">
		<input type="file" name="markdown">
		<input type="submit" value="Add Blog">
	</form>
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DESCRIPTION</th>
			<th>PUBLISHED AT</th>
			<th>MANAGE</th>
		</tr>
	@foreach( $blogPosts as $blogPost )
		<tr>
			<td>{{$blogPost->id}}</td>
			<td>{{$blogPost->name}}</td>
			<td>{{$blogPost->description}}</td>
			<td>{{$blogPost->published_at}}</td>
			<td>
				<form method="post" action="/admin/blog/delete/{{$blogPost->id}}">
					<input type="hidden" name="_method" value="DELETE">
					{{csrf_field()}}
					<input type="submit" class="fa fa-trash">
				</form>
			</td>
		</tr>
	@endforeach
	</table>
@endsection