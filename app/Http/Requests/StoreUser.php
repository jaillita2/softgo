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
                'NAME_USER'=> 'required|max:30|min:4|unique:user__creates|alpha_dash',
                'ID_USER'=> 'required|max:299999999|unique:user__creates|numeric',
                'EMAIL'=>'required|max:30|unique:user__creates|email',
                'LAST_NAME'=>'required|max:60|alpha',
                'NAME'=>'required|max:30|alpha',
                'PASSWD_USER'=>'required|min:8|max:30'
        ];
    }
}
