@extends('web.template.main')

@section('content')
	<div class="d-flex justify-content-between coti">
		<h4>Servicios / Fotografía</h4>
		<a class="d-flex align-items-end" href="#">Cotizar</a>
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
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/8.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Fotografia Institucional</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
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
 		</div>
 	</div>

@endsection