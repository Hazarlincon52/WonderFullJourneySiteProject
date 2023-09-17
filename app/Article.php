<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function users(){
        return $this->belongsTo(Users::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $table = 'articles';
}
