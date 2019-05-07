<!-- Portafolio -->
<div class="modal hide fade" id="servicios" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imagen/LogoAGC.png')}}" class="logochico" ></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <h2 class="x">x</h2>
        </button>
      </div>
      <div class="modal-body">
        <div><h2>SERVICIOS</h2></div><br>
        <div class="porfolio">
          <div>
            <div>AUDIOVISUALES</div>
            <p>Videos Corporativos</p>
            <p>Videos Promocionales</p>
            <p>Videos para Redes Sociales</p>
            <p>Videos de Eventos</p>
            <a href="{{ url('/servicios/audiovisuales') }}">Ver portafolio</a>
            <div class="coti"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div>
            <div>FOTOGRAFÍA</div>
            <p>Fotografía de Productos</p>
            <p>Fotografía de Eventos</p>
            <p>Fotografía Institucional</p>
            <p>Fotografía Publicitaria</p>
            <a href="{{ url('/servicios/fotografia') }}">Ver portafolio</a>
            <div class="coti"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div>
            <div>ANIMACIONES</div>
            <p>Animación 2D</p>
            <p>Animación 3D</p>
            <p>Motion Graphics</p>
            <p>Retoque Fotográfico</p>
            <a href="#">Ver portafolio</a>
            <div class="coti"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div>
            <div>DISEÑO GRÁFICO</div>
            <p>Construcción de Marca</p>
            <p>Ilustraciones</p>
            <p>Piezas Gráficas</p>
            <p>Manuales de Identidad de marca</p>
            <a href="#">Ver portafolio</a>
            <div class="coti"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

