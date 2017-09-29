<?php

namespace App\Http\Controllers;

use App\Entities\Diagnosis;
use App\Entities\Level;
use App\Entities\PatientLevel;
use App\LocalClass\Formula;
use function array_push;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Entities\Patient;
use App\Http\Requests\PatientRequest;
use OfiClinic;
use PDF;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(10);
        return view('crud.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        Patient::create($request->all());
        return redirect()->route('admin.patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        $cases = PatientLevel::select('medical_case as val')->where('patient_id',$id)->distinct('medical_case')->get()->toArray();
        $arr = [];
        foreach ($cases as $caseKey => $caseValue){
            $arr[$caseValue['val']] = [];
            foreach ($patient->levels as $level){
                if ($caseValue['val'] == $level->pivot->medical_case){
                    array_push( $arr[$caseValue['val']], [
                        'date' => $level->pivot->diagnosis_date,
                        'diagnosis_name' => $level->diagnosis->name,
                        'response'  => $level->response
                    ]);
                }
            }
        }
        return view('crud.patient.show',compact('patient', 'arr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('crud.patient.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->fill($request->all());
        $patient->save();

        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->levels()->detach();
        $patient->users()->detach();
        $patient->variables()->detach();
        Patient::destroy($id);
        return redirect()->route('admin.patient.index');
    }

    public function getPatientData($document)
    {
        $response = OfiClinic::getPatientData($document);

        return $response;
    }

    public function patientClinicalData($document){
        $response = OfiClinic::getPatientMedicalHistory($document);

        return $response;
    }

    public function generateDiagnosis(Request $request, $document){

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
    }

    public function soapTest(){

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

    public function generatePatientCaseReport($id, $caseNumber){

        $patient = Patient::findOrFail($id);

        $cases = PatientLevel::select('medical_case as val')->where('patient_id',$id)
            ->where('medical_case', $caseNumber)
            ->get()->toArray();
        $arr = [];
        foreach ($cases as $caseKey => $caseValue){
            $arr[$caseValue['val']] = [];
            foreach ($patient->levels as $level){
                if ($caseValue['val'] == $level->pivot->medical_case){
                    array_push( $arr[$caseValue['val']], [
                        'date' => $level->pivot->diagnosis_date,
                        'diagnosis_name' => $level->diagnosis->name,
                        'response'  => $level->response
                    ]);
                }
            }
        }

        //return view('crud.patient.report', compact('patient', 'arr'));
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('crud.patient.report', compact('patient', 'arr'));
        return $pdf->stream('report.pdf');

        //dd($id, $caseNumber, $arr, $pdf);
    }
}
