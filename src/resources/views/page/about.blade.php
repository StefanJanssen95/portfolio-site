@extends('template.template')

@section('content')
	@component('component.header-ribbon')
		{{ __('navigation.about') }}
	@endcomponent

	<section>
		<p>{{ __('about.paragraph1') }}</p>
		<p>{{ __('about.paragraph2') }}</p>
	</section>
	<div class="about__specialty-container">
		<section class="about__specialty">
			<img src="" alt="" class="about__specialty-image">
			<h4 class="about__specialty-title">{{ __('about.gameDevTitle') }}</h4>
			<p class="about__specialty-description">
				{{ __('about.gameDevDescription') }}
			</p>
		</section>
		<section class="about__specialty">
			<img src="" alt="" class="about__specialty-image">
			<h4 class="about__specialty-title">{{ __('about.fullStackTitle') }}</h4>
			<p class="about__specialty-description">
				{{ __('about.fullStackDescription') }}
			</p>
		</section>
		<section class="about__specialty">
			<img src="" alt="" class="about__specialty-image">
			<h4 class="about__specialty-title">{{ __('about.problemSolverTitle') }}</h4>
			<p class="about__specialty-description">
				{{ __('about.problemSolverDescription') }}
			</p>
		</section>
	</div>
@endsection