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
            
            'titulo.required' => 'El titulo es ¡Obligatorio!',
            'contenido.required' => 'El post requiere un contenido',
            'valoracion.required' => 'required valoration',
            'titulo.min' => 'El titulo es demasiado corto',
            'contenido.min' => 'El contenido es demasiado corto',
            
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
            
                'titulo' => 'required|min:5',
                'contenido' => 'required|min:50',
                'valoracion' => 'required'
            ];
    }
}
