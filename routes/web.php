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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin','name' => 'admin'], function(){

    Route::resource('rol', 'RolController', ['names' => [
        'index'     => 'admin.rol.index',
        'create'    => 'admin.rol.create',
        'store'     => 'admin.rol.store',
        'show'      => 'admin.rol.show',
        'edit'      => 'admin.rol.edit',
        'update'    => 'admin.rol.update',
        'destroy'   => 'admin.rol.destroy'
    ]]);

});

