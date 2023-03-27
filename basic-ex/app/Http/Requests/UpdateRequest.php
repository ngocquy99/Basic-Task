<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|unique:users,email',
            'name'  => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password',
            'phonenumber' => 'required|digits:10',
            'gender' => 'required',
            'placeofbirth' => 'required'       
        ];
    }
}
