<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateMessageForm extends FormRequest
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
            'name'       => 'required|max:100|min:3',
            'email'      => 'required|email',
            'message'    => 'required|min:10|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Поле "Имя" обязательно для заполнения.',
            'name.max'             => 'Максимальная длина поля "Имя" 100 символов',
            'name.min'             => 'Минимальная длина поля "Имя" 3 символов',
            'email.required'       => 'Поле "Email" обязательно для заполнения',
            'email.email'          => 'Введите валидный электронный адрес',
            'message.required'     => 'Поле "Сообщение" обязательно для заполнения',
            'message.min'          => 'Минимальная длина поля "Сообщение" 10 символа',
            'message.max'          => 'Максимальная длина поля "Сообщение" 5000 символов'
        ];
    }
}
