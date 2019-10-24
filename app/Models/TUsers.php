<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TUsers extends Model
{
    protected $table = 't_users';

    // Юзер имеет 1 должность:
    public function post() {
        $this->hasOne('TPosts', 'id', 'post_id');
    }

    // Юзер имеет 1 отдел:
    public function otdel() {
        $this->hasOne('TOtdels', 'id', 'otdel_id');
    }
}
