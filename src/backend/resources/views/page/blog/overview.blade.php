@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		@slot('icon') comment @endslot
		{{ __('navigation.blog') }}
	@endcomponent

	@foreach( $blogPosts as $post )

		<article class="blog--post">
			<a href="/blog/{{$post->id}}">
				<h3 class="post--title">{{$post->name}}</h3>
				<p class="post-description">{{$post->description}}</p>
				<time datetime="{{$post->published_at}}" class="post--published">{{$post->published_at}}</time>
			</a>
		</article>

	@endforeach
@endsection