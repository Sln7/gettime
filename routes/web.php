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

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('mesas')->group(function () {
        Route::get('/', 'MesasController@index')->name('mesa.index');
        Route::get('new', 'MesaController@new')->name('mesa.new');
        Route::post('store', 'MesaController@store')->name('mesa.store');;
        Route::get('edit/{mesa}', 'MesaController@edit')->name('mesa.edit');
        Route::post('update/{id}', 'MesaController@update')->name('mesa.update');
        Route::get('remove/{id}', 'MesaController@delete')->name('mesa.remove');
    });
    Route::prefix('dados')->group(function () {
        Route::get('/', 'DadosController@index')->name('dado.index');
        Route::get('create', 'DadosController@create')->name('dado.create');
        Route::post('store', 'DadosController@store')->name('dado.store');
        Route::get('showpredict', 'DadosController@showpredict')->name('dado.showpredict');
        Route::post('predict', 'DadosController@predict')->name('dado.predict');
        Route::get('edit/{dado}', 'DadosController@edit')->name('dado.edit');
        Route::post('update/{id}', 'DadosController@update')->name('dado.update');
        Route::get('remove/{id}', 'DadosController@delete')->name('dado.remove');
    });
    Route::prefix('user')->group(function () {
        Route::get('/time', 'UserController@time')->name('user.time');
        Route::get('/ready', 'UserController@ready')->name('user.ready');
        Route::get('/end', 'UserController@end')->name('user.end');
        Route::get('/start', 'UserController@start')->name('user.start');

    });
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
