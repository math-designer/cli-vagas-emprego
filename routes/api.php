<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'sufix' => 'empresas'], function () {
    Route::group(['prefix' => 'empresas'], function () {
        Route::get('/', 'EmpresasController@index');
        Route::post('/', 'EmpresasController@create');
        Route::get('/consultar/{areaAtuacao}/{regiao}', 'EmpresasController@search');
    });

    Route::group(['prefix' => 'vagas'], function () {
        Route::get('/', 'VagasController@index');
        Route::post('/', 'VagasController@create');
        Route::get('/consultar/{areaAtuacao}/{regiao}', 'VagasController@search');
    });
});

