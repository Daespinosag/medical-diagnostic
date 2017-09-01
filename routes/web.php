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

use App\Entities\Diagnosis;
use App\Entities\Patient;
use App\Entities\PatientLevel;
use App\Entities\Level;
use App\LocalClass\Formula;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Carbon\Carbon;
use Illuminate\Http\Request;

Route::get('soap', [
    'as' => 'soap',
    'uses' => 'PatientController@soapTest'
]);

Route::post('/patientData/{document}', [
    'as' => 'patientData',
    'uses' => 'PatientController@getPatientData'
]);

Route::post('/patientClinicalData/{document}', [
    'as' => 'patientClinicalData',
    'uses' => 'PatientController@patientClinicalData'
]);

Route::post('/generateDiagnosis/{document}', [
    'as' => 'generateDiagnosis',
    'uses' => 'PatientController@generateDiagnosis'
]);

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

Route::get('/consultPatient',[
    'uses' 	=> 'ConsultPatientController@index',
    'as'	=> 'consultPatient'
]);

Route::post('/consultPatient/getDiagnostics',[
    'uses' 	=> 'ConsultPatientController@getDiagnostics',
    'as'	=> 'consultPatient.getDiagnostics'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','role:admin'],'prefix' => 'admin','name' => 'admin', 'as' => 'admin.'], function(){ //

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

    /* inicio rutas para step-one*/
    Route::post('processLevel/typeDiagnosis','ProcessLevelController@getTypeDiagnosis');
    Route::post('processLevel/createTypeDiagnosis','ProcessLevelController@createTypeDiagnosis');
    Route::post('processLevel/loadDiagnosis','ProcessLevelController@loadDiagnosis');
    Route::post('processLevel/createDiagnosis','ProcessLevelController@createDiagnosis');

    /* inicio fin para step-one*/
    Route::post('processLevel/createLevel','ProcessLevelController@createLevel');
    Route::post('processLevel/getVariables','ProcessLevelController@getVariables');
    Route::post('processLevel/getListCriterion','ProcessLevelController@getListCriterion');
    Route::post('processLevel/getCriterion','ProcessLevelController@getCriterion');
    Route::post('processLevel/saveCriterion','ProcessLevelController@saveCriterion');
    Route::post('processLevel/deleteCriterion','ProcessLevelController@deleteCriterion');
    Route::post('processLevel/updateLevel','ProcessLevelController@updateLevel');
    Route::post('processLevel/deleteLevel','ProcessLevelController@deleteLevel');
    Route::get('processLevel/redirectIndex','ProcessLevelController@redirectIndex');

    Route::get('localClass',function (){
        new App\LocalClass\Formula(7);
    });

});
