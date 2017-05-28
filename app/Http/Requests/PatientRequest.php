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
        return [
            'name'                  => 'required',
            'last_name_1'           => 'required',
            //'last_name_2'           => 'min:1',
            'email'                 => 'required|unique:patient',
            'identification_card'   => 'required|unique:patient,email_address',
            'gender'                => 'required'
        ];
    }
}
