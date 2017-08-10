<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RolRequest extends FormRequest
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
                'type'  =>  'required',
                'name' => 'required|min:3|unique:roles,name,'.$this->route('rol'),
                'display_name'  => 'required',
                'description' => 'sometimes|min:3'
            ];
        }
        return [
            'name' => 'required|min:3|unique:roles',
            'description' => 'sometimes|min:3'
        ];
    }
}
