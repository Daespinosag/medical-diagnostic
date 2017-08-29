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
    'uses' => function(){

        //$response = OfiClinic::getPatientData('1199327');
        //$response = OfiClinic::getPatientCase(242);
        $response = OfiClinic::getPatientCasesList('1209297');
        dd(json_decode($response));

        /*$soapWrapper = new SoapWrapper();

        $soapWrapper->add('oficlinic', function ($service){
            $service->wsdl('http://clinicacaidas.e-oficlinic.com/webservice/servicio.php?wsdl')
                ->trace(true);
        });

        $response = $soapWrapper->call('oficlinic.listPacientes');

        $response2 = $soapWrapper->call('oficlinic.getBasexPaciente', [
            'pDocumento' => '1209297'
        ]);

        $response3 = $soapWrapper->call('oficlinic.getBasexCAS', [
            'pCAS' => 242
        ]);

        dd(json_decode($response3));*/

        /*
        //crear un cliente del servicio indicado por la url hacia el WSDL.
        $cliente = new SoapClient("http://clinicacaidas.e-oficlinic.com/webservice/servicio.php?wsdl");

        //al crear el cliente, se crean automáticamente los métodos definidos en el WSDL.
        $respuesta = $cliente->listPacientes();

        dd($respuesta);
        */
    }
]);

Route::post('/patientData/{document}', [
    'as' => 'patientData',
    'uses' => function($document){
        $response = OfiClinic::getPatientData($document);

        return $response;
    }
]);

Route::post('/patientClinicalData/{document}', [
    'as' => 'patientClinicalData',
    'uses' => function($document){
        $response = OfiClinic::getPatientMedicalHistory($document);

        return $response;
    }
]);

Route::post('/generateDiagnosis/{document}', [
    'as' => 'generateDiagnosis',
    'uses' => function(Request $request, $document){

        $caseDataList = $request->get('case');

        $diagnoses = Diagnosis::with('levels')->get();
        $errorList = [];
        $diagnosisResult = [];

        foreach ($diagnoses as $diagnosis){

            foreach ($diagnosis->levels as $level){

                if ($level->gender == 'ALL' || $level->gender == $caseDataList['Genero']) {
                    $formula = new Formula($level->id);

                    $formulaDataList = array();
                    $correct = true;

                    foreach ($formula->getParametersFrom() as $variable) {
                        if (array_key_exists($variable, $caseDataList)) {
                            $formulaDataList[$variable] = $caseDataList[$variable];
                        } else {
                            array_push($errorList, 'Diagnostico: ' . $diagnosis->name . ' no se puede generar, falta variable: ' . $variable . '.');
                            $correct = false;
                        }
                    }
                    $value = false;
                    if ($correct) {
                        $value = $formula->insertUserValues($formulaDataList)->evalFormula()->getEvalForm();
                    }

                    $diagnosisResult[$level->id] = ['flag' => $value, 'formula' => $formula->getFormula(),
                        'response' => $level->response, 'gender' => $level->gender, 'level' => $level->id];
                }
            }

        }

        $patient = Patient::where('identification_card', $document)->get()->first();

        $patientLevels = PatientLevel::where('patient_id', $patient->id)
            ->where('medical_case', $caseDataList['NumeroCaso'])->get(['id']);
        PatientLevel::destroy($patientLevels->toArray());

        foreach ($diagnosisResult as $diagnosis){

            if($diagnosis['flag']){
                $patientLevel = new PatientLevel();

                $patientLevel->level_id = $diagnosis['level'];
                $patientLevel->patient_id = $patient->id;
                $patientLevel->diagnosis_date = new Carbon();
                $patientLevel->medical_case = $caseDataList['NumeroCaso'];

                $patientLevel->save();
            }
        }

        return ['result' => $diagnosisResult, 'error' => $errorList];

        //Validar datos reglas

        return view('crud.patient.show', compact('patient', $patient));
    }
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

    Route::get('localClass',function (){
        new App\LocalClass\Formula(7);
    });

});
