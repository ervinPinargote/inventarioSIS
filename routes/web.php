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
|  Apartado para generar las rutas, de la aplicacion.
|
*/

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('/clientes','ClientesController');
Route::resource('/vendedores','VendedoresController');
Route::resource('/proveedores','ProveedoresController');
Route::resource('/categorias','CategoriasController');
Route::resource('/articulos','ArticulosController');
Route::resource('/promociones','PromocionessController');
Route::resource('/compras','ComprasController');
Route::resource('/marcas','MarcaController');
Route::resource('/items_detalle','ItemController');

Route::resource('/ventas','VentaController');




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'IndexController@index')->name('inicio');
Route::get('/reportes', 'PDFController@PDF')->name('reportePrueba');
Route::get('/reporteInventario', 'PDFController@PDFInventaro')->name('reporteInventario');
Route::get('/reporteInventario2', 'PDFController@PDFArticulosPromocion')->name('ReporteArticuloPromocion');
Route::get('/reporteInventario3', 'PDFController@PDFArticulosPrecio')->name('ReporteArticuloPrecio');


Route::get('items_detalle/compras/{id}','ItemController@create')->name('registrar_item'); # RUTA ADICIONAL PARA MOSTRAR LOS DATOS DEL FORM.

//Route::get('/Clientes', 'ClientesController@index')->name('Clientes');
//Route::get('/Clientes_Create', 'ClientesController@create')->name('Crear_Cliente');




Route::get('/home', 'HomeController@index')->name('home');
