<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TUsersCreateRequest extends FormRequest
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
            'surname'
            'firstname'
            'secondname'
            'post_id'
            'iptel'
            'tel'
            'otdel_id'
        */
        return [
            'surname' => 'required|min:2|max:50',
//            'firstname' => 'string|max:50',
//            'secondname' => 'string|max:50',
            'post_id' => 'required|integer|exists:t_posts,id',
            'iptel' => 'integer|min:4',
            'otdel_id' => 'required|integer|exists:t_otdels,id',
        ];
    }
}
