<?php

namespace App;

use Illuminate\Support\Str;
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

    public static function import($articles)
    {
        $articles->each(function($article, $key) {
            static::updateOrCreate([
                'title' => $article->Name,
                'slug' => $article->ID.'-'.Str::slug($article->Name, '-'),
                'code' => $article->Barcode,
                'tax' => $article->VatID,
            ]);
        });
    }

    public function activate()
    {
        $this->update(['active' => true]);
    }
    
    public function deactivate()
    {
        $this->update(['active' => false]);
    }
}
