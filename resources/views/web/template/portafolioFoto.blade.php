@extends('web.template.main')

@section('content')
	<div class="text-center"><h1>Portafolio Fotos</h1></div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/fotos/galeria') }}">
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
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/portafolio/fotos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/4.jpg')}}">
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
 				<a href="{{ url('/portafolio/fotos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/8.jpg')}}">
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
 				<a href="{{ url('/portafolio/fotos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/4.jpg')}}">
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