<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
	<a href="" class="navbar-brand p-0">
		<h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>{{ config('app.name') }}</h1>
		<!-- <img src="img/logo.png" alt="Logo"> -->
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="fa fa-bars"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<div class="navbar-nav ms-auto py-0 pe-4">
			<a href="{{route('home')}}" @class(["nav-item nav-link","active"=>Route::is('home')])>{{__('home')}}</a>
			<a href="{{route('about')}}" @class(["nav-item nav-link","active"=>Route::is('about')])>{{__('about')}}</a>
			<a href="{{route('service')}}" @class(["nav-item nav-link" ,"active"=>Route::is('service')])>{{__('service')}}</a>
			<a href="{{route('menu')}}" @class(["nav-item nav-link","active"=>Route::is('menu')])>{{__('menu')}}</a>
			<div class="nav-item dropdown">
				<a href="#"
					@class(["nav-link dropdown-toggle ","active"=>Route::is('team',"testimonial","booking")]) data-bs-toggle="dropdown">Pages</a>
				<div class="dropdown-menu m-0">
					<a href="{{route('booking')}}" @class(["dropdown-item","active"=>Route::is('booking')])>{{__('booking')}}</a>
					<a href="{{route('team')}}" @class(["dropdown-item","active"=>Route::is('team')])>{{__('team')}}</a>
					<a href="{{route('testimonial')}}" @class(["dropdown-item","active"=>Route::is('testimonial')])>{{__('testimonial')}}</a>
				</div>
			</div>
			<a href="{{route('contact')}}" @class(["nav-item nav-link","active"=>Route::is('contact')])>{{__('contact')}}</a>
		</div>
{{--		<a href="{{route('booking')}}" class="btn btn-primary py-2 px-4">Book A Table</a>--}}
		{{-- pour les langues ou pour l'internationalization--}}
		<div class="nav-item dropdown">
			<a href="#" data-bs-toggle="dropdown" class="border shadow rounded nav-link dropdown-toggle">
				Langue <i class="fas fa-sign-language"></i>
			</a>
			<div class="dropdown-menu m-0">
				@foreach(LaravelLocalization::getSupportedLocales() as $key=>$locale)
					<a href="{{LaravelLocalization::getLocalizedUrl($key)}}" @class(["text-right dropdown-item","active"=>$key == LaravelLocalization::getCurrentLocale()])>
						<x-dynamic-component component="flag-language-{{ $key }}"  />
						{{$locale['name']}}
					</a>
				@endforeach
			</div>
		</div>
	</div>
</nav>
