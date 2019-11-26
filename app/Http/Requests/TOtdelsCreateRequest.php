<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TOtdelsCreateRequest extends FormRequest
{
    public function authorize()
    {
        // false - Обязательная авторизация
        // true - Авторизация не требуется
        return true;
    }

    public function rules()
    {

        /*
        Поля в БД:
            'otdel'
            'address'
            'telefon'
            'email'
        */
        return [
            'otdel' => 'required|string|unique:t_otdels|min:2|max:200',
            'address' => 'required|min:2|max:200',
            'telefon' => 'required|min:2|max:200',
            'email' => 'required|email',
        ];
    }

    // Перевод атрибутов:
    public function attributes()
    {
        // resource\lang\validation
        return [
            'otdel' => 'Отдел',
            'address' => 'Адрес',
            'telefon' => 'Телефон'

        ];
    }

    // Перевод сообщения или свои значения:
    public function messages()
    {
        return [
            'otdel.unique' => 'Отдел должен быть уникален!',
            'address.required'  => 'Адрес обязателен!',
        ];
    }

}
