<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConvocatoria extends FormRequest
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
            'TITULO_CONV'=> 'required|max:30',
            'FECHA_CONV'=> 'required',
            'SEMESTRE_CONV'=> 'required',
            'DOC_CONV'=> 'required'
        ];
    }
}
