<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.template.index');
});
Route::get('/pago', function () {
    return view('web.template.pago');
});

Route::get('/cotizar', function() {
	return view('web.template.cotizar');
});

Route::get('/servicios', function() {
	return view('web.template.partials.servicios');
});
Route::get('/nosotros', function() {
	return view('web.template.partials.nosotros');
});
Route::get('/condiciones', function() {
	return view('web.template.partials.condiciones');
});
Route::get('/privacidad', function() {
	return view('web.template.partials.privacidad');
});
Route::get('/clientes', function() {
	return view('web.template.clientes.clientes');
});

Route::group(['prefix' => 'servicios'], function() {
	Route::group(['prefix' => 'audiovisuales'], function() {
		Route::get('/', function () {
		    return view('web.template.servicios.audiovisuales.audiovisuales');
		});
		Route::get('/corporativos', function () {
		    return view('web.template.servicios.audiovisuales.corporativos');
		});		
		Route::get('/corporativos/galeria', function () {
		    return view('web.template.servicios.video');
		});
	});
	Route::group(['prefix' => 'fotografia'], function() {
		Route::get('/', function () {
		    return view('web.template.servicios.fotografia.fotografia');
		});
		Route::get('/productos', function () {
		    return view('web.template.servicios.fotografia.productos');
		});		
		Route::get('/productos/galeria', function () {
		    return view('web.template.servicios.galeria');
		});
	});
	Route::get('/galeria-videos', function () {
	    return view('web.template.portafolioVideo');
	});
	Route::get('/galeria-videos/videos', function () {
	    return view('web.template.video');
	});
});
