<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelPengguna extends Model
{
    public $timestamps = false;
    protected $table = 'users_level';

    public function user()
    {
        return $this->belongsTo(User::class, 'level_id', 'id');
    }
}
