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

Route::get('/registro', 'MiControlador@registro');

Route::get('/login', 'MiControlador@login');

Route::get('/faq', 'MiControlador@faq');

Route::get('/', 'MiControlador@index');

Route::get('actividades/agregar', 'ActiControlador@agregar');
Route::post('actividades/guardar', 'ActiControlador@guardar');

Route::get('actividades/listar', 'ActiControlador@listar');

 //Route::get('actividades/{id}', 'ActiControlador@editar');
Route::post('actividades/{id}', 'ActiControlador@actualizar');
