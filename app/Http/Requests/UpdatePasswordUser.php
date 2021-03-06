<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePasswordUser extends Request
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
        'email' => 'unique:users,email|email|max:35|min:6',
        'password' => 'required|min:3|confirmed',
        'password_confirmation' => 'required|min:3'
        ];
    }

}
