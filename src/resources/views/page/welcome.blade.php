@extends('template.template')

@section('title', 'Welcome')

@section('content')
	<h1 class="typewriter__title">I am <span class="typewriter__title--bold" id="typewriter-text" data-text="{{ $text }}"></span></h1>
	<script src="/js/typewriter.js"></script>
@endsection