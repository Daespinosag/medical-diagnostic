<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class RolRequest extends FormRequest
{
    private $route;

    /**
     * RolRequest constructor.
     * @param Route $route
     */
    public function __construct(Route $route)
    {
        $this->route = $route;
    }
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
