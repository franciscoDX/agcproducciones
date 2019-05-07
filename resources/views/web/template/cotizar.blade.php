@extends('web.template.main')

@section('content')

 	<div class="row pb-3"> 		
        <div class="mx-auto barra">
            <span>COTIZA CON NOSOTROS</span>

        </div>

 	</div>
 	<div class="row"> 		
        <div class="mx-auto col-md-6">
        <form action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre y Apellido</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre y Apellido">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">fecha reserva</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefono</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="(+51)">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="primary">Servicio</label>
      <select id="primary" class="form-control">
        <option value="audiovisuales">Audiovisuales</option>
      	<option value="fotografia">fotografía</option>
      	<option value="animaciones">Animaciones</option>
      	<option value="diseno">Diseño Gráfico</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="secondary">Categoria</label>
      <select id="secondary" class="form-control">
        <option selected>Selecciona...</option>
        <option>Manuales de identidad de marca</option>
      </select>
    </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Asunto</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="125 Carácteres"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<div>

</div>
<br><br>
 	</div>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

var options = {
		audiovisuales : ["Videos Corporativos","Videos Promocionales","Videos Para Redes Sociales","Videos de Eventos"],
		fotografia : ["Fotografía de Productos","Fotografía de Eventos","Fotografía Institucional", "Fotografía Publicitaria"],
		animaciones : ["Animación 2D", "Animación 3D", "Motion Graphics", "Retoque fotográfico"],
		diseno : ["Construcción de Marca", "Ilustraciones", "Piezas Gráficas", "Manual de identidad de Marca"]
}

$(function(){
	var fillSecondary = function(){
		var selected = $('#primary').val();
		$('#secondary').empty();
		options[selected].forEach(function(element,index){
			$('#secondary').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#primary').change(fillSecondary);
	fillSecondary();
});
</script>
@endsection

