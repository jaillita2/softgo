<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'ID_USER'=> 'required|max:10numeric|digits_between:9, 9|exists:user__creates,ID_USER',
            'COD_CURSO'=> 'required|max:8|exists:user__creates,COD_CURSO',
            'ESTUDIANTE'=> 'required|min:15|max:50|exists:user__creates,NAME|unique:cursos'
        ];
    }

    public function messages()
    {
        return [
            'ESTUDIANTE.exists'=> 'Aun no estas registrado, primero debes de registrarte como estudiante'
        ];
    }
}
