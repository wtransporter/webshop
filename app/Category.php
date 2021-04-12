<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function child()
    {
        return $this->hasMany(Category::class,'bscat_id', 'id')
            ->orderBy('wssort');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
