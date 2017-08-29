<?php
/**
 * Created by PhpStorm.
 * User: magir
 * Date: 26/07/2017
 * Time: 22:50
 */

namespace App\Soap;


use App\Entities\MedicalHistory;
use App\Entities\Patient;
use App\Entities\Variable;
use App\Entities\VariablePatient;
use function array_first;
use function array_key_exists;
use function array_push;
use function array_values;
use Artisaninweb\SoapWrapper\SoapWrapper;
use function isNull;
use function trim;

class OfiClinicDataRecovery
{
    private $soapWrapper;

    public function __construct()
    {
        $this->soapWrapper = new SoapWrapper();

        $this->soapWrapper->add('oficlinic', function ($service){
            $service->wsdl('http://clinicacaidas.e-oficlinic.com/webservice/servicio.php?wsdl')
                ->trace(true);
        });
    }

    public function getPatientsList()
    {
        $response = $this->soapWrapper->call('oficlinic.listPacientes');
        return $response;
        
    }

    public function getPatientCasesList($patientIdNumber)
    {
        $response = $this->soapWrapper->call('oficlinic.getBasexPaciente', [
            'pDocumento' => $patientIdNumber
        ]);
        return $response;
    }

    public function getPatientCase($patientCaseNumber)
    {
        $response = $this->soapWrapper->call('oficlinic.getBasexCAS', [
            'pCAS' => $patientCaseNumber
        ]);
        return $response;
    }

    public function getPatientMedicalHistory($patientIdNumber)
    {
        $medicalDataList = array();
        $errors = array();

        $medicalHistoryList = $this->getPatientCasesList($patientIdNumber);
        $medicalHistoryList = json_decode($medicalHistoryList);

        $variables = Variable::all();

        if($medicalHistoryList != null && !empty($medicalHistoryList)){

            foreach ($medicalHistoryList as $medicalHistory){

                $medicalData = array();

                $medicalHistoryArray = (array) $medicalHistory;

                $medicalData['NumeroCaso'] = $medicalHistoryArray['CAS'];
                $medicalData['FechaAtencion'] = $medicalHistoryArray['FechaAtencion'];
                $medicalData['Genero'] = trim($medicalHistoryArray['Genero']);

                foreach ($variables as $variable){

                    if($variable->json_name == 'TestPEF_VelocidadMarcha'){
                        if($medicalHistoryArray['TestPEF_TiempoMejorPrueba'] == null ||
                            $medicalHistoryArray['TestPEF_TiempoMejorPrueba'] == ''){
                            array_push($errors, 'Falta la variable TestPEF_TiempoMejorPrueba en el caso '.$medicalHistoryArray['CAS']);

                        }else{
                            $medicalData[$variable->json_name] = 4 / $medicalHistoryArray['TestPEF_TiempoMejorPrueba'];
                        }

                    }elseif(!array_key_exists($variable->json_name, $medicalHistoryArray) ||
                        $medicalHistoryArray[$variable->json_name] == null ||
                        $medicalHistoryArray[$variable->json_name] == ''){

                        $variableLocalValue = $this->findPatientLocalValue($patientIdNumber, $variable->json_name,
                            $medicalData['NumeroCaso']);

                        if($variableLocalValue != null){
                            $medicalData[$variable->json_name] = $variableLocalValue->value;
                        }else{
                            array_push($errors, 'Falta la variable '.$variable->json_name.' en el caso '.$medicalHistoryArray['CAS']);
                        }
                    }else{
                        $medicalData[$variable->json_name] = $medicalHistoryArray[$variable->json_name];
                    }
                }

                $medicalDataList[$medicalHistoryArray['CAS']] = $medicalData;
            }
        }else{
            array_push($errors, 'No existe historia clínica para el paciente '.$patientIdNumber);
        }

        $medicalDataList['errors'] = $errors;

        return $medicalDataList;
    }

    public function findPatientLocalValue($patientIdNumber, $jsonVariableName, $case)
    {
        $patient = Patient::where('identification_card', $patientIdNumber)->get()->last();
        $variable = Variable::where('json_name', $jsonVariableName)->get()->last();

        $variablePatient = VariablePatient::where('variable_id', $variable->id)
            ->where('patient_id', $patient->id)
            ->where('case', $case)->get();

        if(count($variablePatient) > 0){
            return $variablePatient->last();
        }else{
            return null;
        }
    }

    public function getPatientData($patientIdNumber)
    {

        $patientList = $this->getPatientsList();

        $patientData = array_filter(json_decode($patientList),
            function ($e) use($patientIdNumber) {
                return trim($e->Documento) == $patientIdNumber;
        });

        if($patientData != null){
            $patientData = array_values($patientData);

            $patient = new Patient();
            $patient->name = $patientData[0]->Nom1." ".$patientData[0]->Nom2;
            $patient->last_name_1 = $patientData[0]->Ape1;
            $patient->last_name_2 = $patientData[0]->Ape2;
            $patient->email = "";
            $patient->identification_card = $patientData[0]->Documento;
            $patient->gender = $patientData[0]->Genero;

            return $patient;
        }else{
            return null;
        }




    }
}