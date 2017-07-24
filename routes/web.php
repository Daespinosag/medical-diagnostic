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


Route::group(['middleware'=>['auth'],'prefix' => 'admin','name' => 'admin', 'as' => 'admin.'], function(){ //

    Route::resource('rol', 'RolController');
    Route::resource('typeDiagnosis','TypeDiagnosisController');
    Route::resource('patient','PatientController');
    Route::resource('diagnosis','DiagnosisController');
    Route::resource('permission','PermissionController');
    Route::resource('user','UserController');
    Route::resource('level','LevelController');
    Route::resource('variable','VariableController');
    Route::resource('criterion','CriterionController');
    Route::resource('variablePatient','VariablePatientController');
    Route::resource('patientLevel','PatientLevelController');

    Route::get('processLevel','ProcessLevelController@index');
    Route::post('processLevel/typeDiagnosis','ProcessLevelController@getTypeDiagnosis');
    Route::post('processLevel/createTypeDiagnosis','ProcessLevelController@createTypeDiagnosis');
    Route::post('processLevel/loadDiagnosis','ProcessLevelController@loadDiagnosis');
    Route::post('processLevel/createDiagnosis','ProcessLevelController@createDiagnosis');
});
