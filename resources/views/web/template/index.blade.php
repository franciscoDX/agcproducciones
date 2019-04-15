@extends('web.template.main')

@section('contenido')
	<div class="row justify-content-center">
        <div class="col-sm-12 pruebas2">
	        
	    	    <video class="video-bg" autoplay muted loop>
	        		<source src="{{ asset('imagen/Franquicia.mp4')}}" type="video/mp4" />
	          		<source src="{{ asset('imagen/Franquicia.mp4')}}" type="video/webm" />
	        	</video>
	  		
		</div>
	</div>
@endsection