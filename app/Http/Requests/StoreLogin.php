<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogin extends FormRequest
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
            'EMAIL'=>'required|max:30|exists:user__creates,EMAIL',
            'PASSWD_USER'=>'required|min:8|max:30|exists:user__creates,PASSWD_USER',
            
            
        ];
    }
}