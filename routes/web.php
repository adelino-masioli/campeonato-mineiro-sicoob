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
    return view('site.index');
});


Auth::routes();

Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');
//cupons
//Route::middleware('auth')->get('upload-cupons', '\App\Http\Controllers\CupomController@createList');
Route::middleware('auth')->get('create-list', 'HomeController@createList');
Route::middleware('auth')->post('create-list-store', 'HomeController@storeList');
Route::middleware('auth')->get('create-list-destroy/{id}', 'HomeController@destroyList');

Route::post('consultar-cupons', '\App\Http\Controllers\CupomController@consult')->name('cupons.consult');
Route::get('numeros-da-sorte', '\App\Http\Controllers\CupomController@numbers')->name('numbers');
Route::get('cartapremiado/{slug}', '\App\Http\Controllers\CupomController@cartapremiado')->name('cartapremiado');

Route::get('/regulamento', function () {
    return view('site.regulamento');
})->name('regulation');
Route::get('/cooperativas-participantes', function () {
    return view('site.cooperativas-participantes');
})->name('cooperatives');

Route::post('enviar-contato', 'HomeController@submitform')->name('submitform');