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
    return view('welcome');
});


############# RUTAS USUARIOS INVITADOS ##########

Route::get('/inicio', 'InicioController@index');

Route::get('/sobreNosotros',function(){
    return view('sobreNosotros');
});

Route::get('/preguntasFrecuentes',function(){
    return view('preguntasFrecuentes');
});

Route::get('/contacto',function(){
    return view('contacto');
});

############ CRUD CATEGORIAS ################
//Route::view('/adminCategorias', 'adminCategorias');
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

Route::get('/formModificarCategoria/{id}','CategoriasController@edit');
Route::post('/modificarCategoria','CategoriasController@update');

Route::get('/formEliminarCategoria/{id}','CategoriasController@delete');
Route::post('eliminarCategoria','CategoriasController@destroy');

############## CRUD Marcas ###################
Route::get('/adminMarcas', 'MarcasController@index');

Route::get('/formAgregarMarca', 'MarcasController@create');
Route::post('/agregarMarca', 'MarcasController@store');

Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/modificarMarca', 'MarcasController@update');

Route::get('/formEliminarMarca/{id}','MarcasController@delete');
Route::post('/eliminarMarca','MarcasController@destroy');

############## CRUD PRODUCTOS ###################
Route::get('/formModificarProducto/{id}','ProductosController@edit');
Route::post('/modificarProducto', 'ProductosController@update');

Route::get('/formEliminarProducto/{id}','ProductosController@delete');
Route::post('/eliminarProducto','ProductosController@destroy');

Route::get('/adminProductos', 'ProductosController@index');

Route::get('/formAgregarProducto', 'ProductosController@create');
Route::post('/agregarProducto','ProductosController@store');



