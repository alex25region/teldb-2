<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPosts extends Model
{
    protected $table = 't_posts';

    protected $guarded = [];

    // Должность имеет множество пользователей:
    public function getUsers() {
        return $this->hasMany(TUsers::class, 'post_id', 'id');
    }
}
