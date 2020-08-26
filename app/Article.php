<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return '/articles/'. $this->slug;
    }    
    
    public function adminPath()
    {
    	return '/tp-admin/articles/'. $this->slug;
    }

    public function imagePath()
    {
    	$imagePath = '/images/proizvodi/'.$this->id.'/160x160_'.$this->image;
    	
    	return file_exists(public_path().$imagePath) ? $imagePath : noImage();
    }

    public function imageBasePath()
    {
        return '/images/proizvodi/'.$this->id;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order')->withPivot('price');
    }
}
