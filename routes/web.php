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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::resource('certificado', 'CertificadoController');
Route::get('certificado/delete/{id}', 'CertificadoController@destroy');
Route::get('certificado/show/{id}', 'CertificadoController@show');
Route::get('certificado/create', 'PalestraController@certi');

Route::resource('escola', 'EscolaController');
Route::get('escola/delete/{id}', 'EscolaController@destroy');

Route::resource('palestra', 'PalestraController');
Route::get('palestra/delete/{id}', 'PalestraController@destroy');


