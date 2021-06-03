<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    public function messages()
    {
        return [

            'password.required' => 'Su contraseña es necesaria',
            'login.required' => 'Su nombre de usuario es necesario',

        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|min:5',
                'password' => 'required|min:8',
        ];
    }
}
