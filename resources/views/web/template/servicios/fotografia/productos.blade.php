@extends('web.template.main')

@section('content')
	<div class="d-flex justify-content-between coti">
		<h4>Servicios / Fotografias / Productos</h4>
		<a class="d-flex align-items-end" href="#">Cotizar</a>
	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/13.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Shampoo</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/15.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Gomitas</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/2.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Colgate</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/14.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Aceite</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 		</div>
 	</div>

@endsection