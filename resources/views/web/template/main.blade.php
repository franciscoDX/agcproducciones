<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/lightbox/css/lightbox.css') }}" >
  </head>
  <body>
  	<div class="container-fluid col-md-11">
  		<!-- Navegacion -->
  		@include('web.template.partials.nav')

  		<section>
  			@yield('content')
  		</section>
    </div>
    <div class="container col-md-11">
      <section>
        @yield('contenido')
      </section>
    </div>
    <div class="container-fluid col-md-11">
  		@include('web.template.partials.footer')
  	</div>
	  	@include('web.template.modals.modal')
      @include('web.template.modals.servicios')

 
  		<script src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}"></script>
  		<script src="{{asset('plugins/lightbox/js/lightbox-plus-jquery.min.js')}}"></script>
  		<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  	</body>
</html>
