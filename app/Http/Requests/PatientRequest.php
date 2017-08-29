<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PatientRequest extends FormRequest
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
                'name'                  => 'required',
                'last_name_1'           => 'required',
                'last_name_2'           => '',
                'email'                 => '',
                'identification_card'   => 'required|unique:patient,identification_card,'.$this->route('patient'),
                'gender'                => 'required'
            ];
        }

        return [
            'name'                  => 'required',
            'last_name_1'           => 'required',
            'last_name_2'           => '',
            'email'                 => '',
            'identification_card'   => 'required|unique:patient',
            'gender'                => 'required'
        ];


    }
}
