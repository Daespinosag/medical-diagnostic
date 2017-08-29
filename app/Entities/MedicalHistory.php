<?php
/**
 * Created by PhpStorm.
 * User: magir
 * Date: 21/08/2017
 * Time: 09:52
 */

namespace App\Entities;


class MedicalHistory
{

    private $velocidad_marcha;

    private $fuerza_agarre;

    private $circunferencia_pantorrilla;

    private $deambulacion;

    private $escalones;

    private $lawton_total;

    private $barthel_total;

    private $temor_caer;

    private $numero_caso;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getVelocidadMarcha()
    {
        return $this->velocidad_marcha;
    }

    /**
     * @param mixed $velocidad_marcha
     */
    public function setVelocidadMarcha($velocidad_marcha)
    {
        $this->velocidad_marcha = $velocidad_marcha;
    }

    /**
     * @return mixed
     */
    public function getFuerzaAgarre()
    {
        return $this->fuerza_agarre;
    }

    /**
     * @param mixed $fuerza_agarre
     */
    public function setFuerzaAgarre($fuerza_agarre)
    {
        $this->fuerza_agarre = $fuerza_agarre;
    }

    /**
     * @return mixed
     */
    public function getCircunferenciaPantorrilla()
    {
        return $this->circunferencia_pantorrilla;
    }

    /**
     * @param mixed $circunferencia_pantorrilla
     */
    public function setCircunferenciaPantorrilla($circunferencia_pantorrilla)
    {
        $this->circunferencia_pantorrilla = $circunferencia_pantorrilla;
    }

    /**
     * @return mixed
     */
    public function getDeambulacion()
    {
        return $this->deambulacion;
    }

    /**
     * @param mixed $deambulacion
     */
    public function setDeambulacion($deambulacion)
    {
        $this->deambulacion = $deambulacion;
    }

    /**
     * @return mixed
     */
    public function getEscalones()
    {
        return $this->escalones;
    }

    /**
     * @param mixed $escalones
     */
    public function setEscalones($escalones)
    {
        $this->escalones = $escalones;
    }

    /**
     * @return mixed
     */
    public function getLawtonTotal()
    {
        return $this->lawton_total;
    }

    /**
     * @param mixed $lawton_total
     */
    public function setLawtonTotal($lawton_total)
    {
        $this->lawton_total = $lawton_total;
    }

    /**
     * @return mixed
     */
    public function getBarthelTotal()
    {
        return $this->barthel_total;
    }

    /**
     * @param mixed $barthel_total
     */
    public function setBarthelTotal($barthel_total)
    {
        $this->barthel_total = $barthel_total;
    }

    /**
     * @return mixed
     */
    public function getTemorCaer()
    {
        return $this->temor_caer;
    }

    /**
     * @param mixed $temor_caer
     */
    public function setTemorCaer($temor_caer)
    {
        $this->temor_caer = $temor_caer;
    }

    /**
     * @return mixed
     */
    public function getNumeroCaso()
    {
        return $this->numero_caso;
    }

    /**
     * @param mixed $numero_caso
     */
    public function setNumeroCaso($numero_caso)
    {
        $this->numero_caso = $numero_caso;
    }


}