<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function article(){
        return $this->hasMany(Article::class);
    }

    protected $table = 'users';
}
