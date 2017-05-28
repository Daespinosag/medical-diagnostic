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

Route::get('/',[
    'uses' 	=> 'PublicController@index',
    'as'	=> 'public.index'
]);

Route::get('/about',[
    'uses' 	=> 'PublicController@about',
    'as'	=> 'public.about'
]);

Route::get('/community',[
    'uses' 	=> 'PublicController@community',
    'as'	=> 'public.community'
]);

Route::get('/events',[
    'uses' 	=> 'PublicController@events',
    'as'	=> 'public.events'
]);

Route::get('/extension',[
    'uses' 	=> 'PublicController@extension',
    'as'	=> 'public.extension'
]);

Route::get('/projects',[
    'uses' 	=> 'PublicController@projects',
    'as'	=> 'public.projects'
]);

Route::get('/publications',[
    'uses' 	=> 'PublicController@publications',
    'as'	=> 'public.publications'
]);

Route::get('/research',[
    'uses' 	=> 'PublicController@research',
    'as'	=> 'public.research'
]);

Route::get('/teaching',[
    'uses' 	=> 'PublicController@teaching',
    'as'	=> 'public.teaching'
]);

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

    Route::resource('typeDiagnosis','TypeDiagnosisController',['names' => [
        'index'     => 'admin.typeDiagnosis.index',
        'create'    => 'admin.typeDiagnosis.create',
        'store'     => 'admin.typeDiagnosis.store',
        'show'      => 'admin.typeDiagnosis.show',
        'edit'      => 'admin.typeDiagnosis.edit',
        'update'    => 'admin.typeDiagnosis.update',
        'destroy'   => 'admin.typeDiagnosis.destroy'
    ]]);

    Route::resource('patient','PatientController',['names' => [
        'index'     => 'admin.patient.index',
        'create'    => 'admin.patient.create',
        'store'     => 'admin.patient.store',
        'show'      => 'admin.patient.show',
        'edit'      => 'admin.patient.edit',
        'update'    => 'admin.patient.update',
        'destroy'   => 'admin.patient.destroy'
    ]]);

    Route::resource('diagnosis','DiagnosisController',['names' => [
        'index'     => 'admin.diagnosis.index',
        'create'    => 'admin.diagnosis.create',
        'store'     => 'admin.diagnosis.store',
        'show'      => 'admin.diagnosis.show',
        'edit'      => 'admin.diagnosis.edit',
        'update'    => 'admin.diagnosis.update',
        'destroy'   => 'admin.diagnosis.destroy'
    ]]);

});

