<?php

namespace App\LocalClass;

use App\Entities\Criterion;
use App\Entities\Level;

class Formula
{
    private $level = null;

    private $formula = null;

    private $arrayForm = [];

    private $variables = [];

    public $evalForm = false;

    /*
        //Esto es lo que se tiene que ejecutar para cada uno de los diagnosticos que se le quieran hacer al paciente
        // primero debe crear el objeto **** formula = new Formula ***
        // luego debe extraer las variables a consultar con formula->getVariables() lo cual retonara un array con las variables que debe consultR DEL USUARIO
        // luego debe ejecutar $value = $this->insertUserValues($var_for_user)->evalFormula()->getEvalForm();
        // $var_for_user = ['json_name' => 'value_user']
        // la respuesta o $value sera true or false
    */

    public function __construct($levelId)
    {
        $this->getLevel($levelId);
        $this->form();
    }



    /*
        Evaluar la formula creada
    */

    public function evalFormula()
    {
        $var = false;
        eval("\$var = $this->formula;");
        $this->evalForm = $var;

        return $this;
    }

    /*
     *   recibe un parametro ['jon_variable_name' => 'value_for_user']
     *   $values = ['variable' => 10];

    */

    public function insertUserValues(array $values)
    {
        foreach ($values as $index => $value){
            $this->formula = str_replace('_'.$index.'_',$value,$this->formula);
        }

        return $this;
    }

    public function getParametersFrom()
    {
        return $this->variables;
    }

    public function getEvalForm()
    {
        return $this->evalForm;
    }



    private function form()
    {
        $this->formula = $this->level->formula;
        $this->arrayForm = explode(" ", $this->formula);

        foreach ($this->arrayForm as $index => $value)
        {
            if (strstr($value,'_')){
                $criterionId = (integer)str_replace('_','',$value);
                $criterion = Criterion::with('variable')->findOrFail($criterionId);
                $this->variables[$index] = $criterion->variable->json_name;

                $this->formula = str_replace(
                    '_'.$criterionId.'_',
                    $this->getReplace($criterion),
                    $this->formula
                );

            }
        }

    }

    private function getReplace($criterion){

        $temp = '';
        if ($criterion->comparison_operator == '<>'){

            $min = min([$criterion->value_1,$criterion->value_2]);
            $max = max([$criterion->value_1,$criterion->value_2]);

            $temp .='( _'.$criterion->variable->json_name.'_ >= '.$min.' AND _'.$criterion->variable->json_name.'_ <= '.$max.' )';
        }else{
            $temp .= '( _'.$criterion->variable->json_name.'_ '.$criterion->comparison_operator.' '.$criterion->value_1.' )';
        }

        return $temp;
    }

    private function getLevel($id)
    {
        $this->level = Level::findOrFail($id);
    }
}