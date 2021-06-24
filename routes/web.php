<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('entidads', 'EntidadController');
Route::resource('nosotros', 'NosotrosController');
Route::resource('paquetesYPromociones', 'PaquetesYPromocionesController');
Route::resource('registroDeActividades', 'RegistroDeActividadesController');
Route::resource('centroDeLlamadas', 'CentroDeLlamadasController');
Route::resource('trabajadores', 'TrabajadoresController');

Route::resource('facturas', 'FacturasController');
Route::resource('facturaDetalles', 'FacturaDetallesController');
Route::resource('servicios', 'ServiciosController');
Route::resource('personas', 'PersonasController');