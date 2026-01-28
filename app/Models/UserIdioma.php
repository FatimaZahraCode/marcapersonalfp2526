<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Idioma extends Model
{
    protected $table = 'users_idiomas';

    protected $fillable = [
        'id',
        'user_id',
        'idioma_id'
    ];
    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function idioma()
    {
        return $this->hasMany(Idioma::class, 'idioma_id');
    }
}
