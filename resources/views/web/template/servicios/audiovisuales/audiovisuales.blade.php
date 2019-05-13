@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 justify-content-between">
		<h4><a href="{{ URL('/servicios') }}">Servicios</a> / Audiovisuales</h4>
		<a class="d-flex align-items-end btn btn-danger" href="{{ url('cotizar') }}">Cotizar</a>
	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/audiovisuales/corporativos') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/12.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Videos Corporativos</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Videos Corporativos</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/6.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Videos Promocionales</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Videos Promocionales</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/4.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Videos para Redes Sociales</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Videos Para Redes Sociales</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="#">
 				<img class="w-100" src="{{ asset('imagen/muestra/2.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Videos de Eventos</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Videos de Eventos</h2></div>
 		</div>
 	</div>
</div>
@endsection