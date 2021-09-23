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
Route::get('/limpiar', function () {
   echo Artisan::call('config:clear');
   echo Artisan::call('config:cache');
   echo Artisan::call('cache:clear');
   echo Artisan::call('route:clear');
});
Route::get('/', function () {
  if (Auth::check()) {
      return redirect()->route('inscription');
   } else {
      return redirect()->route('register');
   }
});

Auth::routes(['register'=>false]);

Route::get('inscripcion/solicitud','SolicitudController@index')->name('register');
Route::post('inscripcion/solicitud','SolicitudController@store');

Route::get('inscripcion/pago', 'PagoController@index')->name('pago.index');
Route::get('/getEspecialidades','PagoController@getEspecialidades')->name('getEspecialidades');
Route::post('inscripcion/pago/enviarHaciaPlataforma','PagoController@enviarHaciaPlataforma');

Route::middleware(['auth'])->group(function() {
  Route::get('inscripcion/ficha','FichaController@index')->name('inscription');
  Route::post('inscripcion/ficha','FichaController@store');
  Route::post('/fichaPDF','ReporteController@generatePDF')->name('fichaPDF');
});

Route::get('/{slug}', function () {
  if (Auth::check()) {
      return redirect()->route('inscription');
   } else {
      return redirect()->route('register');
   }
});
