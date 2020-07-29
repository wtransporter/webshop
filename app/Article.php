<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return '/articles/'.$this->slug;
    }

    public function imagePath()
    {
    	$imagePath = '/images/proizvodi/'.$this->id.'/160x160_'.$this->image;
    	
    	return file_exists(public_path().$imagePath) ? $imagePath : noImage();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
