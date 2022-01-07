<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
                'ID_USER'=> 'required|unique:user__creates|numeric|digits_between:9, 9',
                'EMAIL'=>'required|max:30|unique:user__creates|email',
                'NAME'=>'required|max:50|regex:/^[\pL\s\-]+$/u|unique:user__creates',
                'PASSWD_USER'=>'required|min:8|max:30'
        ];
    }

    public function messages()
    {
        return [
            'ID_USER.digits_between'=> 'El codigo sis tiene debe tener 9 caracteres numericos',
            'NAME.unique'=> 'La persona ya se ha registrada'
        ];
    }
}
