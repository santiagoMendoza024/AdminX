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

Route::get('/test', function(){
    //Lo más básico es regresar un texto
    //return "Test Lavarel ";
    //Tambien podemos regresar un arreglo asociativo
    // Laravel nos regresa el contenido del arreglo pero ahora en formato Json
    /*
    return [
        'saludo' => 'Hola Mundo',
        'nombre' => 'Santiago Mendoza'
    ];
    */
    return view('test');
});

//La ruta que admite todo tipo de peticiones es
//Route::any()