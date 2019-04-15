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

Route::get('/portafolio/fotos', function () {
    return view('web.template.portafolioFoto');
});

Route::get('/portafolio/fotos/galeria', function () {
    return view('web.template.galeria');
});

Route::get('/portafolio/galeria-videos', function () {
    return view('web.template.portafolioVideo');
});
Route::get('/portafolio/galeria-videos/videos', function () {
    return view('web.template.video');
});