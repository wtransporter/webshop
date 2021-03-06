<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function child()
    {
        return $this->hasMany(Category::class,'id','bscat_id');
    }
}
