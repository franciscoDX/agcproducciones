@extends('web.template.main')

@section('content')
	<div class="d-flex pt-3 justify-content-between coti">
		<h4>Servicios / Fotografias / Productos</h4>
		<a class="d-flex align-items-end" href="{{ url('cotizar') }}">Cotizar</a>
	</div>

 	    <div class="galeria-imagenes">
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
@endsection