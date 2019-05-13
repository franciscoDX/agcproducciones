@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 justify-content-between pb-3">
		<h4><a href="{{ URL('/servicios') }}">Servicios</a> / <a href="{{ URL('/servicios/fotografia') }}">Fotografía</a> / <a href="{{ URL('/servicios/fotografia/productos') }}">Productos</a></h4>
		<a class="d-flex align-items-end btn btn-danger" href="{{ url('cotizar') }}">Cotizar</a>
	</div>

 	    <div class="galeria-imagenes pb-5">
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/2.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/2.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/3.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/3.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/4.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/4.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/5.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/5.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/6.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/6.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/7.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/7.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/8.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/8.jpg')}}" >
          		</a>
	  	    </div>
	  	    <div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/14.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/14.jpg')}}" >
          		</a>
	  	    </div>
	  	   	<div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/10.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/10.jpg')}}" >
          		</a>
	  	    </div>
   	  	   	<div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/11.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/11.jpg')}}" >
          		</a>
	  	    </div>
   	  	   	<div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/12.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/12.jpg')}}" >
          		</a>
	  	    </div>
   	  	   	<div class="imagen">
	  	    	<a href="{{ asset('imagen/muestra/13.jpg')}}" data-lightbox="roadtrip">
            	<img src="{{ asset('imagen/muestra/13.jpg')}}" >
          		</a>
	  	    </div>
	  	</div>
</div>
@endsection