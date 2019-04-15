<!-- Portafolio -->
<div class="modal hide fade" id="portafolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imagen/LogoAGC.png')}}" class="logochico" ></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body porfolio">
      	<h3>Portafolio</h3>
	    <div class="portafolio-modal">
	    	<h5><a href="{{ url('/portafolio/fotos') }}">Fotos</a></h5>
      		<h5><a href="{{ url('/portafolio/galeria-videos') }}">Videos<a/></h5>
	    </div>
        
      </div>

    </div>
  </div>
</div>

<!-- Nosotros -->

<!-- Modal -->
<div class="modal hide fade" id="nosotros" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imagen/LogoAGC.png')}}" class="logochico" ></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<h3>Nosotros</h3>
      	<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></div>
        
      </div>

    </div>
  </div>
</div>
