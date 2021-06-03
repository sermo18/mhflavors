<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function messages()
    {
        return [

            'nombre.required' => 'El nombre es ¡Obligatorio!',
            'nacimiento.required' => 'Es necesario saber tu fecha de nacimiento',
            'rol.required' => 'Debe seleccionar una opcion ',
            'asunto.required' => 'Necesitas especificar un asunto',
            'inputEmail3.required' => 'Es necesario tu correo electrónico',
            'password.required' => 'Su contraseña es necesaria',
            'login.required' => 'Su nombre de usuario es necesario',
            'password.min' => 'Su contraseña debe tener al menos 8 caracteres',
            'login.min' => 'Su nombre de usuario debe tener al menos 5 caracteres',

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

                'nombre' => 'required',
                'login' => 'required|min:5',
                'password' => 'required|min:8',
                'nacimiento' => 'required',
                'rol' => 'required',
                'inputEmail3' => 'required',
                'asunto' => 'required',
            ];
    }
}
