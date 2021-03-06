<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEspecificacion extends FormRequest
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
            'TITULO_ESP'=> 'required|max:30',
            'FECHA_ESP'=> 'required|after:start_date',
            'SEMESTRE_ESP'=> 'required',
            'DOC_ESP'=> 'required|mimes:pdf'
        ];
    }
}
