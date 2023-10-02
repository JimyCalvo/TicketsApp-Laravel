<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'apellido' => 'required|string|min:3|max:20',
            'nombre' => 'required|string|min:3|max:30',
            'email' => 'required|string|email|max:30|unique:users',
            'password' => 'required|string|min:8|confirmed|max:20',
        ];
    }
}
