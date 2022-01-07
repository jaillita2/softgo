<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrupo extends FormRequest
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
            'NAME_EMP'=> 'required|max:25|unique:grupo_empresas',
            'EMAIL_DOCE'=> 'required|max:30|unique:grupo_empresas|email',
            'DIRECCION'=> 'required|max:50',
            'TELEFONO'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:18',
            'SOCIOS'=> 'required|max:400',
            'ENC_GR'=> 'required|max:35|unique:grupo_empresas'
        ];
    }
}
