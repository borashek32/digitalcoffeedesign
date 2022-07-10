<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProjectForm extends FormRequest
{
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
            'title'       => 'required|max:100|min:3',
            // 'img'         => 'required|mimes:jpg,jpeg,png|max:1024',
            'category_id' => 'required',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required'       => 'Поле "Название" обязательно для заполнения.',
            'title.max'            => 'Максимальная длина поля "Название" 100 символов',
            'title.min'            => 'Минимальная длина поля "Название" 3 символов',
            // 'img.required'         => 'Поле "Фото" обязательно для заполнения',
            // 'img.max'              => 'Максимальный размер изображения 1024 Mb',
            'category_id'          => 'Поле "Категория" обязательно для заполнения',
            'description.required' => 'Поле "Текст" обязательно для заполнения',
            'description.min'      => 'Минимальная длина поля "Текст" 10 символа',
            'description.max'      => 'Максимальная длина поля "Текст" 5000 символов'
        ];
    }
}
