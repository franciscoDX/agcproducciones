@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 justify-content-between">
		<h4><a href="{{ URL('/servicios') }}">Servicios</a> / <a href="{{ URL('/servicios/audiovisuales') }}">Audiovisuales</a> / Corporativos</h4>
		<a class="d-flex align-items-end btn btn-danger" href="{{ url('cotizar') }}">Cotizar</a>
	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/audiovisuales/corporativos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/15.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Entel</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Entel</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/audiovisuales/corporativos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/7.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Claro</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Claro</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/audiovisuales/corporativos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/5.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Bitel</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Bitel</h2></div>
 		</div>
 		<div class="col-md-6">
 			<div class="box">
 				<a href="{{ url('/servicios/audiovisuales/corporativos/galeria') }}">
 				<img class="w-100" src="{{ asset('imagen/muestra/3.jpg')}}">
 				<div class="text-box">
 					<div class="text">
 						<h2>Movistar</h2>
 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
 					</div>
 				</div>
 				</a>
 			</div>
 			<div class="text-center"><h2>Movistar</h2></div>
 		</div>
 	</div>
</div>
@endsection