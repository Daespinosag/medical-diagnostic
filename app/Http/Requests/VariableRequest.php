<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariableRequest extends FormRequest
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
                'name'                  =>  'required|min:3|unique:variable,name,'.$this->route('variable'),
                'json_name'             =>  'required|min:3|unique:variable,json_name,'.$this->route('variable'),
                'calculated'            =>  '',
                'calculation_operation' =>  '',
                'description'           =>  ''
            ];
        }
        return [
            'name'                  =>  'required|min:3|unique:variable',
            'json_name'             =>  'required|min:3|unique:variable',
            'calculated'            =>  '',
            'calculation_operation' =>  '',
            'description'           =>  ''
        ];
    }
}
