<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/quienesSomos',function(){
    return view('quienesSomos');
});

Route::get('/escuela-de-formacion',function(){
    return view('escuela-de-formacion');
});

Route::get('/carreras',function(){
    return view('carreras');
});

Route::get('/fotos',function(){
    return view('fotos');
});

Route::get('/videos',function(){
    return view('videos');
});