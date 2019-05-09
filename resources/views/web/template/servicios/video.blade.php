@extends('web.template.main')

@section('content')
<div class="container-fluid col-md-11">
	<div class="d-flex pt-3 pb-3 justify-content-between coti">
		<h4>Audiovisuales / Corporativos </h4>
		<a class="d-flex align-items-end" href="{{ url('cotizar') }}">Cotizar</a>
	</div>
 	<div class="row justify-content-center">
        <div class="col-sm-12 pb-4">
	        <div class="embed-responsive embed-responsive-16by9">
	  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KTyqJeh-u1c" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-sm-12 pb-5">
			<h2>Titulo Video</h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
		</div>
	</div>
</div>

@endsection