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
        'email' => 'email|max:35',
        'password' => 'required|min:3',
        'password_confirmation' => 'required|min:3'
        ];
    }

   //  public function messages()
   //  {
   //     return [
   //     'email.max' => 'El Email es muy extenso',
   //     'email.email' => 'El Email no tiene el formato',
   //     'password.min' => 'La contraseña es muy corta',
   //     'password.required' => 'La contraseña es requerida',
   //     'password_confirmation.required' => 'Es necesario verificar la nueva contraseña',
   //     'password.confirmed' => 'La verificación de contraseñas no corresponde'
   //     ];
   // }
}
