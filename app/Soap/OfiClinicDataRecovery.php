<?php
/**
 * Created by PhpStorm.
 * User: magir
 * Date: 26/07/2017
 * Time: 22:50
 */

namespace App\Soap;


use App\Entities\Patient;
use function array_first;
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