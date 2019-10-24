<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TOtdels extends Model
{
    protected $table = 't_otdels';

    protected $guarded = [];

    // Отдел имеет множество пользователей:
    public function users() {
        return $this->hasMany(TUsers::class, 'otdel_id', 'id');
    }
}
