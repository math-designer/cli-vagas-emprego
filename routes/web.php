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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'vagas'], function () {
        Route::get('/', 'VagasController@index')->name('vagas.index');
        Route::get('/create', 'VagasController@create')->name('vagas.create');
        Route::post('/store', 'VagasController@store')->name('vagas.store');
    });

    Route::group(['prefix' => 'empresas'], function () {
        Route::get('/', 'EmpresasController@index')->name('empresas.index');
        Route::get('/create', 'EmpresasController@create')->name('empresas.create');
        Route::post('/store', 'EmpresasController@store')->name('empresas.store');
    });
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
