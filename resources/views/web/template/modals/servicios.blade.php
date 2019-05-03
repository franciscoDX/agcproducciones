<!-- Portafolio -->
<div class="modal hide fade" id="servicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imagen/LogoAGC.png')}}" class="logochico" ></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body porfolio">
      	<h3>Pruebas</h3>

	    <div class="portafolio-modal">
	    	<h5><a href="{{ url('/portafolio/fotos') }}">Fotos</a></h5>
      	<h5><a href="{{ url('/portafolio/galeria-videos') }}">Videos<a/></h5>
          
	    </div>
        
      </div>

    </div>
  </div>
</div>