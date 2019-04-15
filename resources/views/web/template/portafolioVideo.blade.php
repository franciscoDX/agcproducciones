@extends('web.template.main')

@section('content')
	<div class="text-center"><h1>Portafolio Videos</h1></div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/galeria-videos/videos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/15.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>lorem ipsum</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/galeria-videos/videos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/7.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>lorem ipsum</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/galeria-videos/videos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/5.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>lorem ipsum</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/galeria-videos/videos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/3.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>lorem ipsum</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 	</div>

@endsection