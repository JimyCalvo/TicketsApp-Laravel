<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password'=>'required|min:8',
        ];
    }
    public function messages(){
        return[
            'email.required'=>'Campo Obligatorio',
            'password.required'=>'Campo Obligatorio',
            'password.min:8'=>'Email y/o Contraseña es incorrecta',
        ];
    }
    public function attributes()
{
    return [
        'email' => 'Correo Valido',
    ];
}
}
