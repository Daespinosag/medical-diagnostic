<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DiagnosisRequest extends FormRequest
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
        if ($this->route()->getActionMethod() ===  'update'){
            return [
                'type_diagnosis_id' => 'required',
                'name' => 'required|min:3|unique:diagnosis,name,'.$this->route('diagnosi'),
                'description' => 'sometimes|min:3'
            ];
        }
        return [
            'type_diagnosis_id' => 'required',
            'name' => 'required|min:3|unique:diagnosis',
            'description' => 'sometimes|min:3'
        ];
    }
}
