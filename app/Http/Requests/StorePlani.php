<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlani extends FormRequest
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
            'NOMBRE_GRUPO'=> 'required|max:32|exists:grupo_empresas,NAME_EMP',
            'DOC_CAL'=> 'required|mimes:pdf'
        ];
    }
    public function messages()
    {
        return [
            'NOMBRE_GRUPO.exists'=> 'El grupo-empresa no esta registrado'
        ];
    }
}
