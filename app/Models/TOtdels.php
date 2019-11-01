<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TOtdels extends Model
{
    protected $table = 't_otdels';

    protected $guarded = [];

    // Отдел имеет множество пользователей:
    // Данная функция участвует в стартовой странице,
    // где отображаются сначала отделы и пользователи состоящие в этом отделе,
    // далее идет сортировка по должностям, а затем по фамилии.
    public function getUsers() {
        return $this->hasMany(TUsers::class, 'otdel_id', 'id')->orderBy('post_id')->orderBy('surname');
    }
}
