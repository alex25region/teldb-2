<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TPostsRequest extends FormRequest
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
            'post'
        */
        return [
            'post' => 'required|string|unique|min:2|max:100',
        ];
    }
}
