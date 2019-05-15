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
    return view('auth.login2');
});
//Route::get('/personas', 'PersonasController@index');
//Route::get('/personas/create', 'PersonasController@create');
Auth::routes([ 'reset'=>false]);
Route::group(['middleware' => 'auth'], function () {

    Route::resource('personas', 'PersonasController');
    

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('pdf', 'PdfController@generar');
});




