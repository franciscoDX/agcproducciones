@extends('web.template.main')

@section('content')
<div class="d-flex justify-content-center fondologo">
	<div class="servi">
	<h2  class="text-center">SERVICIOS</h2>
        <div class="porfolio">
          <div class="text-center">
            <h3 class="text-center">AUDIOVISUALES</h3>
            <p>Videos Corporativos</p>
            <p>Videos Promocionales</p>
            <p>Videos para Redes Sociales</p>
            <p>Videos de Eventos</p>
            <div class="pt-3 text-center"><a class="pb-3" href="{{ url('/servicios/audiovisuales') }}">Ver portafolio</a></div>
            <div class="coti text-center"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div class="text-center">
            <h3 class="text-center">FOTOGRAFÍA</h3>
            <p>Fotografía de Productos</p>
            <p>Fotografía de Eventos</p>
            <p>Fotografía Institucional</p>
            <p>Fotografía Publicitaria</p>
            <div class="pt-3 text-center"><a href="{{ url('/servicios/fotografia') }}">Ver portafolio</a></div>
            <div class="coti text-center"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div class="text-center">
            <h3 class="text-center">ANIMACIONES</h3>
            <p>Animación 2D</p>
            <p>Animación 3D</p>
            <p>Motion Graphics</p>
            <p>Retoque Fotográfico</p>
            <div class="pt-3 text-center"><a href="#">Ver portafolio</a></div>
            <div class="coti text-center"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
          <div class="text-center">
            <h3 class="text-center">DISEÑO GRÁFICO</h3>
            <p>Construcción de Marca</p>
            <p>Ilustraciones</p>
            <p>Piezas Gráficas</p>
            <p>Manuales de Identidad de marca</p>
            <div class="pt-3 text-center"><a href="#">Ver portafolio</a></div>
            <div class="coti text-center"><a href="{{ url('cotizar') }}">Cotizar</a></div>
          </div>
        </div>
        </div>
</div>



@endsection