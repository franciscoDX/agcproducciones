@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 justify-content-between">
		<h4><a href="{{ URL('/servicios') }}">Servicios</a> / Fotografía</h4>
		<a class="d-flex align-items-end btn btn-danger" href="{{ url('cotizar') }}">Cotizar</a>
	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/fotografia/productos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/3.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fotografia de Produtos</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Fotografía de Productos</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box"> 				
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/4.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fotografía de Eventos</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Fotografía de Eventos</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/8.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fotografía Institucional</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Fotografía Institucional</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/4.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fotografía Publicitaría</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Fotografía Publicitaria</h2></div>
 		</div>
 	</div>
 	</div>

@endsection