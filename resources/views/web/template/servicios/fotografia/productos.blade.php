@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 justify-content-between">
		<h4><a href="{{ URL('/servicios') }}">Servicios</a> / <a href="{{ URL('/servicios/fotografia') }}">Fotografía</a> / Productos</h4>
		<a class="d-flex align-items-end btn btn-danger" href="{{ url('cotizar') }}">Cotizar</a>
	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/13.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Canelié</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Canelié</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/15.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Raw Café</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Raw Café</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/2.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fitosana</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Fitosana</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/14.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Apuesta Total</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Apuesta Total</h2></div>
 		</div>
 	</div>

</div>
@endsection