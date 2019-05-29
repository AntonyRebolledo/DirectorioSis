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

Route::get('/', 'Auth\LoginController@showLoginForm');



Auth::routes([ 'reset'=>false]);

Route::group(['middleware' => 'auth'], function () {

    Route::resource('personas', 'PersonasController');

    Route::get('pdf', 'PdfController@generar');
    Route::get('pdf/index', 'PdfController@index');
    Route::post('pdf/index', 'PdfController@postReporte');
    Route::post('Graficas','GraficasController@Index');
    Route::get('Graficas/total','GraficasController@VerGeneral');

});




