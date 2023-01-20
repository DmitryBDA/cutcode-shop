<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'name' => ['required', 'string'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Обязательное поле',
            'name.required' => 'Обязательное поле',
            'email.email' => 'Введите корректный email',
            'email.unique' => 'Данный email уже зарегистрирован',
            'password.required' => 'Обязательное поле',
            'password.confirmed' => 'Подтверждение пароля не совпадает.',

        ];
    }
}
