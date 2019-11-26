<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TUsersUpdateRequest extends FormRequest
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
//            'firstname' => 'string|min:2|max:50',
//            'secondname' => 'string|min:2|max:50',
            'post_id' => 'required|integer|exists:t_posts,id',
            'iptel' => 'integer|min:4',
            'otdel_id' => 'required|integer|exists:t_otdels,id',
        ];
    }
}
