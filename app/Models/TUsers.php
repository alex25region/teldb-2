<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TUsers extends Model
{
    protected $table = 't_users';

    protected $fillable = [
        'surname',
        'firstname',
        'secondname',
        'post_id',
        'iptel',
        'tel',
        'otdel_id'
    ];

    // Юзер имеет 1 должность:
    public function getPost() {
        return $this->hasOne(TPosts::class, 'id', 'post_id');
    }

    // Юзер имеет 1 отдел:
    public function getOtdel() {
        return $this->hasOne(TOtdels::class, 'id', 'otdel_id');
    }
}
