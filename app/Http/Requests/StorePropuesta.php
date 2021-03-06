<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropuesta extends FormRequest
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
            'NAME_P'=> 'required|max:30|exists:grupo_empresas,NAME_EMP',
            'SEMESTRE_P'=> 'required',
            'DOC_P'=> 'required|mimes:pdf,zip'
        ];
    }
}
