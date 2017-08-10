<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriterionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'variable_id'           => 'required',
            'level_id'              => 'required',
            'name'                  =>  '',
            'value_1'               => 'required',
            'value_2'               =>'',
            'comparison_operator'   => 'required',
            'unit'                  => ''

        ];

    }
}
