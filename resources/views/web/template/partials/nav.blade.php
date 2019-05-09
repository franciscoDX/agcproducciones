<div class="pruebas2 opa">
  <div class="container-fluid col-md-11">
  <nav class="navbar navbar-expand-lg navbar-dark pruebas2">
   	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imagen/LogoAGC.png')}}" class="logochico" ></a>
     	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       	<span class="navbar-toggler-icon"></span>
     	</button>
    <div class="collapse navegacion navbar-collapse" id="navbarSupportedContent">
     	<ul class="navbar-nav ml-auto textoup">
       	<li class="nav-item">
         	<a class="nav-link" href="{{ url('/') }}">Inicio</a>
       	</li>
        <li class="nav-item">
          <a href="{{ url('nosotros') }}" class="nav-link">Nosotros</a>
        </li>
{{--       	<li class="nav-item">
         	<a href="#portafolio" data-toggle="modal" data-target="#portafolio" class="nav-link">Portafolio</a>
       	</li> --}}
{{--         <li class="nav-item">
          <a href="#" class="nav-link">Usuarios</a>
        </li> --}}
        <li class="nav-item">
          <a href="{{ url('servicios') }}" class="nav-link">Servicios</a>
        </li>
       	<li class="nav-item">
         	<a class="nav-link" href="{{ url('/cotizar') }}">Contacto</a>
       	</li>
       	<!-- FIN DE MODAL EN links! -->
      </ul>
    </div>
  </nav>
</div>
</div>