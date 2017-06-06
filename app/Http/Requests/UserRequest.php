<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;


class UserRequest extends FormRequest
{
    private $route;

    /**
     * UserRequest constructor.
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
                'username'              => 'required|min:3|unique:users,username,'.$this->route('user'),
                'name'                  => 'required',
                'email'                 => 'required|min:3|unique:users,email,'.$this->route('user'),
                'profession'            => '',
                'identification_card'   => 'required|string',
                'gender'                => 'required',
            ];
        }
        return [
            'username'              => 'required|min:3|unique:users',
            'name'                  => 'required',
            'email'                 => 'required|min:3|unique:users',
            'profession'            => '',
            'identification_card'   => 'required|string',
            'gender'                => 'required',
            'password'              => 'required|string|min:6|confirmed',
        ];
    }
}
